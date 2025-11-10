@extends('layouts.front')
@section('content')
    <!-- Hero -->
    <section class="relative h-[500px] overflow-hidden">
        <img src="{{ asset('assets/service-roundtrip.jpg') }}" alt="Outstation taxi service for Rann of Kutch exploration"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
        <div class="max-w-7xl mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl text-white">
                <span
                    class="inline-block mb-4 px-3 py-1 rounded-full bg-primary/90 text-white text-sm font-semibold">Outstation
                    Taxi</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Outstation Taxi Service for Rann of Kutch
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-white/90">
                    Explore the beauty of Kutch at your own pace with our flexible outstation taxi service. Multi-day
                    packages, comfortable rides, and expert local drivers.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}"
                        class="btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
                        Book Your Tour
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
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m0-12H3m9 0h9" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Starting From</p>
                    <p class="font-bold">₹13/km</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Our Tour</p>
                    <p class="font-bold">1-5 Days</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Safety</p>
                    <p class="font-bold">GPS Tracked</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Flexible</p>
                    <p class="font-bold">Itinerary</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section class="py-12 bg-white">
        <div class="max-w-2xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold mb-3">Book Your Outstation Taxi Now</h2>
                <p class="text-muted-foreground">Plan your Kutch road trip with us! Fill in the details.</p>
            </div>

            <div class="shadow-xl border rounded-xl">
                <div class="p-6">
                    <form id="form-round-trip" method="post"
                        class="space-y-4 service-form">
                        @csrf
                        <input type="hidden" name="trip_type" value="round-trip">
                        <input type="hidden" name="serviceType" value="outstation">



                        <!-- Pickup Location -->
                        <div class="space-y-2 relative">
                            <label for="pickup" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Pickup Location *
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

                        <!-- Drop-off Location -->
                        <div class="space-y-2 relative">
                            <label for="dropoff" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                Drop-off Location *
                            </label>
                            <input type="text" id="destination_id" name="destination_id"
                                        placeholder="Enter drop-off location" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary destination_id">
                                    <div class="dropdown-menu destinationSuggestions" role="listbox"></div>
                                    <input type="hidden" name="destination_ids" id="destination_ids_hidden"
                                        class="destination_ids_hidden" value="">
                                    <label id="destination_id-error" class="error text-danger"
                                        for="destination_id"></label>
                                    <label id="destination_ids_hidden-error" class="error text-danger"
                                        for="destination_ids_hidden"></label>
                        </div>

                        <!-- Phone -->
                        {{-- <div class="space-y-2">
                            <label for="phone" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                Phone Number *
                            </label>
                            <input id="phone" name="phone" type="tel"
                                placeholder="{{ config('settings.mobile') }}" value="{{ config('settings.mobile') }}"
                                required maxlength="10" minlength="10"
                                class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div> --}}

                        <!-- Phone -->
                                <div class="space-y-2">
                                    <label class="flex items-center gap-2 text-sm font-medium">
                                        <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28l1.498 4.493-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257 4.493 1.498V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>Phone Number *</label>
                                    <input type="tel" name="mobile" placeholder="9724382302" required
                                        maxlength="10" minlength="10"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>
                                <!-- Date -->
                                <div class="space-y-2">
                                    <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>Journey Date</label>
                                    <input type="date" name="pickup_date"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>

                        <!-- End Date -->
                        {{-- <div class="space-y-2">
                            <label for="endDate" class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                End Date *
                            </label>
                            <input id="endDate" name="endDate" type="date" required
                                class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div> --}}

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90 transition">
                            Get Quote for Round Trip
                        </button>
                    </form>


                    <div class="mt-6 pt-6 border-t text-center">
                        <p class="text-sm text-muted-foreground">
                            Or call us directly:
                            <a href="tel:{{ config('settings.tel_code') }}"
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
                <h2 class="text-3xl font-bold mb-6">Why Choose Outstation Taxi for Rann of Kutch Exploration?</h2>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    The Rann of Kutch is not just a destination – it's an experience that deserves to be savored over
                    multiple days.
                    Our outstation taxi service is designed for travelers who want to explore the region at their own pace,
                    discovering hidden gems beyond just the white desert.
                </p>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    Unlike one-way or round-trip services, an outstation taxi stays with you throughout your journey,
                    adapting to your schedule and interests.
                    Want to spend an extra hour watching the sunset? Found an artisan village? With our outstation service,
                    you have the freedom to craft your perfect Kutch experience.
                </p>
            </div>

            <!-- What is Outstation Taxi -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">What is Outstation Taxi Service?</h2>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    Outstation taxis are for multi-day or extended journeys beyond city limits and often include overnight
                    stays.
                    Your dedicated driver stays with you, providing reliable transport and local know-how across the region.
                </p>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    In Kutch, attractions are spread out—White Rann, Bhuj, Mandvi Beach, Dholavira, temples, villages—so
                    flexible, dependable transport across days makes all the difference.
                </p>
            </div>

                <section class="py-12 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto space-y-8">
                        <div class="text-center space-y-4">
                            <h2 class="text-3xl md:text-4xl font-bold">Choose Your Outstation Taxi</h2>
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
                                    data-trip="outstation-taxi">
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
                                    data-trip="outstation-taxi">
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
                                    data-trip="outstation-taxi">
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
                                    data-trip="outstation-taxi">
                                    Book Now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Why Choose Our Outstation Taxi Service?</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- 8 benefit cards -->
                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Flexible Itinerary</h3>
                        </div>
                        <p class="text-muted-foreground">Modify your schedule on the go—add stops, extend sunsets, explore
                            hidden spots.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Experienced Local Drivers</h3>
                        </div>
                        <p class="text-muted-foreground">Get local insights on food, sights, and the most scenic routes
                            through Kutch.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">All-Inclusive Pricing</h3>
                        </div>
                        <p class="text-muted-foreground">Vehicle, driver allowance, and fuel covered. Pay
                            toll/parking/state taxes as actuals.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">24/7 Support</h3>
                        </div>
                        <p class="text-muted-foreground">We're a call away throughout your journey for help or
                            recommendations.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Well-Maintained Fleet</h3>
                        </div>
                        <p class="text-muted-foreground">Regularly serviced & cleaned cars for safe, comfy, hassle-free
                            trips.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Multilingual Drivers</h3>
                        </div>
                        <p class="text-muted-foreground">Hindi, Gujarati, and basic English for smoother communication.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">GPS Tracking</h3>
                        </div>
                        <p class="text-muted-foreground">Share live location with family for extra peace of mind.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Customizable Packages</h3>
                        </div>
                        <p class="text-muted-foreground">Photography, heritage, handicrafts, birding—tell us your focus and
                            budget.</p>
                    </div>
                </div>
            </div>

            <!-- How it works -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">How to Book Your Outstation Taxi</h2>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                1</div>
                            <h3 class="font-bold mb-2">Plan Your Trip</h3>
                            <p class="text-sm text-muted-foreground">Decide destinations, duration, travelers</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                2</div>
                            <h3 class="font-bold mb-2">Choose Vehicle</h3>
                            <p class="text-sm text-muted-foreground">Pick per group size and budget</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                3</div>
                            <h3 class="font-bold mb-2">Confirm Booking</h3>
                            <p class="text-sm text-muted-foreground">Share details & pay advance</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                4</div>
                            <h3 class="font-bold mb-2">Enjoy Your Tour</h3>
                            <p class="text-sm text-muted-foreground">Relax & explore with pros</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ (Accordion) -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Frequently Asked Questions</h2>

                <div class="space-y-4">
                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>How is outstation taxi pricing calculated?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Per-km rate (e.g., ₹13/km) + daily driver allowance (₹400–₹500). Min. 250 km/day.
                            Toll/parking/state taxes extra.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Is accommodation included in outstation taxi packages?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Passenger stay isn't included. We can suggest hotels. Driver stay is covered by daily allowance.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Can we change the itinerary during the trip?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes—add/remove spots anytime. Extra charges only if distance increases significantly.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What is the cancellation policy for outstation bookings?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            ≥48h: full refund (minus fee) • 24–48h: 50% • &lt;24h: 25% • No-show: none.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Do you provide custom packages for specific interests?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes—photography, heritage, handicrafts, birding, etc. Share your interests.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Is the driver available 24/7 during the outstation trip?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Typically 6 AM–10 PM. Night driving (10 PM–6 AM) may attract a surcharge—inform in advance.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What if we want to extend our trip by extra days?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Possible, subject to availability. Same per-km rate & allowance apply.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Can we book outstation taxi during Rann Utsav season?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Peak season (Nov–Feb). Book 2–3 weeks early; prices may be 15–20% higher; 2–3 day minimum may
                            apply.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Planning Your Outstation Trip to Kutch</h2>
                <div class="border rounded-lg">
                    <div class="pt-6 p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Book at least 1–2 weeks in advance (Oct–Mar) for
                                    availability</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Carry sufficient cash—cards often not accepted in
                                    remote areas</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Pack warm clothes for night—desert nights get
                                    cold</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Bring sunglasses, sunscreen, and a hat for daytime
                                    desert sun</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Download offline maps—connectivity can be spotty</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Discuss itinerary with driver—they know the best
                                    routes</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Keep a first-aid kit handy—rural facilities are
                                    limited</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Respect local customs—ask before photographing
                                    people/sites</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Stay hydrated—carry bottled water on desert
                                    visits</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Inform your driver about any mobility issues or special
                                    requirements</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="rounded-lg overflow-hidden bg-gradient-to-r from-primary to-accent text-white">
                <div class="p-8 md:p-12 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Explore Kutch with Our Outstation Taxi?</h2>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                        Book your customized Kutch exploration trip with comfortable vehicles, experienced drivers, and
                        flexible itineraries. Create memories that last a lifetime!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-orange-600 hover:bg-gray-100 font-medium">
                            Book Your Tour
                        </a>
                        {{-- <a href="{{route('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white/20 font-medium">
              Get Custom Quote
            </a> --}}
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
                    <h3 class="text-lg font-semibold">Outstation-Cab Booking</h3>
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
                    <input type="hidden" name="trip_type" id="modalTripType" value="outstation-taxi">
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

                        <!-- Drop-off Location -->
                        <div class="space-y-2 relative">
                            <div id="destination_ids-error" class="error text-danger" style="display:none;">Please select
                                drop city</div>
                            <label class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-accent" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1 1 0 01-1.414 0L7.9 16.657A8 8 0 1117.657 16.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Drop-off Location *</span>
                            </label>
                            <input type="text" id="destination_id" name="destination_id"
                                placeholder="Enter drop-off location" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary destination_id">
                            <input type="hidden" name="destination_ids" id="destination_ids_hidden"
                                class="destination_ids_hidden" value="">
                            <div class="dropdown-menu destinationSuggestions" role="listbox"></div>
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
                                PickUp Date *
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
            const tripType = btn.getAttribute('data-trip') || 'outstation-taxi';
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
