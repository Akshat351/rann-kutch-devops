@extends('layouts.front')
@section('content')
<!-- Hero -->
        <section class="relative h-[500px] overflow-hidden">
            <img src="{{asset('assets/service-local.jpg')}}" alt="Local taxi service in Kutch for city tours and sightseeing" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
            <div class="container px-4 h-full flex items-center relative z-10">
                <div class="max-w-3xl text-white">
                    <span class="inline-block mb-4 px-3 py-1 rounded-full bg-primary/90 text-white text-sm font-semibold">Local Taxi</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        Local Taxi Service in Kutch
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-white/90">
                        Explore Kutch at your convenience with hourly and full-day taxi packages. Perfect for city tours, shopping, local sightseeing, and business meetings.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{route('contact')}}" class="btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
                            Book Local Taxi
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
                        <p class="text-sm text-muted-foreground">Starting from</p>
                        <p class="font-bold">₹250/hour</p>
                    </div>
                    <div>
                        <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm text-muted-foreground">Minimum</p>
                        <p class="font-bold">4 Hours</p>
                    </div>
                    <div>
                        <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <p class="text-sm text-muted-foreground">Safety</p>
                        <p class="font-bold">GPS Tracked</p>
                    </div>
                    <div>
                        <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p class="text-sm text-muted-foreground">Local</p>
                        <p class="font-bold">Expert Drivers</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Form -->
        <section class="py-12 bg-white">
            <div class="container px-4 max-w-2xl mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold mb-3">Book Your Local Taxi Now</h2>
                    <p class="text-muted-foreground">Quick booking for hourly or full-day rentals</p>
                </div>
                <div class="shadow-xl border rounded-xl">
                    <div class="p-6">
                        <form
                            id="form-local" method="post" action="{{ route('confirm-booking') }}"
                            class="space-y-4 service-form"
                            novalidate
                        >
                        @csrf
                        <input type="hidden" name="trip_type" value="local" />
                        <div class="space-y-2 relative">
                                    <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg><span>City/Area
                                            *</span></label>
                                    <input type="text" id="source_id_local" name="pickup_city"
                                        placeholder="Enter city/area" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">

                                </div>
                            <div class="space-y-2">
                                <label for="phone" class="flex items-center gap-2 text-sm font-medium">
                                    <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    Phone Number *
                                </label>
                                <input type="tel" name="mobile" placeholder="9724382302" required
                                        maxlength="10" minlength="10"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                            </div>
                            <div class="space-y-2">
                                    <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>Journey Date</label>
                                    <input type="date" name="pickup_date"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>
                            <input type="hidden" name="serviceType" value="local">
                            <button type="submit" class="w-full btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
                                Book Local Taxi
                            </button>
                        </form>
                        <div class="mt-6 pt-6 border-t text-center">
                            <p class="text-sm text-muted-foreground">
                                Need immediate pickup? Call:
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
                    <h2 class="text-3xl font-bold mb-6">Local Taxi Service in Kutch — Explore at Your Own Pace</h2>
                    <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                        Whether you're touring Bhuj's heritage, heading to meetings, or running errands, our local taxi service fits your day.
          Choose hourly or full-day packages and create your own itinerary without transport worries.
                    </p>
                    <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                        Coverage includes Bhuj, Mandvi, White Rann, Kala Dungar, Dholavira, and artisan villages. Local drivers help with the best routes, food stops, and hidden gems.
                    </p>
                </div>
                <!-- Packages -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Local Taxi Rental Packages</h2>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <!-- Card -->
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-1">4 Hours / 40 KM</h3>
                                        <p class="text-sm text-primary font-semibold mb-2">Half Day</p>
                                        <p class="text-sm text-muted-foreground mb-3">Shopping, quick meetings, short city tour</p>
                                        <p class="text-xl font-bold text-primary">Starting from ₹1,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-1">8 Hours / 80 KM</h3>
                                        <p class="text-sm text-primary font-semibold mb-2">Full Day</p>
                                        <p class="text-sm text-muted-foreground mb-3">Complete city sightseeing, business meetings</p>
                                        <p class="text-xl font-bold text-primary">Starting from ₹1,800</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-1">12 Hours / 120 KM</h3>
                                        <p class="text-sm text-primary font-semibold mb-2">Extended Day</p>
                                        <p class="text-sm text-muted-foreground mb-3">Multiple destinations, leisure trips, events</p>
                                        <p class="text-xl font-bold text-primary">Starting from ₹2,500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-lg mb-1">Hourly Rental</h3>
                                        <p class="text-sm text-primary font-semibold mb-2">Flexible</p>
                                        <p class="text-sm text-muted-foreground mb-3">Custom duration — pay as you go</p>
                                        <p class="text-xl font-bold text-primary">Starting from ₹250/hour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-muted-foreground italic">
                        *Prices for Sedan (Etios/Dzire). Extra KM ₹12/km; extra hour ₹250/hour. Toll & parking extra. Night charges (10 PM–6 AM) may apply.
                    </p>
                </div>
                <!-- Vehicles -->
                   <section class="py-12 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto space-y-8">
                        <div class="text-center space-y-4">
                            <h2 class="text-3xl md:text-4xl font-bold">Choose Your local-taxi</h2>
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
                                    data-trip="local-taxi">
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
                                    data-trip="local-taxi">
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
                                    data-trip="local-taxi">
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
                                    data-trip="local-taxi">
                                    Book Now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
                <!-- Popular Routes -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Popular Local Sightseeing Routes</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-3 mb-3">
                                    <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div class="flex-1">
                                <h3 class="font-bold text-lg mb-2">Bhuj City Tour</h3>
                                <p class="text-sm text-primary font-semibold mb-2">Aina Mahal, Prag Mahal, Bhujodi, Hamirsar Lake</p>
                                <p class="text-sm text-muted-foreground mb-2">Duration: 4–5 hours</p>
                                        <p class="text-sm text-muted-foreground">Explore the historic heart of Kutch with its palaces and museums.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-3 mb-3">
                                    <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div class="flex-1">
                                <h3 class="font-bold text-lg mb-2">White Rann Day Trip</h3>
                                <p class="text-sm text-primary font-semibold mb-2">White Desert, Kala Dungar, India Bridge</p>
                                <p class="text-sm text-muted-foreground mb-2">Duration: 8–10 hours</p>
                                        <p class="text-sm text-muted-foreground">Experience the magical white desert and panoramic views.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-3 mb-3">
                                    <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div class="flex-1">
                                <h3 class="font-bold text-lg mb-2">Mandvi Beach Tour</h3>
                                <p class="text-sm text-primary font-semibold mb-2">Vijay Vilas Palace, Mandvi Beach, Wind Farm</p>
                                <p class="text-sm text-muted-foreground mb-2">Duration: 6–8 hours</p>
                                        <p class="text-sm text-muted-foreground">Relax at pristine beaches and visit the royal palace.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg hover:shadow-lg transition-shadow">
                            <div class="pt-6 p-6">
                                <div class="flex items-start gap-3 mb-3">
                                    <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div class="flex-1">
                                <h3 class="font-bold text-lg mb-2">Handicraft Village Circuit</h3>
                                <p class="text-sm text-primary font-semibold mb-2">Bhujodi, Ajrakhpur, Nirona Village</p>
                                <p class="text-sm text-muted-foreground mb-2">Duration: 6–7 hours</p>
                                        <p class="text-sm text-muted-foreground">Shop authentic Kutchi handicrafts directly from artisans.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Benefits -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Why Choose Our Local Taxi Service?</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- 8 benefit cards -->
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">Flexible Booking</h3>
                                </div>
                                <p class="text-muted-foreground">Book by the hour or choose half-day/full-day packages. Extend anytime if needed.</p>
                        </div>
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">Local Expert Drivers</h3>
                                </div>
                                <p class="text-muted-foreground">Born and raised in Kutch—best routes, authentic food, and hidden gems.</p>
                        </div>
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">No Hidden Charges</h3>
                                </div>
                                <p class="text-muted-foreground">Clear package limits. Extra usage charged transparently.</p>
                        </div>
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">Multiple Stops Allowed</h3>
                                </div>
                                <p class="text-muted-foreground">Sightseeing, shopping, dining—take your time within package limits.</p>
                        </div>
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">Clean & Comfortable</h3>
                                </div>
                                <p class="text-muted-foreground">Sanitized vehicles, AC, music system, comfy seating.</p>
                        </div>
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">Instant Booking</h3>
                                </div>
                                <p class="text-muted-foreground">Same-day or advance. Quick confirmation & driver assignment.</p>
                        </div>
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">Safe & Secure</h3>
                                </div>
                                <p class="text-muted-foreground">GPS-tracked rides, verified drivers, 24×7 support.</p>
                        </div>
                        <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                                <div class="flex items-start gap-3 mb-3">
                                <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5"/>
                                </svg>
                                    <h3 class="font-bold text-lg">Corporate Accounts</h3>
                                </div>
                                <p class="text-muted-foreground">Monthly billing, dedicated vehicles, priority booking for businesses.</p>
                        </div>
                    </div>
                </div>
                <!-- FAQ (Accordion) -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Frequently Asked Questions</h2>

                    <div class="space-y-4">
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What is included in the local taxi package?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                            Vehicle, driver, and fuel for specified hours/kilometers (e.g., 4hr/40km). Extras for additional hours/km. Toll & parking extra.
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Can I extend my booking if I need more time?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes—extra hour ₹250 (Sedan) and extra km ₹12 (Sedan). Inform driver or call support.
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>How is the package time calculated?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                            Time starts at pickup report and ends at trip completion. Waiting during stops counts in duration.
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Can I book a local taxi for just 2 hours?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                                Minimum booking is 4 hours. For urgent short trips, call us—we'll try to accommodate.
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Is the local taxi available for full-day shopping trips?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes—8h or 12h packages are ideal. Multiple markets with driver waiting/help.
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Do you provide local taxi for corporate meetings?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                            Absolutely—uniformed drivers, sedans/SUVs, flexible timing, monthly billing available.
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Can the driver suggest places to visit?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes—locals with extensive knowledge of attractions, food, shopping, and hidden gems.
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What if I exceed the kilometer limit?</span>
                                <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="hidden px-6 pb-4 text-muted-foreground">
                            Extra km: ₹12 (Sedan), ₹10 (Mini), ₹16 (SUV). Driver will inform as you approach limits.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CTA -->
                <div class="rounded-lg overflow-hidden bg-gradient-to-r from-primary to-accent text-white">
                    <div class="p-8 md:p-12 text-center">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Explore Kutch?</h2>
                        <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                            Book your local taxi now for convenient, flexible, and affordable transportation around Kutch.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{route('contact')}}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-orange-600 hover:bg-gray-100 font-medium">
                                Book Now
                            </a>
                            <a href="tel:{{ config('settings.tel_code') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white/10 border border-white/20 text-white hover:bg-white/20 backdrop-blur">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                Call: {{ config('settings.tel_code') }}
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
                    <h3 class="text-lg font-semibold">Loal-Cab Booking</h3>
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
                    <input type="hidden" name="trip_type" id="modalTripType" value="local-taxi">
                    <input type="hidden" name="price" id="modalPrice">

                        <!-- Pickup Location -->
                        <div class="space-y-2 relative">
                                    <label class="flex items-center gap-2 text-sm font-medium"><span>City/Area
                                            *</span></label>
                                    <input type="text" id="source_id_local" name="pickup_city"
                                        placeholder="Enter city/area" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">

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
            const tripType = btn.getAttribute('data-trip') || 'local-taxi';
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
