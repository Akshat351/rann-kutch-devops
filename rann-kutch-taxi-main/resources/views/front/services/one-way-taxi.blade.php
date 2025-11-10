@extends('layouts.front')
@section('content')
    <!-- Hero -->
    <section class="relative h-[500px] overflow-hidden">
        <img src="{{ asset('assets/service-oneway.jpg') }}" alt="One way taxi service to Rann of Kutch"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
        <div class="max-w-7xl mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl text-white">
                <span class="inline-block mb-4 px-3 py-1 rounded-full bg-primary/90 text-white text-sm font-semibold">One Way
                    Taxi</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    One Way Taxi Service to Rann of Kutch
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-white/90">
                    Affordable point-to-point taxi service with no return charges. Travel comfortably from any major city to
                    the magical white desert of Kutch.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}"
                        class="btn-shine inline-flex items-center justify-center px-6 py-3 rounded-lg bg-primary text-white hover:opacity-90">
                        Book Now
                    </a>
                    <a href="tel:{{ config('settings.tel_code') }}"
                        class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white/10 border border-white/20 text-white hover:bg-white/20 backdrop-blur">
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
                    <p class="text-sm text-muted-foreground">Starting from</p>
                    <p class="font-bold">₹12/km</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Service</p>
                    <p class="font-bold">24/7 Available</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">Safety</p>
                    <p class="font-bold">Verified Drivers</p>
                </div>
                <div>
                    <svg class="h-8 w-8 mx-auto mb-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm text-muted-foreground">No Return</p>
                    <p class="font-bold">Charges</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section class="py-12 bg-white">
        <div class="max-w-2xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold mb-3">Book Your One Way Taxi Now</h2>
                <p class="text-muted-foreground">Fill in your details and get an instant quote</p>
            </div>
            <div class="shadow-xl border rounded-xl">
                <div class="p-6">
                    <form id="form-one-way" method="post" class="space-y-4 service-form">
                        @csrf
                        <input type="hidden" name="trip_type" value="one-way" />
                        <div id="source_ids-error-oneway" class="error text-danger" style="display:none;">Please
                            select pickup city</div>

                        <!-- Pickup -->
                        <div class="space-y-2 relative">
                            <label class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                            <label id="source_id-error" class="error text-danger" for="source_id"></label>
                            <label id="source_ids_hidden-error" class="error text-danger"
                                for="source_ids_hidden"></label>
                        </div>

                        <!-- Drop-off -->
                        <div class="space-y-2 relative">
                            <div id="destination_ids-error-oneway" class="error text-danger" style="display:none;">Please
                                select drop city</div>
                            <label class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                <span>Drop-off Location *</span>
                            </label>
                            <input type="text" id="destination_id" name="destination_id"
                                placeholder="Enter drop-off location" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary destination_id">
                            <div class="dropdown-menu destinationSuggestions" role="listbox"></div>
                            <input type="hidden" name="destination_ids" id="destination_ids_hidden"
                                class="destination_ids_hidden" value="">
                            <label id="destination_id-error" class="error text-danger" for="destination_id"></label>
                            <label id="destination_ids_hidden-error" class="error text-danger"
                                for="destination_ids_hidden"></label>
                        </div>

                        <!-- Phone -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm font-medium">
                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28l1.498 4.493-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257 4.493 1.498V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                Phone Number *
                            </label>
                            <input type="tel" name="mobile" placeholder="9724382302" required maxlength="10"
                                minlength="10"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>

                        <!-- Date -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm font-medium">
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

                        <button type="submit"
                            class="w-full px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors btn-shine font-medium">
                            Get Quote for One Way
                        </button>
                    </form>


                    <div class="mt-6 pt-6 border-t text-center">
                        <p class="text-sm text-muted-foreground">
                            Or give us a call:
                            <a href="tel:{{ config('settings.tel_code') }}"
                                class="text-primary font-semibold hover:underline">{{ config('settings.tel_code') }}</a>
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
                <h2 class="text-3xl font-bold mb-6">Why Choose One Way Taxi Service for Rann of Kutch?</h2>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    Planning a trip to the mesmerizing Rann of Kutch but worried about expensive round-trip taxi charges?
                    Our one way taxi service offers the perfect solution for travelers who need reliable, comfortable
                    transportation without the burden of return trip costs. Whether you're a tourist visiting the white
                    desert for the first time, a business traveler, or someone relocating, our one way taxi service provides
                    the flexibility and affordability you need.
                </p>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    The Rann of Kutch, located in the Thar Desert of Gujarat, is one of India's most unique and spectacular
                    destinations. Known for its vast expanse of white salt marshes, the region attracts thousands of
                    visitors annually, especially during the Rann Utsav festival. Getting there requires a journey through
                    Gujarat's diverse landscapes, and having a comfortable, reliable taxi service makes all the difference.
                </p>
            </div>

            <!-- What is One Way Taxi -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">What is One Way Taxi Service?</h2>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    A one way taxi service, also known as a point-to-point or drop taxi service, is designed for travelers
                    who need transportation to a destination without requiring a return journey. Unlike traditional
                    round-trip services where you pay for both legs of the journey (including the empty return), one way
                    taxis charge only for the actual distance traveled.
                </p>
                <p class="text-lg leading-relaxed text-muted-foreground mb-6">
                    This service has revolutionized travel economics in India, particularly for long-distance journeys.
                    Traditionally, if you hired a taxi from Ahmedabad to Rann of Kutch (approximately 400 km), you would
                    have to pay for 800 km – the journey to Rann and the driver's return journey. With our one way taxi
                    service, you pay only for the 400 km you actually travel, making it significantly more economical.
                </p>
            </div>

            <!-- Popular Routes -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Popular One Way Routes to Rann of Kutch</h2>
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <!-- Card -->
                    <div class="border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-6 p-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-2"><a
                                            href="{{ url('ahmedabad-to-rann-of-kutch-taxi') }}"
                                            class="hover:underline">Ahmedabad → Rann of Kutch</a></h3>
                                    <div class="space-y-1 text-sm text-muted-foreground">
                                        <p>Distance: <span class="font-semibold">408 km</span></p>
                                        <p>Duration: <span class="font-semibold">7-8 hours</span></p>
                                        <p class="text-lg font-bold text-primary mt-2">Starting from ₹7,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-6 p-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-2"><a href="{{ url('mumbai-to-rann-of-kutch-taxi') }}"
                                            class="hover:underline">Mumbai → Rann of Kutch</a></h3>
                                    <div class="space-y-1 text-sm text-muted-foreground">
                                        <p>Distance: <span class="font-semibold">940 km</span></p>
                                        <p>Duration: <span class="font-semibold">12-14 hours</span></p>
                                        <p class="text-lg font-bold text-primary mt-2">Starting from ₹14,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-6 p-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-2"><a href="{{ url('rajkot-to-rann-of-kutch-taxi') }}"
                                            class="hover:underline">Rajkot → Rann of Kutch</a></h3>
                                    <div class="space-y-1 text-sm text-muted-foreground">
                                        <p>Distance: <span class="font-semibold">308 km</span></p>
                                        <p>Duration: <span class="font-semibold">5-6 hours</span></p>
                                        <p class="text-lg font-bold text-primary mt-2">Starting from ₹5,800</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-6 p-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-2"><a href="{{ url('bhuj-to-rann-of-kutch-taxi') }}"
                                            class="hover:underline">Bhuj → Rann of Kutch</a></h3>
                                    <div class="space-y-1 text-sm text-muted-foreground">
                                        <p>Distance: <span class="font-semibold">80 km</span></p>
                                        <p>Duration: <span class="font-semibold">1.5-2 hours</span></p>
                                        <p class="text-lg font-bold text-primary mt-2">Starting from ₹3000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-6 p-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-2"><a href="{{ url('surat-to-rann-of-kutch-taxi') }}"
                                            class="hover:underline">Surat → Rann of Kutch</a></h3>
                                    <div class="space-y-1 text-sm text-muted-foreground">
                                        <p>Distance: <span class="font-semibold">680 km</span></p>
                                        <p>Duration: <span class="font-semibold">8-9 hours</span></p>
                                        <p class="text-lg font-bold text-primary mt-2">Starting from ₹9,500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-6 p-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-2"><a
                                            href="{{ url('vadodara-to-rann-of-kutch-taxi') }}"
                                            class="hover:underline">Vadodara → Rann of Kutch</a></h3>
                                    <div class="space-y-1 text-sm text-muted-foreground">
                                        <p>Distance: <span class="font-semibold">515 km</span></p>
                                        <p>Duration: <span class="font-semibold">7-8 hours</span></p>
                                        <p class="text-lg font-bold text-primary mt-2">Starting from ₹8,500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <p class="text-sm text-muted-foreground italic">
                    *Prices are approximate and based on starting fare of ₹12/km for Sedan. Actual prices may vary based on
                    vehicle type, season, and specific requirements. Toll and state taxes are additional.
                </p>
            </div>

            <!-- Vehicles -->
            <section class="py-12 md:py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto space-y-8">
                        <div class="text-center space-y-4">
                            <h2 class="text-3xl md:text-4xl font-bold">Choose Your one-way Taxi</h2>
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
                                    data-id="Mini" data-trip="one-way">
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
                                    data-id="Sedan" data-trip="one-way">
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
                                    data-id="Ertiga" data-trip="one-way">
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
                                    data-id="Innova" data-trip="one-way">
                                    Book Now
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Key Benefits of Our One Way Taxi Service</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- 8 benefit cards -->
                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">No Return Charges</h3>
                        </div>
                        <p class="text-muted-foreground">Pay only for the distance you travel—40–50% more economical than
                            round-trip services.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Transparent Pricing</h3>
                        </div>
                        <p class="text-muted-foreground">Clear, upfront pricing with no hidden charges. Tolls shown with
                            receipts.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Professional Drivers</h3>
                        </div>
                        <p class="text-muted-foreground">Experienced, trained, and route-savvy drivers for a safe, smooth
                            journey.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">24/7 Availability</h3>
                        </div>
                        <p class="text-muted-foreground">Round-the-clock service for early flights or late arrivals (night
                            surcharge may apply).</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Well-Maintained Fleet</h3>
                        </div>
                        <p class="text-muted-foreground">Regularly serviced AC vehicles less than 5 years old.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Flexible Booking</h3>
                        </div>
                        <p class="text-muted-foreground">Easy changes up to 6 hours before departure. Instant
                            confirmations.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Safe & Secure</h3>
                        </div>
                        <p class="text-muted-foreground">GPS-tracked cars, verified drivers, 24/7 support.</p>
                    </div>

                    <div class="border rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start gap-3 mb-3">
                            <svg class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-width="2" d="M20 6L9 17l-5-5" />
                            </svg>
                            <h3 class="font-bold text-lg">Luggage Assistance</h3>
                        </div>
                        <p class="text-muted-foreground">Help with loading/unloading; ample luggage space per vehicle type.
                        </p>
                    </div>
                </div>
            </div>

            <!-- How it works -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">How to Book Your One Way Taxi</h2>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                1</div>
                            <h3 class="font-bold mb-2">Choose Your Route</h3>
                            <p class="text-sm text-muted-foreground">Select pickup and drop with date</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                2</div>
                            <h3 class="font-bold mb-2">Select Vehicle</h3>
                            <p class="text-sm text-muted-foreground">Pick the right car size</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                3</div>
                            <h3 class="font-bold mb-2">Confirm Booking</h3>
                            <p class="text-sm text-muted-foreground">Share contact & confirm</p>
                        </div>
                    </div>
                    <div class="text-center border rounded-lg hover:shadow-lg transition-shadow">
                        <div class="pt-8 pb-6 px-6">
                            <div
                                class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-accent text-white flex items-center justify-center text-2xl font-bold mx-auto mb-4">
                                4</div>
                            <h3 class="font-bold mb-2">Travel Comfortably</h3>
                            <p class="text-sm text-muted-foreground">Driver arrives on time</p>
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
                            <span>How much does a one way taxi to Rann of Kutch cost?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            From Ahmedabad, prices start around ₹4,800 for a Sedan (₹12/km × 400 km). From Bhuj, ~₹960.
                            SUVs/Innova cost more but offer extra space and comfort. Tolls & taxes extra.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Are toll charges included in the fare?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Toll charges and state taxes are charged as per actuals and shown with receipts for
                            transparency.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Can I make stops during the one way journey?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes—reasonable meal/restroom/sightseeing stops are fine. Extended stops (>30 mins) may incur
                            waiting charges.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What if I cancel?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Cancel ≥24 hours before pickup for full refund. Within 24 hours: 25% fee. No-shows are
                            non-refundable.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Is the driver fee included in per km rate?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes. Per-km includes driver + fuel + maintenance. Extra: tolls, parking (if any), state taxes.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Is late night/early morning booking allowed?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes, 24/7 service. Night window (11 PM–5 AM) may have 10–15% surcharge.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>What if the car breaks down?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            We arrange a replacement vehicle immediately at no extra cost. Vehicles are regularly maintained
                            to minimize incidents.
                        </div>
                    </div>

                    <div class="border rounded-lg overflow-hidden">
                        <button
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-btn hover:bg-gray-50 transition-colors">
                            <span>Do you provide child seats / accessible vehicles?</span>
                            <svg class="h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4 text-muted-foreground">
                            Yes—request 24 hours in advance. Small additional charge may apply.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Travel Tips -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">Travel Tips for Rann of Kutch Journey</h2>
                <div class="border rounded-lg">
                    <div class="pt-6 p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Best time: October–March, especially during Rann
                                    Utsav.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Carry warm clothing—desert nights get cold.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Book 2–3 days in advance during peak season.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Keep water, snacks, meds handy for long
                                    stretches.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Download offline maps; network can be patchy.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Carry some cash; many places are cash-only.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Start early to catch sunset views at the Rann.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M20 6L9 17l-5-5" />
                                </svg>
                                <span class="text-muted-foreground">Tell the driver if you want specific stops en
                                    route.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="rounded-lg overflow-hidden bg-gradient-to-r from-primary to-accent text-white">
                <div class="p-8 md:p-12 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Book Your One Way Taxi?</h2>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                        Get instant quotes and book your comfortable, affordable one way taxi to Rann of Kutch. Available
                        24/7 with professional drivers and transparent pricing.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-orange-600 hover:bg-gray-100 font-medium">
                            Book Now
                        </a>
                        {{-- <a href="tel:{{ config('settings.tel_code') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 hover:bg-white/20">
              Call: {{ config('settings.tel_code') }}
            </a> --}}
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
                    <h3 class="text-lg font-semibold">One-Way Cab Booking</h3>
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
                        <input type="hidden" name="form" value="one-way-taxi">
                        <input type="hidden" name="trip_type" id="modalTripType" value="one-way">
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
                    const tripType = btn.getAttribute('data-trip') || 'one-way';
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
