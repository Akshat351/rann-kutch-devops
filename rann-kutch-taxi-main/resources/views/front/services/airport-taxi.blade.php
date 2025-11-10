@extends('layouts.front')
@section('content')
    <!-- Hero -->
    <section class="relative h-[500px] overflow-hidden">
        <img src="{{ asset('assets/service-airport.jpg') }}" alt="Airport taxi transfer service to Rann of Kutch"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
        <div class="max-w-7xl mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl text-white">
                <span class="inline-block mb-4 px-3 py-1 rounded-full bg-primary/90 text-white text-sm font-semibold">Airport
                    Transfer</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Airport Taxi Service to<br>Rann of Kutch
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-white/90">
                    Seamless airport transfers with flight tracking, meet & greet service, and punctual pickups. Travel
                    stress-free from airport to your Kutch destination.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}"
                        class="btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
                        Book Airport Transfer
                    </a>
                    <a href="tel:{{ config('settings.tel_code') }}"
                        class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white/20">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Call: {{ config('settings.tel_code') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Info -->
    <section class="py-8 bg-secondary/30 border-y">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center">
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Fixed Rates</p>
                    <p class="font-bold">No Surge</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">24/7 Availability</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Flight Tracking</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section class="py-12 bg-white">
        <div class="max-w-2xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold mb-3">Book Your Airport Taxi Now</h2>
                <p class="text-muted-foreground">Get in touch to confirm your flight or airport departure.</p>
            </div>

            <div class="shadow-xl border rounded-xl">
                <div class="p-6">
                    <form id="form-airport" method="post" action="{{ route('confirm-booking') }}"
                        class="space-y-4 service-form">
                        @csrf
                        <input type="hidden" name="trip_type" value="airport" />

                        <!-- Airport -->
                        <div class="space-y-2 relative">
                            <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg><span>Airport
                                    *</span></label>
                            <input type="text" id="airport_id" name="airport_id" placeholder="Enter airport"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary airport_id">
                            <input type="hidden" name="airport_ids" id="airport_ids_hidden" class="airport_ids_hidden"
                                value="">
                            <div class="dropdown-menu airportSuggestions" role="listbox"></div>
                            <label id="airport_id-error" class="error text-danger" for="airport_id"></label>
                            <label id="airport_ids_hidden-error" class="error text-danger" for="airport_ids_hidden"></label>
                        </div>

                        <div class="space-y-2 relative">
                            <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg><span>Location
                                    *</span></label>
                            <input type="text" id="source_id" name="source_id" placeholder="Enter location"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary source_id">
                            <input type="hidden" name="source_ids" id="source_ids_hidden" class="source_ids_hidden"
                                value="">
                            <div class="dropdown-menu sourceSuggestions" role="listbox"></div>
                            <label id="source_id-error" class="error text-danger" for="source_id"></label>
                            <label id="source_ids_hidden-error" class="error text-danger"
                                for="source_ids_hidden"></label>
                        </div>

                        <div class="space-y-2">
                            <label for="phone" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                Phone Number *
                            </label>
                            <input type="tel" name="mobile" placeholder="9724382302" required maxlength="10"
                                minlength="10"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>

                        <div class="space-y-2">
                            <label for="date" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                               Journey Date
                            </label>
                            <input type="date" name="pickup_date"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>

                        <input type="hidden" name="serviceType" value="airport" />
                        <button type="submit"
                            class="w-full btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
                            Book Airport Transfer
                        </button>
                    </form>

                    <div class="mt-6 pt-6 border-t text-center">
                        <p class="text-sm text-muted-foreground">
                            Need urgent pickup? Call {{ config('settings.mobile') }}:
                            <a href="tel:{{ config('settings.mobile') }}"
                                class="text-primary font-semibold hover:underline">{{ config('settings.mobile') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <article class="py-16 md:py-24">
        <div class="max-w-5xl mx-auto px-4">

            <!-- Intro -->
            <div class="max-w-none mb-12">
                <h2 class="text-3xl font-bold mb-6">Why Choose Our Airport Taxi Service?</h2>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    Arriving at an airport after a long flight and worrying about transportation can be stressful. Our
                    airport taxi
                    service eliminates that stress with reliable, comfortable, and punctual transfers from major airports to
                    Rann of Kutch and nearby destinations.
                </p>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    With years of experience in airport transfers, we track your flight in real-time, wait if delayed, and
                    help with luggage—so your journey to the White Desert is smooth and comfy.
                </p>
            </div>

            <!-- Vehicles -->
            <section class="py-12 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto space-y-8">
                        <div class="text-center space-y-4">
                            <h2 class="text-3xl md:text-4xl font-bold">Choose Your Airport-taxi</h2>
                            <p class="text-muted-foreground max-w-2xl mx-auto">
                                Select from our fleet of well-maintained vehicles. Prices include fuel, driver allowance,
                                tolls,
                                and taxes.
                            </p>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Mini -->
                            <div class="bg-white border rounded-lg p-6 card-hover group cursor-pointer"
                                data-vehicle='{"name":"Mini","subtitle":"Swift / WagonR / Celerio","image":"{{ asset('assets/car-swift.png') }}","capacity":"3–4 Passengers + 1 Driver","luggage":"2 Large Bags + 1 Small Bag","features":["Compact & Economical","AC","Music System"],"pricing":{"oneWay":"₹6,000","roundTrip":"₹11,000","perKm":"₹12"},"description":"Perfect for short trips, solo travelers, or small families seeking budget-friendly comfort."}'>
                                <div class="h-32 flex items-center justify-center mb-4">
                                    <img src="{{ asset('assets/car-swift.png') }}" alt="Mini"
                                        class="h-full w-auto object-contain group-hover:scale-110 transition" />
                                </div>
                                <h3 class="text-xl font-semibold">Mini</h3>
                                <p class="text-sm text-muted-foreground mb-4">Swift / WagonR / Celerio</p>
                                <div class="space-y-2 text-sm mb-4">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M16 7a4 4 0 11-8 0" />
                                        </svg>
                                        <span>3–4 Passengers</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M3 7l9-4 9 4v10l-9 4-9-4z" />
                                        </svg>
                                        <span class="text-xs">2 Large Bags</span>
                                    </div>
                                </div>
                                <button type="button"
                                    class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                                    data-id="Mini" data-trip="airport">
                                    Book Now
                                </button>

                            </div>

                            <!-- Sedan -->
                            <div class="bg-white border rounded-lg p-6 card-hover group cursor-pointer"
                                data-vehicle='{"name":"Sedan","subtitle":"Swift Dzire / Etios","image":"{{ asset('assets/car-etios.png') }}","capacity":"4 Passengers + 1 Driver","luggage":"2 Large Bags + 2 Small Bags","features":["AC","Music System","Comfortable Seats"],"pricing":{"oneWay":"₹7,000","roundTrip":"₹13,000","perKm":"₹17"},"description":"Perfect for couples or small families looking for comfortable and economical travel."}'>
                                <div class="h-32 flex items-center justify-center mb-4">
                                    <img src="{{ asset('assets/car-etios.png') }}" alt="Sedan"
                                        class="h-full w-auto object-contain group-hover:scale-110 transition" />
                                </div>
                                <h3 class="text-xl font-semibold">Sedan</h3>
                                <p class="text-sm text-muted-foreground mb-4">Swift Dzire / Etios</p>
                                <div class="space-y-2 text-sm mb-4">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M16 7a4 4 0 11-8 0" />
                                        </svg>
                                        <span>4 Passengers</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M3 7l9-4 9 4v10l-9 4-9-4z" />
                                        </svg>
                                        <span class="text-xs">2 Large Bags</span>
                                    </div>
                                </div>
                                <button type="button"
                                    class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                                    data-id="Sedan" data-trip="airport">
                                    Book Now
                                </button>
                            </div>

                            <!-- SUV -->
                            <div class="bg-white border rounded-lg p-6 card-hover group cursor-pointer"
                                data-vehicle='{"name":"SUV","subtitle":"Ertiga / Innova Crysta","image":"{{ asset('assets/car-creta.png') }}","capacity":"6-7 Passengers + 1 Driver","luggage":"4 Large Bags + 3 Small Bags","features":["AC","Premium Interiors","Extra Legroom","USB Charging"],"pricing":{"oneWay":"₹10,000","roundTrip":"₹18,500","perKm":"₹25"},"description":"Ideal for families or groups wanting extra space and comfort for the long journey."}'>
                                <div class="h-32 flex items-center justify-center mb-4">
                                    <img src="{{ asset('assets/car-creta.png') }}" alt="SUV"
                                        class="h-full w-auto object-contain group-hover:scale-110 transition" />
                                </div>
                                <h3 class="text-xl font-semibold">SUV</h3>
                                <p class="text-sm text-muted-foreground mb-4">Ertiga / Innova Crysta</p>
                                <div class="space-y-2 text-sm mb-4">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M16 7a4 4 0 11-8 0" />
                                        </svg>
                                        <span>6–7 Passengers</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M3 7l9-4 9 4v10l-9 4-9-4z" />
                                        </svg>
                                        <span class="text-xs">4 Large Bags</span>
                                    </div>
                                </div>
                                <button type="button"
                                    class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                                    data-id="Ertiga" data-trip="airport">
                                    Book Now
                                </button>
                            </div>

                            <!-- Premium SUV -->
                            <div class="bg-white border rounded-lg p-6 card-hover group cursor-pointer"
                                data-vehicle='{"name":"Premium SUV","subtitle":"Innova Crysta / Fortuner","image":"{{ asset('assets/car-innova.png') }}","capacity":"6-7 Passengers + 1 Driver","luggage":"5 Large Bags + 3 Small Bags","features":["Climate Control","Leather Seats","Entertainment System","Premium Comfort"],"pricing":{"oneWay":"₹14,000","roundTrip":"₹26,000","perKm":"₹35"},"description":"Luxury travel experience with top-of-the-line vehicles and premium amenities."}'>
                                <div class="h-32 flex items-center justify-center mb-4">
                                    <img src="{{ asset('assets/car-innova.png') }}" alt="Premium SUV"
                                        class="h-full w-auto object-contain group-hover:scale-110 transition" />
                                </div>
                                <h3 class="text-xl font-semibold">Premium SUV</h3>
                                <p class="text-sm text-muted-foreground mb-4">Innova Crysta / Fortuner</p>
                                <div class="space-y-2 text-sm mb-4">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M16 7a4 4 0 11-8 0" />
                                        </svg>
                                        <span>6–7 Passengers</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor">
                                            <path stroke-width="2" d="M3 7l9-4 9 4v10l-9 4-9-4z" />
                                        </svg>
                                        <span class="text-xs">5 Large Bags</span>
                                    </div>
                                </div>
                                <button type="button"
                                    class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                                    data-id="Innova" data-trip="airport">
                                    Book Now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Features / Benefits -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Airport Transfer Service Features</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- 8 benefit cards -->
                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Real-Time Flight Tracking</h3>
                        </div>
                        <p class="text-muted-foreground">We monitor your flight; pickup time adjusts automatically—no extra
                            delay charges.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Meet & Greet Service</h3>
                        </div>
                        <p class="text-muted-foreground">Driver at arrivals with a name board, luggage help, and quick
                            escort to car.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Fixed Transparent Pricing</h3>
                        </div>
                        <p class="text-muted-foreground">Know the exact fare before booking. No surge pricing, ever.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">24/7 Availability</h3>
                        </div>
                        <p class="text-muted-foreground">Early morning or red-eye—book anytime, we've got you covered.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Professional Chauffeurs</h3>
                        </div>
                        <p class="text-muted-foreground">Verified, trained, and courteous drivers with route expertise.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Free Waiting Time</h3>
                        </div>
                        <p class="text-muted-foreground">60 mins (international) / 30 mins (domestic) free waiting after
                            landing.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Clean & Sanitized Vehicles</h3>
                        </div>
                        <p class="text-muted-foreground">Every vehicle cleaned and sanitized before each ride.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Child Seats Available</h3>
                        </div>
                        <p class="text-muted-foreground">Complimentary child/booster seats—request while booking.</p>
                    </div>
                </div>
            </div>

            <!-- How It Works -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">How to Book Airport Transfer</h2>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                1</div>
                            <h3 class="font-bold mb-2">Book Online</h3>
                            <p class="text-sm text-muted-foreground">Enter flight & passenger details</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                2</div>
                            <h3 class="font-bold mb-2">Get Confirmation</h3>
                            <p class="text-sm text-muted-foreground">Receive driver & vehicle details</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                3</div>
                            <h3 class="font-bold mb-2">Track Flight</h3>
                            <p class="text-sm text-muted-foreground">We auto-adjust for delays</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                4</div>
                            <h3 class="font-bold mb-2">Meet & Travel</h3>
                            <p class="text-sm text-muted-foreground">Driver meets at arrivals</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Frequently Asked Questions</h2>

                <div class="space-y-4">
                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>How much does an airport taxi to Rann of Kutch cost?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Fixed rates start from ₹3,500 (Ahmedabad Airport) and ₹1,200 (Bhuj Airport). Rates vary by
                            airport and vehicle type. All rates are transparent with no hidden charges.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What if my flight is delayed?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            We track your flight in real-time and adjust pickup time automatically. No extra charges for
                            reasonable delays.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>How will I find the driver at the airport?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Our driver will be at arrivals with a name board displaying your name. You'll receive driver
                            details and contact number before your flight.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Is there a waiting time limit?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Free waiting time: 60 minutes for international flights, 30 minutes for domestic flights.
                            Additional waiting charges apply after the free period.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Can I book an airport taxi for early morning (3-5 AM)?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes, we operate 24/7. Early morning pickups (3-5 AM) may have a small night surcharge. Please
                            book in advance.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Is the airport pickup rate different from airport drop?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Airport pickup and drop rates are the same. Fixed rates apply for both directions.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>How much luggage can I carry?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Luggage capacity varies by vehicle: Mini (2-3 bags), Sedan (3 bags), SUV (4-5 bags), Innova (5-6
                            bags). Please inform about extra luggage while booking.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What is your cancellation policy for airport bookings?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Cancel ≥24 hours before pickup for full refund. Within 24 hours: 25% cancellation fee. No-shows
                            are non-refundable.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Airport Transfer Tips</h2>
                <div class="border rounded-lg">
                    <div class="pt-6 p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Book at least 24 hours in advance for assured
                                    availability</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Share accurate flight number and arrival time for
                                    tracking</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Save the driver's contact and keep your phone charged
                                    and accessible</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">If you can't find the driver, call immediately</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Confirm driver identity with photo and vehicle number
                                    before boarding</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Inform about extra luggage or special assistance
                                    requirements in advance</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="rounded-lg overflow-hidden bg-gradient-to-r from-primary to-accent text-white">
                <div class="p-8 md:p-12 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Book Your Airport Transfer?</h2>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                        Start your Rann of Kutch journey stress-free with our reliable airport taxi service. Fixed rates,
                        flight tracking, and professional drivers guaranteed.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-orange-600 hover:bg-gray-100 font-medium">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </article>
    <!-- Tailwind Modal -->
    <div id="bookingModal" class="fixed inset-0 z-[100] hidden" aria-hidden="true" role="dialog" aria-modal="true">

        <!-- Backdrop -->
        <div class="modal-backdrop absolute inset-0 bg-black/50 opacity-0 transition-opacity duration-200"></div>

        <!-- Panel (centered) -->
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div
                class="modal-panel w-full max-w-3xl bg-white rounded-2xl shadow-xl
                opacity-0 translate-y-4 transition-all duration-200">

                <!-- Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <h3 class="text-lg font-semibold">Airport-Cab Booking</h3>
                    <button type="button"
                        class="modal-close inline-flex h-9 w-9 items-center justify-center rounded-md
                                   hover:bg-gray-100 focus:outline-none"
                        aria-label="Close">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Body -->
                <div class="px-6 py-5">
                    <form id="cabbookingform" action="{{ route('confirm-booking') }}" method="POST"
                        class="space-y-4 service-form">
                        @csrf
                        <input type="hidden" name="car_type" id="modalCabType">
                        <input type="hidden" name="trip_type" id="modalTripType" value="airport">
                        <input type="hidden" name="price" id="modalPrice">

                        <!-- Pickup Location -->
                        <div class="space-y-2 relative">
                            <label class="flex items-center gap-2 text-sm font-medium"><span>Airport
                                    *</span></label>
                            <input type="text" id="airport_id" name="airport_id" placeholder="Enter airport"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary airport_id">
                            <input type="hidden" name="airport_ids" id="airport_ids_hidden" class="airport_ids_hidden"
                                value="">
                            <div class="dropdown-menu airportSuggestions" role="listbox"></div>
                            <label id="airport_id-error" class="error text-danger" for="airport_id"></label>
                            <label id="airport_ids_hidden-error" class="error text-danger" for="airport_ids_hidden"></label>
                        </div>

                        <div class="space-y-2 relative">
                            <label class="flex items-center gap-2 text-sm font-medium"><span>Location
                                    *</span></label>
                            <input type="text" id="source_id" name="source_id" placeholder="Enter location"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary source_id">
                            <input type="hidden" name="source_ids" id="source_ids_hidden" class="source_ids_hidden"
                                value="">
                            <div class="dropdown-menu sourceSuggestions" role="listbox"></div>
                            <label id="source_id-error" class="error text-danger" for="source_id"></label>
                            <label id="source_ids_hidden-error" class="error text-danger"
                                for="source_ids_hidden"></label>
                        </div>

                        <div class="space-y-2">
                            <label for="phone" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                Phone Number *
                            </label>
                            <input type="tel" name="mobile" placeholder="9724382302" required maxlength="10"
                                minlength="10"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>

                        <div class="space-y-2">
                            <label for="date" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Journey Date
                            </label>
                            <input type="date" name="pickup_date"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-black transition-colors font-medium">
                            Confirm Booking
                        </button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/live-search.js') }}"></script>
    <script>
        // FAQ Accordion Functionality
        document.querySelectorAll('.faq-btn').forEach(button => {
            button.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('svg');
                const isOpen = !answer.classList.contains('hidden');

                // Close all other FAQs
                document.querySelectorAll('.faq-btn').forEach(otherBtn => {
                    if (otherBtn !== this) {
                        const otherAnswer = otherBtn.nextElementSibling;
                        const otherIcon = otherBtn.querySelector('svg');
                        otherAnswer.classList.add('hidden');
                        otherIcon.style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle current FAQ
                if (isOpen) {
                    answer.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    answer.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });
    </script>
    <script>
        (function() {
            const modal = document.getElementById('bookingModal');
            const backdrop = modal.querySelector('.modal-backdrop');
            const panel = modal.querySelector('.modal-panel');
            const closeBtn = modal.querySelector('.modal-close');
            const openBtns = document.querySelectorAll('.cab-open');

            function lockScroll(lock) {
                document.documentElement.classList.toggle('overflow-y-hidden', lock);
                document.body.classList.toggle('overflow-y-hidden', lock);
            }

            function showModal() {
                modal.classList.remove('hidden');
                requestAnimationFrame(() => {
                    backdrop.classList.remove('opacity-0');
                    panel.classList.remove('opacity-0', 'translate-y-4');
                });
                lockScroll(true);
            }

            function hideModal() {
                backdrop.classList.add('opacity-0');
                panel.classList.add('opacity-0', 'translate-y-4');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    lockScroll(false);
                }, 200);
            }

            openBtns.forEach(btn => {
                btn.addEventListener('click', e => {
                    e.preventDefault();
                    const cabType = btn.getAttribute('data-id') || '';
                    const tripType = btn.getAttribute('data-trip') || 'airport';
                    const price = btn.getAttribute('data-price') || '';

                    document.getElementById('modalCabType').value = cabType;
                    document.getElementById('modalTripType').value = tripType;
                    document.getElementById('modalPrice').value = price;

                    showModal();
                });
            });

            closeBtn.addEventListener('click', hideModal);
            backdrop.addEventListener('click', hideModal);
            document.addEventListener('keydown', e => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) hideModal();
            });
        })();
    </script>
@endsection
