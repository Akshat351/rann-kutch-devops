<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Source;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Inquiry;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Mail;
use App\Traits\Auditable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use App\Traits\GenerateDynamicRoutesTrait;

class PageController extends Controller
{
    use GenerateDynamicRoutesTrait;
    public function index()
    {
        // $this->importRannOfKutchTrips();
        // $this->sitemap();
        $data['meta_title'] = 'Rann of Kutch Taxi Service | Affordable Cab Booking from Bhuj & Ahmedabad';
        $data['meta_description'] = 'Book reliable taxi services for Rann of Kutch from Bhuj, Ahmedabad, and nearby cities. Enjoy safe rides, experienced drivers, and 24/7 cab booking for White Rann, Mandvi, and tourist destinations.';
        return view('front.home', compact('data'));
    }

    public function sitemap()
    {
        $this->generate_main_sitemap();
        $this->generate_xml_routes();
        // $this->generate_other_page();
        return 'sitemap generated successfully.';
    }

    private function createTrip($source, $destination, $distance, $mini, $sedan, $ertiga, $innova)
    {
        $exists = Trip::where('source_id', $source->id)
            ->where('destination_id', $destination->id)
            ->first();

        if ($exists) return;

        Trip::create([
            'source_id' => $source->id,
            'destination_id' => $destination->id,
            'slug' => $source->slug . '-to-' . $destination->slug . '-taxi',
            'name' => ucfirst($source->name) . ' to ' . ucfirst($destination->name) . ' Taxi',
            'trip_type' => array_flip(Trip::TRIP_TYPE_SELECT)['source-to-destination-taxi'],
            'distance' => $distance, // :white_check_mark: added field
            'mini' => $mini,
            'sedan' => $sedan,
            'ertiga' => $ertiga,
            'innova' => $innova,
            'sort_description' => 'Book taxi from ' . ucfirst($source->name) . ' to ' . ucfirst($destination->name),
            'description' => 'Affordable taxi from ' . ucfirst($source->name) . ' to ' . ucfirst($destination->name) . ' with Mini, Sedan, Ertiga, and Innova options. Distance: ' . $distance . '.',
            'meta_title' => ucfirst($source->name) . ' to ' . ucfirst($destination->name) . ' Taxi Booking | Rann of Kutch Travels',
            'meta_description' => 'Book a cab from ' . ucfirst($source->name) . ' to ' . ucfirst($destination->name) . ' easily online at best fares. Distance: ' . $distance . '.',
        ]);
    }

    public function importRannOfKutchTrips()
    {
        $csvPath = public_path('trip_routes_final.csv');

        if (!file_exists($csvPath)) {
            dd(":x: CSV file not found at path: {$csvPath}");
        }

        $csvData = file_get_contents($csvPath);
        $rows = array_map('str_getcsv', preg_split("/\r\n|\n|\r/", $csvData));
        $inserted = 0;
        $skipped = 0;


        foreach ($rows as $key => $row) {
            if ($key == 0 || count($row) < 6) continue;

            // Adjust indexes based on CSV columns
            $sourceName = trim($row[0]);
            $destinationName = trim($row[1]);
            $distance = trim($row[2]);

            $mini = (int) ($row[3] ?? 0);
            $sedan = (int) ($row[4] ?? 0);
            $ertiga = (int) ($row[5] ?? 0);
            $innova = (int) ($row[6] ?? 0);

            if ($sourceName == $destinationName) continue; // skip same city

            $source = Source::where('name', $sourceName)->first();
            $destination = Destination::where('name', $destinationName)->first();

            if (!$source || !$destination) {
                $skipped++;
                continue;
            }

            $this->createTrip($source, $destination, $distance, $mini, $sedan, $ertiga, $innova);
            $this->createTrip($destination, $source, $distance, $mini, $sedan, $ertiga, $innova);

            $inserted += 2;
        }

        echo ":white_check_mark: Inserted: $inserted\n:black_right_pointing_double_triangle_with_vertical_bar: Skipped: $skipped";
    }

    public function get_source(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        if (!empty($searchTerm)) {
            $source_details = Source::where('is_airport', Source::IS_AIRPORT['No'])->where('name', 'LIKE', $searchTerm . '%')
                ->orderBy('name', 'ASC')
                ->limit(10)
                ->get(['name', 'id']);


            return json_encode($source_details);
        }
    }

    public function get_destination(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        if (!empty($searchTerm)) {
            $destination_details = Destination::where('is_airport', Source::IS_AIRPORT['No'])->where('name', 'LIKE', $searchTerm . '%')
                ->orderBy('name', 'ASC')
                ->limit(10)
                ->get(['name', 'id']);

            return json_encode($destination_details);
        }
    }

    public function get_airports(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        if (!empty($searchTerm)) {
            $airport_details = Source::where('is_airport', Source::IS_AIRPORT['Yes'])->where('name', 'LIKE', $searchTerm . '%')
                ->orderBy('name', 'ASC')
                ->limit(10)
                ->get(['name', 'id']);


            return json_encode($airport_details);
        }
    }

    public function showRoute(Request $request)
    {
        try {
            $userRequest = $request->all();
            $userRequest['source_id'] = $request->input('source_ids');
            $userRequest['destination_id'] = $request->input('destination_ids');
            $inquiry = Inquiry::create($userRequest);
            $userRequest['source_name'] = $inquiry->source->name;
            $userRequest['destination_name'] = $inquiry->destination->name;

            $trip = Trip::where("source_id", "=", $inquiry->source->id)->where("destination_id", "=", $inquiry->destination->id)->first();

            $email = config('settings.email_to');
            $data['meta_title'] = "{$userRequest['source_name']} to {$userRequest['destination_name']} Taxi | Rann of Kutch Cab Booking | Affordable One Way & Round Trip";
            $data['meta_description'] = "Book a {$userRequest['source_name']} to {$userRequest['destination_name']} taxi online with Rann of Kutch Cabs. Get affordable one way and round trip fares with professional drivers. 24x7 service, clean cars, and easy booking for your Rann of Kutch journey.";

            if (!$trip) {
                if ($request->mobile !== '1234567891') {
                    Mail::to($email)->send(new InquiryMail($userRequest));
                }
                return view('front.thankyou', compact('data', 'userRequest'));
                /* return back()
                    ->withInput()
                    ->with('error', 'Sorry, this route is not available yet. Please choose a different route or contact us.'); */
            }

            $userRequest['trip'] = $trip;
            $userRequest['km'] = $trip->distance;
            if ($request->mobile !== '1234567891') {
                Mail::to($email)->send(new InquiryMail($userRequest));
            }

            // Related Routes Queries
            $sourceId = $trip->source_id;
            $destinationId = $trip->destination_id;

            // 1. From Source
            $fromSource = Cache::remember('from_source_' . $trip->slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($sourceId, $trip) {
                return Trip::with(['source', 'destination'])
                    ->where('source_id', $sourceId)
                    ->where('id', '!=', $trip->id)
                    ->limit(12)
                    ->get();
            });

            // 2. To Source
            $toSource = Cache::remember('to_source_' . $trip->slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($sourceId, $trip) {
                return Trip::with(['source', 'destination'])
                    ->where('destination_id', $sourceId)
                    ->where('id', '!=', $trip->id)
                    ->limit(12)
                    ->get();
            });

            // 3. From Destination
            $fromDestination = Cache::remember('from_destination_' . $trip->slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($destinationId, $trip) {
                return Trip::with(['source', 'destination'])
                    ->where('source_id', $destinationId)
                    ->where('id', '!=', $trip->id)
                    ->limit(12)
                    ->get();
            });

            // 4. To Destination
            $toDestination = Cache::remember('to_destination_' . $trip->slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($destinationId, $trip) {
                return Trip::with(['source', 'destination'])
                    ->where('destination_id', $destinationId)
                    ->where('id', '!=', $trip->id)
                    ->limit(12)
                    ->get();
            });

            return view('front.trip.source-to-destination-taxi', (compact('data', 'trip', 'inquiry', 'fromSource', 'userRequest', 'toSource', 'fromDestination', 'toDestination')));
        } catch (\Exception $e) {
            Auditable::log_audit_data('PageController@showRoute Exception', null, config('settings.log_type')[0], $e->getMessage());
            return redirect()->back()->with('error', trans('label.something_went_wrong_error_msg'));
        }
    }

    public function confirm_booking(Request $request)
    {
        try {
            $userRequest = $request->all();

            // 🔹 Handle modal form submission
            if ($request->input('form') === 'modal-from') {
                $userRequest['source_id'] = $request->input('source_ids');
                $userRequest['destination_id'] = $request->input('destination_ids');

                $inquiry = Inquiry::create($userRequest);

                $userRequest['source_name'] = $inquiry->source->name ?? null;
                $userRequest['destination_name'] = $inquiry->destination->name ?? null;
            } else if ($request->input('form') === 'one-way-taxi') {
                $userRequest['source_id'] = $request->input('source_ids');
                $userRequest['destination_id'] = $request->input('destination_ids');
                $inquiry = Inquiry::create($userRequest);
                $userRequest['source_name'] = $inquiry->source->name;
                $userRequest['destination_name'] = $inquiry->destination->name;
            }
            if ($request->input('trip_type') == 'car_rental') {
                $userRequest['source_id'] = $request->input('source_ids');
                $inquiry = Inquiry::create($userRequest);
                $userRequest['source_name'] = $inquiry->source->name;
            } else if ($request->input('trip_type') == 'airport') {
                unset($userRequest['airport_id']);
                $userRequest['source_id'] = $request->input('source_ids');
                $inquiry = Inquiry::create($userRequest);
                $userRequest['source_name'] = $inquiry->source->name;
                $airport = Source::find($request->input('airport_ids'));
                $userRequest['airport_name'] = $airport ? $airport->name : null;
            } else if ($request->input('trip_type') == 'outstation-taxi') {
                $userRequest['source_id'] = $request->input('source_ids');
                $userRequest['destination_id'] = $request->input('destination_ids');
                $inquiry = Inquiry::create($userRequest);
                $userRequest['source_name'] = $inquiry->source->name;
                $userRequest['destination_name'] = $inquiry->destination->name;
            } else {
                $inquiry = Inquiry::create($userRequest);
            }
            $email = config('settings.email_to');
            $mobile = trim((string) $request->mobile);
            if ($mobile !== '1234567891') {
                Mail::to($email)->send(new InquiryMail($userRequest));
            } else {
                Log::info('Test mobile number used; email not sent.');
            }
            $data['meta_title'] = 'We appreciate you getting in touch with us!';
            $data['meta_description'] = 'A member of our staff will get in touch with you as soon as possible.';
            return view('front.thankyou', compact('data', 'userRequest'));
        } catch (\Exception $e) {
            dd($e);
            Auditable::log_audit_data('PageController@confirm_booking Exception', null, config('settings.log_type')[0], $e->getMessage());
            return redirect()->back()->with('error', trans('label.something_went_wrong_error_msg'));
        }
    }

    public function my_trip($slug = NULL, Request $request)
    {
        $urlSegment = $request->segment(1);
        $mobileNumber = config('settings.mobile');
        if (empty($urlSegment)) {
            $errorMessage = trans('label.route_not_found', ['mobile' => $mobileNumber]);
            return redirect()->route('home')->with('bookride_error_msg', $errorMessage);
        }
        $trip_slug = $urlSegment;
        $trip = Cache::remember('trip_' . $trip_slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($trip_slug) {
            return Trip::where("slug", $trip_slug)->first();
        });
        if (!$trip) {
            $errorMessage = trans('label.route_not_found', ['mobile' => $mobileNumber]);
            return redirect()->route('home')->with('bookride_error_msg', $errorMessage);
        }

        $data['meta_title'] = $trip->meta_title ?? "Rann of Kutch Taxi - Book Affordable Taxi & Cab Services in Jaipur";
        $data['meta_description'] = $trip->meta_description ?? "Rann of Kutch Taxi offers reliable and affordable cab services in Jaipur. Book one-way, round-trip, or outstation cabs with professional drivers and clean cars.";

        // Related Routes Queries
        $sourceId = $trip->source_id;
        $destinationId = $trip->destination_id;

        // 1. From Source
        $fromSource = Cache::remember('from_source_' . $trip_slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($sourceId, $trip) {
            return Trip::with(['source', 'destination'])
                ->where('source_id', $sourceId)
                ->where('id', '!=', $trip->id)
                ->limit(12)
                ->get();
        });

        // 2. To Source
        $toSource = Cache::remember('to_source_' . $trip_slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($sourceId, $trip) {
            return Trip::with(['source', 'destination'])
                ->where('destination_id', $sourceId)
                ->where('id', '!=', $trip->id)
                ->limit(12)
                ->get();
        });

        // 3. From Destination
        $fromDestination = Cache::remember('from_destination_' . $trip_slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($destinationId, $trip) {
            return Trip::with(['source', 'destination'])
                ->where('source_id', $destinationId)
                ->where('id', '!=', $trip->id)
                ->limit(12)
                ->get();
        });

        // 4. To Destination
        $toDestination = Cache::remember('to_destination_' . $trip_slug, config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () use ($destinationId, $trip) {
            return Trip::with(['source', 'destination'])
                ->where('destination_id', $destinationId)
                ->where('id', '!=', $trip->id)
                ->limit(12)
                ->get();
        });


        if ($trip->trip_type == (array_flip(Trip::TRIP_TYPE_SELECT)['source-to-destination-taxi'])) {
            return view('front.trip.source-to-destination-taxi', compact('trip', 'fromSource', 'toSource', 'fromDestination', 'toDestination', 'data'));
        }
    }

    public function services()
    {
        $data['meta_title'] = 'Rann of Kutch Taxi Services | Reliable Cabs & Tour Packages from Bhuj';
        $data['meta_description'] = 'Book trusted taxi services for Rann of Kutch tours and local sightseeing. Enjoy safe rides, affordable fares, and professional drivers. Explore Rann with comfort and convenience.';
        return view('front.service', compact('data'));
    }
    public function contact()
    {
        $data['meta_title'] = 'Contact Us | Book Your Rann of Kutch Taxi Today';
        $data['meta_description'] = 'Get in touch with us for bookings, inquiries, or custom Rann of Kutch tour packages. Call or message us — our team is available 24/7 to assist with your travel needs.';
        return view('front.contact', compact('data'));
    }
    public function about()
    {
        $data['meta_title'] = 'About Us | Your Trusted Rann of Kutch Taxi Partner';
        $data['meta_description'] = 'Learn about our journey as a leading taxi provider for Rann of Kutch. We offer reliable cab services, local expertise, and customer-first service for a memorable travel experience.';
        return view('front.about', compact('data'));
    }
    public function terms_and_condition()
    {
        $data['meta_title'] = 'Terms and Conditions | Rann of Kutch Taxi Service';
        $data['meta_description'] = 'Read the terms and conditions for booking and using our Rann of Kutch taxi services. Understand our policies for cancellations, refunds, and customer responsibilities.';
        return view('front.terms-and-condition', compact('data'));
    }
    public function privacy_policy()
    {

        $data['meta_title'] = 'Privacy Policy | Rann of Kutch Taxi Service';
        $data['meta_description'] = 'We respect your privacy. Learn how Rann of Kutch Taxi Service collects, uses, and protects your personal information when you book rides or browse our website.';
        return view('front.privacy-policy', compact('data'));
    }

    public function one_way_taxi()
    {

        $data['meta_title'] = 'One Way Taxi Service to Rann of Kutch | Affordable Cabs from Bhuj & Nearby Cities';
        $data['meta_description'] = 'Book one-way taxi rides to Rann of Kutch from Bhuj, Ahmedabad, Rajkot, or any nearby city. Enjoy safe, comfortable, and affordable cab transfers with professional drivers.';
        return view('front.services.one-way-taxi', compact('data'));
    }
    public function outstation_taxi()
    {

        $data['meta_title'] = 'Outstation Taxi Service for Rann of Kutch | Reliable Intercity Cab Booking';
        $data['meta_description'] = 'Plan your trip with our outstation taxi service to Rann of Kutch and beyond. Clean cars, experienced drivers, and transparent pricing for hassle-free long-distance travel.';
        return view('front.services.outstation-taxi', compact('data'));
    }
    public function airport_taxi()
    {

        $data['meta_title'] = 'Airport Taxi to Rann of Kutch | Bhuj Airport Pickup & Drop Service';
        $data['meta_description'] = 'Book airport taxis from Bhuj Airport to Rann of Kutch or nearby destinations. On-time pickups, friendly drivers, and comfortable cars for a smooth airport transfer experience.';
        return view('front.services.airport-taxi', compact('data'));
    }
    public function local_taxi()
    {

        $data['meta_title'] = 'Local Taxi in Rann of Kutch | Hourly & Full-Day Cab Service';
        $data['meta_description'] = 'Hire local taxis for sightseeing in Rann of Kutch. Choose hourly or full-day packages with flexible routes, affordable fares, and reliable local drivers.';
        return view('front.services.local-taxi', compact('data'));
    }
    public function car_rental()
    {

        $data['meta_title'] = 'Car Rental in Rann of Kutch | Self-Drive & Chauffeur Car Hire';
        $data['meta_description'] = 'Rent cars in Rann of Kutch for local travel or long trips. Choose from economy to SUV options — available for self-drive or with a driver at the best prices.';
        return view('front.services.car-rental', compact('data'));
    }
}
