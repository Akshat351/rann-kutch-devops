@extends('layouts.front')
@section('content')
  <!-- Hero -->
  <section class="relative h-[500px] overflow-hidden">
    <img src="{{asset('assets/images/car_rental.png')}}" alt="Car rental service in Kutch with self-drive options"
         class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
    <div class="container px-4 h-full flex items-center relative z-10">
      <div class="max-w-3xl text-white">
        <span class="inline-block mb-4 px-3 py-1 rounded-full bg-primary/90 text-white text-sm font-semibold">Car Rental</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
          Car Rental Service in Kutch
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-white/90">
          Rent a car for complete freedom and flexibility. Choose from daily, weekly, or monthly plans. Perfect for extended stays, self-drive tours, and business travel.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="{{route('contact')}}" class="btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
            Book Now
          </a>
          <a href="tel:{{ config('settings.tel_code') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white/20">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            Call: {{ config('settings.tel_code') }}
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Quick Info -->
  <section class="py-8 bg-secondary/30 border-y">
    <div class="container px-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div>
          <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m0-12H3m9 0h9"/>
          </svg>
          <p class="text-sm text-muted-foreground">Starting From</p>
          <p class="font-bold">₹1,500/Day</p>
        </div>
        <div>
          <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          <p class="text-sm text-muted-foreground">Rental</p>
          <p class="font-bold">Daily/Monthly</p>
        </div>
        <div>
          <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
          <p class="text-sm text-muted-foreground">Insurance</p>
          <p class="font-bold">Included</p>
        </div>
        <div>
          <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
          </svg>
          <p class="text-sm text-muted-foreground">Type</p>
          <p class="font-bold">Self-Drive</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Booking Form -->
  <section class="py-12 bg-white">
    <div class="container px-4 max-w-2xl mx-auto">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold mb-3">Book Your Car Rental Now</h2>
        <p class="text-muted-foreground">Get a quote for daily, weekly, or monthly rentals</p>
      </div>

      <div class="shadow-xl border rounded-xl">
        <div class="p-6">
          <form id="form-rental" method="post" action="{{ route('confirm-booking') }}" class="space-y-4 service-form" novalidate>
            @csrf
            <input type="hidden" name="trip_type" value="car_rental" />
            <!-- Pickup -->
                                <div class="space-y-2 relative">
                                    <label class="flex items-center gap-2 text-sm font-medium">
                                        <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Pickup Location *</span>
                                    </label>
                                    <input type="text" id="source_id" name="source_id"
                                        placeholder="Enter pickup location" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary source_id">
                                    <input type="hidden" name="source_ids" id="source_ids_hidden"
                                        class="source_ids_hidden" value="">
                                    <div class="dropdown-menu sourceSuggestions" role="listbox"></div>
                                    <label id="source_id-error" class="error text-danger" for="source_id"></label>
                                    <label id="source_ids_hidden-error" class="error text-danger"
                                        for="source_ids_hidden"></label>
                                </div>

            <div class="space-y-2">
                                    <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28l1.498 4.493-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257 4.493 1.498V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>Phone Number *</label>
                                    <input type="tel" name="mobile" placeholder="9724382302" required
                                        maxlength="10" minlength="10"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>

            <!-- Rental Start Date -->
                                <div class="space-y-2">
                                    <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>Rental Start Date</label>
                                    <input type="date" name="pickup_date"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>


            <input type="hidden" name="serviceType" value="rental" />
            <button type="submit" class="w-full btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
              Get Rental Quote
            </button>
          </form>

          <div class="mt-6 pt-6 border-t text-center">
            <p class="text-sm text-muted-foreground">
              Need help booking? Call:
              <a href="tel:{{ config('settings.tel_code') }}" class="text-primary font-semibold hover:underline">{{ config('settings.tel_code') }}</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <article class="py-16 md:py-24">
    <div class="container px-4 max-w-5xl mx-auto">

      <!-- Intro -->
      <div class="max-w-none mb-12">
        <h2 class="text-3xl font-bold mb-6">Car Rental in Kutch - Your Vehicle, Your Freedom</h2>
        <p class="text-lg leading-relaxed text-muted-foreground mb-6">
          Planning an extended stay in Kutch? Attending the Rann Utsav for multiple days? On a business assignment? Our car rental service provides you with complete independence and flexibility. Drive at your own pace, create your own itinerary, and explore the magnificent Kutch region without depending on drivers or rigid schedules.
        </p>
        <p class="text-lg leading-relaxed text-muted-foreground mb-6">
          We offer both self-drive and chauffeur-driven rental options for daily, weekly, and monthly durations. All vehicles are well-maintained, fully insured, and come with 24/7 roadside assistance. Whether you need a compact car for city exploration or a spacious SUV for a family road trip, we have the perfect vehicle for you.
        </p>
      </div>

      <!-- Flexible Rental Plans -->
      <div class="mb-12">
        <h2 class="text-3xl font-bold mb-6">Flexible Rental Plans</h2>
        <div class="grid md:grid-cols-3 gap-6 mb-8">
          <!-- Plan card -->
          <div class="border rounded-lg hover:shadow-lg transition-shadow">
            <div class="pt-6 pb-2 px-6 text-center">
              <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-3">
                <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                </svg>
              </div>
              <h3 class="font-bold text-xl mb-1">Daily Rental</h3>
              <p class="text-sm text-primary font-semibold">1–6 Days</p>
            </div>
            <div class="px-6 pb-6">
              <p class="text-center text-lg font-bold text-primary mb-3">₹1,500 - ₹3,000/day</p>
              <ul class="space-y-2 text-sm text-muted-foreground mb-3">
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Self-drive trips
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Unlimited kilometers
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Comprehensive insurance
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> 24/7 roadside assistance
                </li>
              </ul>
            </div>
          </div>

          <div class="border rounded-lg hover:shadow-lg transition-shadow">
            <div class="pt-6 pb-2 px-6 text-center">
              <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-3">
                <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                </svg>
              </div>
              <h3 class="font-bold text-xl mb-1">Weekly Rental</h3>
              <p class="text-sm text-primary font-semibold">7–29 Days</p>
            </div>
            <div class="px-6 pb-6">
              <p class="text-center text-lg font-bold text-primary mb-3">₹9,000 - ₹15,000/week</p>
              <ul class="space-y-2 text-sm text-muted-foreground mb-3">
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Self-drive trips
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Unlimited kilometers
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Comprehensive insurance
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> 24/7 roadside assistance
                </li>
              </ul>
            </div>
          </div>

          <div class="border rounded-lg hover:shadow-lg transition-shadow">
            <div class="pt-6 pb-2 px-6 text-center">
              <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-3">
                <svg class="h-8 w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                </svg>
              </div>
              <h3 class="font-bold text-xl mb-1">Monthly Rental</h3>
              <p class="text-sm text-primary font-semibold">30+ Days</p>
            </div>
            <div class="px-6 pb-6">
              <p class="text-center text-lg font-bold text-primary mb-3">₹25,000 - ₹50,000/month</p>
              <ul class="space-y-2 text-sm text-muted-foreground mb-3">
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Self-drive trips
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Unlimited kilometers
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> Comprehensive insurance
                </li>
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                  </svg> 24/7 roadside assistance
                </li>
              </ul>
            </div>
          </div>
        </div>
        <p class="text-sm text-muted-foreground italic">
          *Rates vary by vehicle type. Fuel is extra. Security deposit required. Insurance included. Driver charges additional if you opt for chauffeur-driven service.
        </p>
      </div>

      <!-- Rental Fleet -->
        <section class="py-12 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto space-y-8">
                        <div class="text-center space-y-4">
                            <h2 class="text-3xl md:text-4xl font-bold">Choose Your Car-rental Taxi</h2>
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
                                    data-id="Mini"
                                    data-trip="car_rental">
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
                                    data-id="Sedan"
                                    data-trip="car_rental">
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
                                    data-id="Ertiga"
                                    data-trip="car_rental">
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
                                    data-id="Innova"
                                    data-trip="car_rental">
                                    Book Now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

      <!-- Benefits -->
      <div class="mb-12">
        <h2 class="text-3xl font-bold mb-6">Why Rent from Us?</h2>
        <div class="grid md:grid-cols-2 gap-6">
          <!-- 8 benefit cards -->
          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">Complete Freedom</h3>
              </div>
              <p class="text-muted-foreground">Drive anywhere, anytime without depending on drivers. Create your own schedule and explore Kutch at your own pace with complete privacy.</p>
          </div>

          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">Well-Maintained Fleet</h3>
              </div>
              <p class="text-muted-foreground">Under 3 years old, regularly serviced. Pre-rental inspection ensures perfect condition.</p>
          </div>

          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">Comprehensive Insurance</h3>
              </div>
              <p class="text-muted-foreground">Accident, theft, and third-party liabilities covered. Drive with peace of mind.</p>
          </div>

          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">24/7 Roadside Assistance</h3>
              </div>
              <p class="text-muted-foreground">Emergency support with replacement vehicle if needed.</p>
          </div>

          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">Flexible Pickup & Drop</h3>
              </div>
              <p class="text-muted-foreground">Hotel, airport, or home delivery. One-way rental available.</p>
          </div>

          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">No Hidden Charges</h3>
              </div>
              <p class="text-muted-foreground">Transparent pricing and refundable security deposit on safe return.</p>
          </div>

          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">Self-Drive or Chauffeur</h3>
              </div>
              <p class="text-muted-foreground">Add a professional chauffeur for ₹500/day, or go fully self-drive.</p>
          </div>

          <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
              <div class="flex items-start gap-3 mb-3">
              <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-width="2" d="M20 6L9 17l-5-5"/>
              </svg>
                <h3 class="font-bold text-lg">Easy Documentation</h3>
              </div>
              <p class="text-muted-foreground">DL, Aadhar, address proof. Instant verification & quick delivery.</p>
          </div>
        </div>
      </div>

      <!-- How It Works -->
      <div class="mb-12">
        <h2 class="text-3xl font-bold mb-6">How Car Rental Works</h2>
        <div class="grid md:grid-cols-4 gap-6">
          <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
            <div class="pt-8 pb-6 px-6">
              <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
              <h3 class="font-bold mb-2">Choose & Book</h3>
              <p class="text-sm text-muted-foreground">Select vehicle, duration, pickup</p>
            </div>
          </div>
          <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
            <div class="pt-8 pb-6 px-6">
              <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
              <h3 class="font-bold mb-2">Submit Documents</h3>
              <p class="text-sm text-muted-foreground">DL, Aadhar & address proof</p>
            </div>
          </div>
          <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
            <div class="pt-8 pb-6 px-6">
              <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
              <h3 class="font-bold mb-2">Pay Deposit</h3>
              <p class="text-sm text-muted-foreground">Rental + refundable deposit</p>
            </div>
          </div>
          <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
            <div class="pt-8 pb-6 px-6">
              <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
              <h3 class="font-bold mb-2">Drive Away</h3>
              <p class="text-sm text-muted-foreground">Inspect, sign, start journey</p>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ -->
      <div class="mb-12">
        <h2 class="text-3xl font-bold mb-6">Frequently Asked Questions</h2>

        <div class="space-y-4">
          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
            <span>What documents are required for car rental?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            Driving license (1+ year old), Aadhar, address proof, and refundable security deposit. For company rentals, GST certificate & authorization letter.
            </div>
          </div>

          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
            <span>What is the security deposit and when is it refunded?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            ₹5,000 (Mini) to ₹15,000 (SUV). Refunded within 7 days after return, subject to no damages/violations. Challans deducted from deposit.
            </div>
          </div>

          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
            <span>Is fuel included in the rental price?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            Fuel not included. Receive car full tank; return full tank or pay actuals + ₹100 refueling fee.
            </div>
          </div>

          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
            <span>Can I extend my rental period?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            Yes—subject to availability. Inform us 24h before return; same daily/weekly rate applies.
            </div>
          </div>

          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
              <span>What happens if I meet with an accident?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            Call our helpline and file FIR if needed. Insurance covers damages; you pay deductible (₹5,000–15,000 depending on vehicle).
            </div>
          </div>

          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
              <span>Can I drive the rental car outside Kutch/Gujarat?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            Yes, with prior permission. Interstate travel may require additional documents/charges; some states need NOC.
            </div>
          </div>

          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
            <span>Is there a kilometer limit for monthly rentals?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            5,000 KM/month included. Extra KM: ₹8/km (Sedan), ₹10/km (SUV). Daily rentals have unlimited KM (fuel extra).
            </div>
          </div>

          <div class="border rounded-lg overflow-hidden">
            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
            <span>Can multiple people drive the same rental car?</span>
              <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="hidden px-6 pb-4 text-muted-foreground">
            Yes—register all drivers during booking (DLs required). Max 2 additional drivers. Insurance covers registered drivers only.
            </div>
          </div>
        </div>
      </div>

      <!-- Tips -->
      <div class="mb-12">
        <h2 class="text-3xl font-bold mb-6">Car Rental Tips</h2>
        <div class="border rounded-xl">
          <div class="pt-6 px-6 pb-6">
            <ul class="space-y-4">
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Inspect the car for scratches/dents and photograph existing damage</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Verify spare tire, jack, toolkit, and documents (RC, insurance)</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Test AC, music system, and lights before leaving</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Save roadside assistance numbers and our helpline</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Follow traffic rules—challans are deducted from deposit</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Refuel at authorized pumps and keep fuel receipts</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Return on time to avoid late fee (₹500/hour)</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Clean interior before return; excessive dirt may incur cleaning charges</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Take photos/videos at return as proof of condition</li>
              <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="h-5 w-5 text-primary mt-0.5"></i> Collect final settlement receipt and deposit refund confirmation</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="rounded-xl overflow-hidden bg-gradient-to-r from-primary to-accent text-white">
        <div class="p-8 md:p-12 text-center">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Rent Your Car?</h2>
          <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
            Book now and enjoy the freedom of self-drive travel in Kutch. Flexible plans, well-maintained cars, and full support throughout your journey!
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-slate-900 hover:opacity-90 font-medium">
              Book Now
            </a>
          </div>
        </div>
      </div>

    </div>
  </article>
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
                    <h3 class="text-lg font-semibold">Car-Rental Cab Booking</h3>
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
                    <input type="hidden" name="trip_type" id="modalTripType" value="car_rental">
                    <input type="hidden" name="price" id="modalPrice">

                        <!-- Pickup Location -->
                        <div class="space-y-2 relative">
                            <div id="source_ids-error" class="error text-danger" style="display:none;">Please select
                                pickup city</div>
                            <label class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Pickup Location *</span>
                            </label>
                            <input type="text" id="source_id" name="source_id" placeholder="Enter pickup location"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary source_id">
                            <input type="hidden" name="source_ids" id="source_ids_hidden" class="source_ids_hidden"
                                value="">
                            <div class="dropdown-menu sourceSuggestions" role="listbox"></div>
                        </div>


                        <!-- Mobile Number -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28l1.498 4.493-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257 4.493 1.498V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                Phone Number *
                            </label>
                            <input type="tel" name="mobile" placeholder="Enter your mobile number" required
                                maxlength="10" minlength="10"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                value="{{ $userRequest['mobile'] ?? old('mobile') }}">
                        </div>

                        <!-- Pickup Date -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Rental Start Date *
                            </label>
                            <input type="date" name="pickup_date" id="pickup_date"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                value="{{ $userRequest['pickup_date'] ?? old('pickup_date') }}"
                                min="{{ date('Y-m-d') }}">
                            <span id="pickup_date-error" class="text-xs text-red-600"></span>
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
        document.addEventListener('DOMContentLoaded', function() {
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
            const tripType = btn.getAttribute('data-trip') || 'car_rental';
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
