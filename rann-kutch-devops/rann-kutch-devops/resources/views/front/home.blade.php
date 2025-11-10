@extends('layouts.front')
@section('content')
    <!-- Hero Section -->
    <section class="py-8 md:py-12 bg-gradient-to-b from-secondary to-background">
        <div class="container mx-auto px-4">
            <!-- Title -->
            <div class="text-center mb-8 md:mb-12">
                <div class="inline-block px-4 py-1 bg-primary/90 text-white rounded-full text-sm mb-4">Book Your Journey
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 leading-tight">
                    Reliable Taxi & Car Rental Services in the Rann of Kutch
                </h1>
                <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">
                    One-Way, Round Trip, Local & Airport Transfers
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-6 md:gap-8 items-start">
                <!-- Carousel -->
                <div class="relative w-full">
                    <div id="hero-carousel" class="relative h-[300px] sm:h-[400px] md:h-[550px] rounded-lg md:rounded-2xl overflow-hidden">
                        <div class="carousel-container flex h-full transition-transform duration-500 ease-out"
                            id="carousel-track">
                            <!-- Replace with actual image paths -->
                            <div class="min-w-full h-full relative">
                                <img src="{{ asset('assets/hero-rann-kutch.jpg') }}" alt="Rann of Kutch"
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                <div class="absolute bottom-3 left-3 right-3 sm:bottom-6 sm:left-6 sm:right-6">
                                    <div class="inline-block px-2 py-1 sm:px-4 sm:py-1 bg-primary/90 text-white rounded-full text-xs sm:text-sm mb-1 sm:mb-2">
                                        Discover the White Desert</div>
                                    <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-white leading-tight">Golden Hour at Rann of Kutch</h2>
                                </div>
                            </div>
                            <div class="min-w-full h-full relative">
                                <img src="{{ asset('assets/rann-moonlight.jpg') }}" alt="Moonlit Rann"
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                <div class="absolute bottom-3 left-3 right-3 sm:bottom-6 sm:left-6 sm:right-6">
                                    <div class="inline-block px-2 py-1 sm:px-4 sm:py-1 bg-primary/90 text-white rounded-full text-xs sm:text-sm mb-1 sm:mb-2">
                                        Discover the White Desert</div>
                                    <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-white leading-tight">Magical Moonlit Nights</h2>
                                </div>
                            </div>
                            <div class="min-w-full h-full relative">
                                <img src="{{ asset('assets/rann-festival.jpg') }}" alt="Rann Festival"
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                <div class="absolute bottom-3 left-3 right-3 sm:bottom-6 sm:left-6 sm:right-6">
                                    <div class="inline-block px-2 py-1 sm:px-4 sm:py-1 bg-primary/90 text-white rounded-full text-xs sm:text-sm mb-1 sm:mb-2">
                                        Discover the White Desert</div>
                                    <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-white leading-tight">Experience Rann Utsav</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Controls -->
                        <button onclick="prevSlide()"
                            class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1.5 sm:p-2 rounded-full z-10">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button onclick="nextSlide()"
                            class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1.5 sm:p-2 rounded-full z-10">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Booking Form -->
                <div class="w-full lg:pl-8">
                    <div class="w-full bg-white shadow-2xl rounded-lg md:rounded-xl">
                        <div class="p-4 sm:p-6">
                            <!-- Tabs -->
                            <div class="flex overflow-x-auto mb-4 sm:mb-6 border-b scrollbar-hide -mx-4 sm:-mx-6 px-4 sm:px-6">
                                <button onclick="switchTab('one-way')"
                                    class="tab-btn flex-shrink-0 px-3 sm:px-4 py-2 text-xs sm:text-sm font-medium border-b-2 border-primary text-primary whitespace-nowrap"
                                    data-tab="one-way">One Way</button>
                                <button onclick="switchTab('round-trip')"
                                    class="tab-btn flex-shrink-0 px-3 sm:px-4 py-2 text-xs sm:text-sm font-medium border-b-2 border-transparent hover:text-primary whitespace-nowrap"
                                    data-tab="round-trip">Round Trip</button>
                                <button onclick="switchTab('local')"
                                    class="tab-btn flex-shrink-0 px-3 sm:px-4 py-2 text-xs sm:text-sm font-medium border-b-2 border-transparent hover:text-primary whitespace-nowrap"
                                    data-tab="local">Local</button>
                                <button onclick="switchTab('airport')"
                                    class="tab-btn flex-shrink-0 px-3 sm:px-4 py-2 text-xs sm:text-sm font-medium border-b-2 border-transparent hover:text-primary whitespace-nowrap"
                                    data-tab="airport">Airport</button>
                                <button onclick="switchTab('rental')"
                                    class="tab-btn flex-shrink-0 px-3 sm:px-4 py-2 text-xs sm:text-sm font-medium border-b-2 border-transparent hover:text-primary whitespace-nowrap"
                                    data-tab="rental">Rental</button>
                            </div>

                            <!-- ONE WAY FORM -->
                            <form id="form-one-way" method="post" class="space-y-3 sm:space-y-4 service-form">
                                @csrf
                                <input type="hidden" name="trip_type" value="one-way" />
                                <div id="source_ids-error-oneway" class="error text-danger text-xs sm:text-sm" style="display:none;">Please
                                    select pickup city</div>

                                <!-- Pickup -->
                                <div class="space-y-1.5 sm:space-y-2 relative">
                                    <label class="flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm font-medium">
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

                                <!-- Drop-off -->
                                <div class="space-y-2 relative">
                                    <div id="destination_ids-error-oneway" class="error text-danger"
                                        style="display:none;">Please select drop city</div>
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
                                    <label id="destination_id-error" class="error text-danger"
                                        for="destination_id"></label>
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
                                    <input type="tel" name="mobile" placeholder="9724382302" required
                                        maxlength="10" minlength="10"
                                        class="w-full px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>

                                <!-- Date -->
                                <div class="space-y-1.5 sm:space-y-2">
                                    <label class="flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm font-medium">
                                        <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Journey Date
                                    </label>
                                    <input type="date" name="pickup_date"
                                        class="w-full px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>

                                <button type="submit"
                                    class="w-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors btn-shine font-medium">
                                    Get Quote for One Way
                                </button>
                            </form>

                            <!-- ROUND TRIP FORM -->
                            <form id="form-round-trip" method="post" class="space-y-4 service-form hidden">
                                @csrf
                                <input type="hidden" name="trip_type" value="round-trip" />
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

                                <!-- Drop-off -->
                                <div class="space-y-2 relative">
                                    <div id="destination_ids-error-oneway" class="error text-danger"
                                        style="display:none;">Please select drop city</div>
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
                                    <label id="destination_id-error" class="error text-danger"
                                        for="destination_id"></label>
                                    <label id="destination_ids_hidden-error" class="error text-danger"
                                        for="destination_ids_hidden"></label>
                                </div>

                                <!-- Phone -->
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
                                <!-- Date -->
                                <!-- Journey Dates -->
                                <div class="space-y-2">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Pickup Date -->
                                        <div class="flex flex-col">
                                            <label for="pickup_date" class="flex items-center gap-2 text-sm font-medium text-gray-700 mb-1">
                                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span>Pickup Date <span class="text-red-500">*</span></span>
                                            </label>
                                            <input type="date" id="pickup_dates" name="pickup_date"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                                placeholder="Pickup Date">
                                            <label id="pickup_date-error" class="error text-danger text-sm mt-1"></label>
                                        </div>

                                        <!-- Return Date -->
                                        <div class="flex flex-col">
                                            <label for="return_date" class="flex items-center gap-2 text-sm font-medium text-gray-700 mb-1">
                                                <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span>Return Date <span class="text-red-500">*</span></span>
                                            </label>
                                            <input type="date" id="return_date" name="return_date"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                                placeholder="Return Date">
                                            <label id="return_date-error" class="error text-danger text-sm mt-1"></label>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit"
                                    class="w-full px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors">
                                    Get Quote for Round Trip
                                </button>
                            </form>

                            <!-- LOCAL FORM -->
                            <form id="form-local" method="post" action="{{ route('confirm-booking') }}"
                                class="space-y-4 service-form hidden">
                                @csrf
                                <input type="hidden" name="trip_type" value="local" />
                                <!-- City/Area -->
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
                                <!-- Phone -->
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
                                <button type="submit"
                                    class="w-full px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors">
                                    Get Quote for Local Taxi
                                </button>
                            </form>

                            <!-- AIRPORT FORM -->
                            <form id="form-airport" method="post" action="{{ route('confirm-booking') }}"
                                class="space-y-4 service-form hidden">
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
                                    <input type="text" id="airport_id" name="airport_id"
                                        placeholder="Enter airport" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary airport_id">
                                    <input type="hidden" name="airport_ids" id="airport_ids_hidden"
                                        class="airport_ids_hidden" value="">
                                    <div class="dropdown-menu airportSuggestions" role="listbox"></div>
                                    <label id="airport_id-error" class="error text-danger" for="airport_id"></label>
                                    <label id="airport_ids_hidden-error" class="error text-danger"
                                        for="airport_ids_hidden"></label>
                                </div>
                                <!-- Destination -->
                                <div class="space-y-2 relative">
                                    <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg><span>Location
                                            *</span></label>
                                    <input type="text" id="source_id" name="source_id"
                                        placeholder="Enter location" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary source_id">
                                    <input type="hidden" name="source_ids" id="source_ids_hidden"
                                        class="source_ids_hidden" value="">
                                    <div class="dropdown-menu sourceSuggestions" role="listbox"></div>
                                    <label id="source_id-error" class="error text-danger" for="source_id"></label>
                                    <label id="source_ids_hidden-error" class="error text-danger"
                                        for="source_ids_hidden"></label>
                                </div>
                                <!-- Phone -->
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
                                <!-- Flight Date -->
                                <div class="space-y-2">
                                    <label class="flex items-center gap-2 text-sm font-medium"><svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>Journey Date</label>
                                    <input type="date" name="pickup_date"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>
                                <button type="submit"
                                    class="w-full px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors">
                                    Get Quote for Airport Transfer
                                </button>
                            </form>

                            <!-- RENTAL FORM -->
                            <form id="form-rental" method="post" action="{{ route('confirm-booking') }}"
                                class="space-y-4 service-form hidden">
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
                                <!-- Phone -->
                                <div class="space-y-2">
                                    <label class="flex items-center gap-2 text-sm font-medium"> <svg class="h-4 w-4 text-primary" fill="none" stroke="currentColor"
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
                                        </svg>Journey Date</label>
                                    <input type="date" name="pickup_date"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                </div>
                                <button type="submit"
                                    class="w-full px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors">
                                    Get Quote for Car Rental
                                </button>
                            </form>

                            <div class="mt-4 pt-4 border-t text-center">
                                <p class="text-xs sm:text-sm text-muted-foreground">
                                    Or call us directly:
                                    <a href="tel:{{ config('settings.tel_code') }}"
                                        class="text-primary font-semibold hover:underline break-all">{{ config('settings.mobile') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 sm:mt-6 flex flex-wrap gap-3 sm:gap-4 text-xs sm:text-sm">
                        <div class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="text-muted-foreground">Fully Insured</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-muted-foreground">4.9/5 Rating</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-muted-foreground">24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Taxi Options -->
    <section class="py-8 sm:py-12 md:py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-trust/5 via-primary/10 to-accent/5"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-8 sm:mb-12 md:mb-16">
                <div
                    class="inline-block px-3 sm:px-4 py-1 bg-gradient-to-r from-trust to-primary text-white rounded-full text-xs sm:text-sm mb-3 sm:mb-4">
                    Choose Your Ride</div>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 bg-gradient-to-r from-trust via-primary to-accent bg-clip-text text-transparent px-4">
                    Select Your Taxi
                </h2>
                <p class="text-sm sm:text-base md:text-lg text-muted-foreground max-w-2xl mx-auto px-4">
                    Affordable rates with professional drivers for your journey to Rann of Kutch
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 max-w-7xl mx-auto">
                <!-- Taxi Card 1 -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 p-6 relative overflow-hidden group">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-trust/5 via-primary/5 to-accent/5 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>

                    <div class="mb-4 flex items-center justify-center h-32 relative z-10">
                        <img src="{{ asset('assets/car-swift.png') }}" alt="Swift Mini Taxi"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                    </div>

                    <div class="mb-3 relative z-10">
                        <h3 class="font-bold text-2xl mb-1">Mini</h3>
                        <p class="text-sm text-primary font-semibold">Swift</p>
                    </div>

                    <div class="flex items-center gap-2 text-muted-foreground mb-3 relative z-10">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-sm">4 Seater</span>
                    </div>

                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed relative z-10">
                        Perfect for short trips and budget travelers
                    </p>

                    <ul class="space-y-2 mb-6 relative z-10">
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            AC
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Music System
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Clean & Comfortable
                        </li>
                    </ul>

                    {{-- <div
                        class="mb-4 p-3 rounded-xl bg-gradient-to-br from-trust/10 via-primary/10 to-accent/10 border border-primary/20 text-center relative z-10">
                        <p class="text-xs text-muted-foreground mb-1">Starting from</p>
                        <p
                            class="text-2xl font-bold bg-gradient-to-r from-trust via-primary to-accent bg-clip-text text-transparent">
                            ₹12/km
                        </p>
                    </div> --}}

                    <button onclick="openBookingModal('Mini')"
                        class="w-full px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-hover transition-all relative z-10">
                        Book Now
                    </button>
                </div>

                <!-- Taxi Card 2 -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 p-6 relative overflow-hidden group lg:translate-y-6">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-trust/5 via-primary/5 to-accent/5 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>

                    <div class="mb-4 flex items-center justify-center h-32 relative z-10">
                        <img src="{{ asset('assets/car-etios.png') }}" alt="Etios Sedan"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                    </div>

                    <div class="mb-3 relative z-10">
                        <h3 class="font-bold text-2xl mb-1">Sedan</h3>
                        <p class="text-sm text-primary font-semibold">Etios</p>
                    </div>

                    <div class="flex items-center gap-2 text-muted-foreground mb-3 relative z-10">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-sm">4 Seater</span>
                    </div>

                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed relative z-10">
                        Comfortable ride for families and small groups
                    </p>

                    <ul class="space-y-2 mb-6 relative z-10">
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            AC
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Spacious
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Premium Comfort
                        </li>
                    </ul>

                    {{-- <div
                        class="mb-4 p-3 rounded-xl bg-gradient-to-br from-trust/10 via-primary/10 to-accent/10 border border-primary/20 text-center relative z-10">
                        <p class="text-xs text-muted-foreground mb-1">Starting from</p>
                        <p
                            class="text-2xl font-bold bg-gradient-to-r from-trust via-primary to-accent bg-clip-text text-transparent">
                            ₹14/km
                        </p>
                    </div> --}}

                    <button onclick="openBookingModal('Sedan')"
                        class="w-full px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-hover transition-all relative z-10">
                        Book Now
                    </button>
                </div>

                <!-- Taxi Card 3 -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 p-6 relative overflow-hidden group">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-trust/5 via-primary/5 to-accent/5 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>

                    <div class="mb-4 flex items-center justify-center h-32 relative z-10">
                        <img src="{{ asset('assets/car-creta.png') }}" alt="Creta SUV"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                    </div>

                    <div class="mb-3 relative z-10">
                        <h3 class="font-bold text-2xl mb-1">SUV</h3>
                        <p class="text-sm text-primary font-semibold">Creta</p>
                    </div>

                    <div class="flex items-center gap-2 text-muted-foreground mb-3 relative z-10">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-sm">6-7 Seater</span>
                    </div>

                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed relative z-10">
                        Spacious and luxurious for larger groups
                    </p>

                    <ul class="space-y-2 mb-6 relative z-10">
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            AC
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Extra Luggage Space
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Premium
                        </li>
                    </ul>

                    {{-- <div
                        class="mb-4 p-3 rounded-xl bg-gradient-to-br from-trust/10 via-primary/10 to-accent/10 border border-primary/20 text-center relative z-10">
                        <p class="text-xs text-muted-foreground mb-1">Starting from</p>
                        <p
                            class="text-2xl font-bold bg-gradient-to-r from-trust via-primary to-accent bg-clip-text text-transparent">
                            ₹16/km
                        </p>
                    </div> --}}

                    <button onclick="openBookingModal('Ertiga')"
                        class="w-full px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-hover transition-all relative z-10">
                        Book Now
                    </button>
                </div>

                <!-- Taxi Card 4 -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 p-6 relative overflow-hidden group lg:translate-y-8">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-trust/5 via-primary/5 to-accent/5 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>

                    <div class="mb-4 flex items-center justify-center h-32 relative z-10">
                        <img src="{{ asset('assets/car-innova.png') }}" alt="Innova Crysta"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                    </div>

                    <div class="mb-3 relative z-10">
                        <h3 class="font-bold text-2xl mb-1">Innova</h3>
                        <p class="text-sm text-primary font-semibold">Crysta</p>
                    </div>

                    <div class="flex items-center gap-2 text-muted-foreground mb-3 relative z-10">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-sm">7 Seater</span>
                    </div>

                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed relative z-10">
                        Most popular choice for group travel
                    </p>

                    <ul class="space-y-2 mb-6 relative z-10">
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            AC
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Comfortable
                        </li>
                        <li class="flex items-center gap-2 text-sm text-muted-foreground">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            Reliable
                        </li>
                    </ul>

                    {{-- <div
                        class="mb-4 p-3 rounded-xl bg-gradient-to-br from-trust/10 via-primary/10 to-accent/10 border border-primary/20 text-center relative z-10">
                        <p class="text-xs text-muted-foreground mb-1">Starting from</p>
                        <p
                            class="text-2xl font-bold bg-gradient-to-r from-trust via-primary to-accent bg-clip-text text-transparent">
                            ₹15/km
                        </p>
                    </div> --}}

                    <button onclick="openBookingModal('Innova')"
                        class="w-full px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-hover transition-all relative z-10">
                        Book Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Routes Section -->
    <section class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-accent/10 via-background to-trust/10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,hsl(var(--primary)/0.08),transparent_40%)]">
        </div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_70%,hsl(var(--accent)/0.08),transparent_40%)]">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-8 sm:mb-12 md:mb-16">
                <div
                    class="inline-block px-3 sm:px-4 py-1 bg-gradient-to-r from-primary to-accent text-white rounded-full text-xs sm:text-sm mb-3 sm:mb-4">
                    Popular Destinations</div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 px-4">Our Routes</h2>
                <p class="text-sm sm:text-base md:text-lg text-muted-foreground max-w-2xl mx-auto px-4">
                    Explore taxi services from major cities to the mesmerizing Rann of Kutch
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 sm:gap-4 md:gap-6 max-w-6xl mx-auto">
                <!-- Ahmedabad -->
                <a href="{{ url('rann-of-kutch-to-ahmedabad-taxi') }}" class="group text-center">
                    <div class="relative mb-3 sm:mb-4 mx-auto w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-trust via-primary to-accent p-1 group-hover:scale-110 transition-transform duration-300">
                            <div class="w-full h-full rounded-full bg-background p-1">
                                <img src="{{ asset('assets/city-ahmedabad-Chm3EP_n.jpg') }}"
                                    alt="Ahmedabad to Rann of Kutch taxi service"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gradient-to-r from-trust to-primary text-white px-2 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold shadow-lg whitespace-nowrap">
                            ~408 km
                        </div>
                    </div>
                    <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 group-hover:text-primary transition-colors">Ahmedabad</h3>
                    <p class="text-[10px] sm:text-xs text-muted-foreground">From Gujarat's largest city</p>
                </a>

                <!-- Bhuj -->
                <a href="{{ url('rann-of-kutch-to-bhuj-taxi') }}" class="group text-center">
                    <div class="relative mb-3 sm:mb-4 mx-auto w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-trust via-primary to-accent p-1 group-hover:scale-110 transition-transform duration-300">
                            <div class="w-full h-full rounded-full bg-background p-1">
                                <img src="{{ asset('assets/city-bhuj-BjtyZ2Wj.jpg') }}"
                                    alt="Bhuj to Rann of Kutch taxi service"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gradient-to-r from-trust to-primary text-white px-2 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold shadow-lg whitespace-nowrap">
                            ~81 km
                        </div>
                    </div>
                    <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 group-hover:text-primary transition-colors">Bhuj</h3>
                    <p class="text-[10px] sm:text-xs text-muted-foreground">Nearest major city</p>
                </a>

                <!-- Rajkot -->
                <a href="{{ url('rann-of-kutch-to-rajkot-taxi') }}" class="group text-center">
                    <div class="relative mb-3 sm:mb-4 mx-auto w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-trust via-primary to-accent p-1 group-hover:scale-110 transition-transform duration-300">
                            <div class="w-full h-full rounded-full bg-background p-1">
                                <img src="{{ asset('assets/city-rajkot-latN46OS.jpg') }}"
                                    alt="Rajkot to Rann of Kutch taxi service"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gradient-to-r from-trust to-primary text-white px-2 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold shadow-lg whitespace-nowrap">
                            ~308 km
                        </div>
                    </div>
                    <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 group-hover:text-primary transition-colors">Rajkot</h3>
                    <p class="text-[10px] sm:text-xs text-muted-foreground">From the royal city</p>
                </a>

                <!-- Mumbai -->
                <a href="{{ url('rann-of-kutch-to-mumbai-taxi') }}" class="group text-center">
                    <div class="relative mb-3 sm:mb-4 mx-auto w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-trust via-primary to-accent p-1 group-hover:scale-110 transition-transform duration-300">
                            <div class="w-full h-full rounded-full bg-background p-1">
                                <img src="{{ asset('assets/city-mumbai-DFXMJSKp.jpg') }}"
                                    alt="Mumbai to Rann of Kutch taxi service"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gradient-to-r from-trust to-primary text-white px-2 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold shadow-lg whitespace-nowrap">
                            ~940 km
                        </div>
                    </div>
                    <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 group-hover:text-primary transition-colors">Mumbai</h3>
                    <p class="text-[10px] sm:text-xs text-muted-foreground">From the city of dreams</p>
                </a>

                <!-- Mandvi -->
                <a href="{{ url('rann-of-kutch-to-mandvi-taxi') }}" class="group text-center">
                    <div class="relative mb-3 sm:mb-4 mx-auto w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-trust via-primary to-accent p-1 group-hover:scale-110 transition-transform duration-300">
                            <div class="w-full h-full rounded-full bg-background p-1">
                                <img src="{{ asset('assets/city-mandvi-p-2gJgu7.jpg') }}"
                                    alt="Rann of Kutch to Mandvi taxi service"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gradient-to-r from-trust to-primary text-white px-2 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold shadow-lg whitespace-nowrap">
                            ~140 km
                        </div>
                    </div>
                    <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 group-hover:text-primary transition-colors">Mandvi</h3>
                    <p class="text-[10px] sm:text-xs text-muted-foreground">Coastal heritage town</p>
                </a>

                <!-- Surat -->
                <a href="{{ url('rann-of-kutch-to-surat-taxi') }}" class="group text-center">
                    <div class="relative mb-3 sm:mb-4 mx-auto w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-trust via-primary to-accent p-1 group-hover:scale-110 transition-transform duration-300">
                            <div class="w-full h-full rounded-full bg-background p-1">
                                <img src="{{ asset('assets/city-surat-lJpacF93.jpg') }}"
                                    alt="Surat to Rann of Kutch taxi service"
                                    class="w-full h-full object-cover rounded-full">
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gradient-to-r from-trust to-primary text-white px-2 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold shadow-lg whitespace-nowrap">
                            ~680 km
                        </div>
                    </div>
                    <h3 class="font-bold text-sm sm:text-base md:text-lg mb-1 group-hover:text-primary transition-colors">Surat</h3>
                    <p class="text-[10px] sm:text-xs text-muted-foreground">From the diamond city</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 relative overflow-hidden bg-gradient-to-br from-secondary/40 via-background to-accent/5">
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-block px-4 py-1 bg-primary/10 text-primary border border-primary/20 rounded-full text-sm mb-4">
                    Excellence in Service</div>
                <h2
                    class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-primary via-accent to-trust bg-clip-text text-transparent">
                    Why Choose Us</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Experience the best taxi service in the Rann of Kutch region with our commitment to quality and
                    reliability
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Experienced Local Drivers -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-primary to-primary/70 opacity-0 group-hover:opacity-5 transition-opacity duration-300">
                    </div>
                    <div class="p-6 relative z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-primary/70 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3 group-hover:text-primary transition-colors">Experienced Local
                            Drivers</h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            Familiar with Kutch terrain, roads, and the best routes to your destination
                        </p>
                    </div>
                </div>

                <!-- Well-Maintained Vehicles -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-accent to-accent/70 opacity-0 group-hover:opacity-5 transition-opacity duration-300">
                    </div>
                    <div class="p-6 relative z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-accent/70 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3 group-hover:text-primary transition-colors">Well-Maintained
                            Vehicles</h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            Clean, comfortable, and regularly serviced fleet for a smooth journey
                        </p>
                    </div>
                </div>

                <!-- Transparent Pricing -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-trust to-trust/70 opacity-0 group-hover:opacity-5 transition-opacity duration-300">
                    </div>
                    <div class="p-6 relative z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-trust to-trust/70 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3 group-hover:text-primary transition-colors">Transparent Pricing
                        </h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            No hidden charges. Clear pricing structure with all costs included
                        </p>
                    </div>
                </div>

                <!-- 24/7 Availability -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-primary to-accent opacity-0 group-hover:opacity-5 transition-opacity duration-300">
                    </div>
                    <div class="p-6 relative z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-accent flex items-center justify-center mb-4 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                            <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3 group-hover:text-primary transition-colors">24/7 Availability
                        </h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            Available for one-way, round-trip, airport transfers, and local sightseeing
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,hsl(var(--primary)/0.05),transparent_50%)]">
        </div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,hsl(var(--accent)/0.05),transparent_50%)]">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <div
                    class="inline-block px-4 py-1 bg-accent/10 text-accent border border-accent/20 rounded-full text-sm mb-4">
                    Complete Solutions</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Services</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Comprehensive taxi and car rental solutions for all your travel needs in the Rann of Kutch region
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Service 1 - One Way Taxi -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="p-8 relative z-10">
                        <div class="mb-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/10 to-accent/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-8 w-8 text-primary group-hover:text-accent transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-3">One Way Taxi</h3>
                        <p class="text-muted-foreground mb-6 leading-relaxed">Point-to-point drop-off service for one-way
                            journeys to or from Rann of Kutch. Perfect for travelers who don't need a return trip.</p>
                        <a href="{{route('one-way-taxi')}}"
                            class="inline-flex items-center text-primary font-semibold hover:gap-2 transition-all group-hover:text-accent">
                            Learn More
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 2 - Round Trip Taxi -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden lg:translate-y-4">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-accent/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="p-8 relative z-10">
                        <div class="mb-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/10 to-accent/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-8 w-8 text-primary group-hover:text-accent transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>

                        </div>
                        <h3 class="font-bold text-xl mb-3">Round Trip (Outstation) Taxi</h3>
                        <p class="text-muted-foreground mb-6 leading-relaxed">Complete round trip service with flexible
                            multi-day packages, multiple stops, and sightseeing options across Gujarat.</p>
                        <a href="{{route('outstation-taxi')}}"
                            class="inline-flex items-center text-primary font-semibold hover:gap-2 transition-all group-hover:text-accent">
                            Learn More
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 3 - Airport Pickup Drop -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-trust/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="p-8 relative z-10">
                        <div class="mb-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/10 to-trust/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-8 w-8 text-primary group-hover:text-trust transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-3">Airport Pickup Drop</h3>
                        <p class="text-muted-foreground mb-6 leading-relaxed">Reliable airport transfer services from
                            Ahmedabad and Bhuj airports. Timely pickups and comfortable rides guaranteed.</p>
                        <a href="{{route('airport-taxi')}}"
                            class="inline-flex items-center text-primary font-semibold hover:gap-2 transition-all group-hover:text-trust">
                            Learn More
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 4 - Local City Rental -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden lg:translate-y-4">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="p-8 relative z-10">
                        <div class="mb-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-accent/10 to-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-8 w-8 text-primary group-hover:text-accent transition-colors"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-3">Local City Rental Taxi</h3>
                        <p class="text-muted-foreground mb-6 leading-relaxed">Explore local attractions and cities within
                            Kutch region with flexible pickup and drop-off points throughout the day.</p>
                        <a href="{{route('local-taxi')}}"
                            class="inline-flex items-center text-primary font-semibold hover:gap-2 transition-all group-hover:text-accent">
                            Learn More
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 6 - Corporate Cab Rental -->
                <div
                    class="card-hover bg-white rounded-lg shadow-lg border-2 hover:border-primary/50 hover:shadow-2xl group relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="p-8 relative z-10">
                        <div class="mb-6">
                            <div
                                class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/10 to-accent/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-8 w-8 text-primary group-hover:text-accent transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-xl mb-3">Corporate Cab Rental</h3>
                        <p class="text-muted-foreground mb-6 leading-relaxed">Professional transportation solutions for
                            businesses, corporate events, and employee transfers with premium vehicles.</p>
                        <a href="{{route('car-rental')}}"
                            class="inline-flex items-center text-primary font-semibold hover:gap-2 transition-all group-hover:text-accent">
                            Learn More
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Routes Section -->
    <section class="py-16 relative bg-gradient-to-b from-accent/5 to-transparent">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div
                    class="inline-block px-4 py-1 bg-trust/10 text-trust border border-trust/20 rounded-full text-sm mb-4">
                    Discover Routes</div>
                <h2
                    class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-primary via-accent to-trust bg-clip-text text-transparent">
                    Popular Routes</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Explore our most traveled routes to and from the magnificent Rann of Kutch
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Route 1 - Ahmedabad -->
                <a href="{{ url('ahmedabad-to-rann-of-kutch-taxi') }}"
                    class="overflow-hidden group border-2 border-gray-200 rounded-lg hover:border-accent/50 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 sm:h-64 overflow-hidden">
                        <img src="{{ asset('assets/hero-rann-kutch-C7wliKV1.jpg') }}" alt="Ahmedabad to Rann of Kutch"
                            class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent group-hover:from-primary/90 group-hover:via-primary/50 transition-all duration-500">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div
                                class="inline-block px-3 py-1 bg-white/90 text-foreground backdrop-blur-sm mb-3 group-hover:bg-accent group-hover:text-white transition-colors rounded-full text-xs font-semibold w-fit">
                                ~408 km
                            </div>
                            <h3 class="font-bold text-xl text-white mb-2 group-hover:translate-x-2 transition-transform">
                                Ahmedabad → Rann of Kutch</h3>
                            <div class="flex items-center text-white/90 text-sm group-hover:text-white transition-colors">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Direct Route Available</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 pb-4 px-6 bg-gradient-to-b from-background to-secondary/30">
                        <button
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg group-hover:bg-accent group-hover:text-white group-hover:border-accent transition-all text-sm font-medium flex items-center justify-center">
                            View Details
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </a>

                <!-- Route 2 - Bhuj -->
                <a href="{{ url('bhuj-to-rann-of-kutch-taxi') }}"
                    class="overflow-hidden group border-2 border-gray-200 rounded-lg hover:border-accent/50 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 sm:h-64 overflow-hidden">
                        <img src="{{ asset('assets/rann-moonlight-CAR90oOB.jpg') }}" alt="Bhuj to Rann of Kutch"
                            class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent group-hover:from-primary/90 group-hover:via-primary/50 transition-all duration-500">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div
                                class="inline-block px-3 py-1 bg-white/90 text-foreground backdrop-blur-sm mb-3 group-hover:bg-accent group-hover:text-white transition-colors rounded-full text-xs font-semibold w-fit">
                                ~81 km
                            </div>
                            <h3 class="font-bold text-xl text-white mb-2 group-hover:translate-x-2 transition-transform">
                                Bhuj → Rann of Kutch</h3>
                            <div class="flex items-center text-white/90 text-sm group-hover:text-white transition-colors">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Direct Route Available</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 pb-4 px-6 bg-gradient-to-b from-background to-secondary/30">
                        <button
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg group-hover:bg-accent group-hover:text-white group-hover:border-accent transition-all text-sm font-medium flex items-center justify-center">
                            View Details
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </a>

                <!-- Route 3 - Rajkot -->
                <a href="{{ url('rajkot-to-rann-of-kutch-taxi') }}"
                    class="overflow-hidden group border-2 border-gray-200 rounded-lg hover:border-accent/50 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 sm:h-64 overflow-hidden">
                        <img src="{{ asset('assets/rann-festival-OWntgLCY.jpg') }}" alt="Rajkot to Rann of Kutch"
                            class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent group-hover:from-primary/90 group-hover:via-primary/50 transition-all duration-500">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div
                                class="inline-block px-3 py-1 bg-white/90 text-foreground backdrop-blur-sm mb-3 group-hover:bg-accent group-hover:text-white transition-colors rounded-full text-xs font-semibold w-fit">
                                ~308 km
                            </div>
                            <h3 class="font-bold text-xl text-white mb-2 group-hover:translate-x-2 transition-transform">
                                Rajkot → Rann of Kutch</h3>
                            <div class="flex items-center text-white/90 text-sm group-hover:text-white transition-colors">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Direct Route Available</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 pb-4 px-6 bg-gradient-to-b from-background to-secondary/30">
                        <button
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg group-hover:bg-accent group-hover:text-white group-hover:border-accent transition-all text-sm font-medium flex items-center justify-center">
                            View Details
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </a>

                <!-- Route 4 - Mumbai -->
                <a href="{{ url('mumbai-to-rann-of-kutch-taxi') }}"
                    class="overflow-hidden group border-2 border-gray-200 rounded-lg hover:border-accent/50 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 sm:h-64 overflow-hidden">
                        <img src="{{ asset('assets/rann-sunrise-B-7l1D2Y.jpg') }}" alt="Mumbai to Rann of Kutch"
                            class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent group-hover:from-primary/90 group-hover:via-primary/50 transition-all duration-500">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div
                                class="inline-block px-3 py-1 bg-white/90 text-foreground backdrop-blur-sm mb-3 group-hover:bg-accent group-hover:text-white transition-colors rounded-full text-xs font-semibold w-fit">
                                ~940 km
                            </div>
                            <h3 class="font-bold text-xl text-white mb-2 group-hover:translate-x-2 transition-transform">
                                Mumbai → Rann of Kutch</h3>
                            <div class="flex items-center text-white/90 text-sm group-hover:text-white transition-colors">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Direct Route Available</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 pb-4 px-6 bg-gradient-to-b from-background to-secondary/30">
                        <button
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg group-hover:bg-accent group-hover:text-white group-hover:border-accent transition-all text-sm font-medium flex items-center justify-center">
                            View Details
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </a>

                <!-- Route 5 - Rann to Mandvi -->
                <a href="{{ url('rann-of-kutch-to-mandvi-taxi') }}"
                    class="overflow-hidden group border-2 border-gray-200 rounded-lg hover:border-accent/50 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 sm:h-64 overflow-hidden">
                        <img src="{{ asset('assets/rann-aerial-wKb3yTaq.jpg') }}" alt="Rann of Kutch to Mandvi"
                            class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent group-hover:from-primary/90 group-hover:via-primary/50 transition-all duration-500">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div
                                class="inline-block px-3 py-1 bg-white/90 text-foreground backdrop-blur-sm mb-3 group-hover:bg-accent group-hover:text-white transition-colors rounded-full text-xs font-semibold w-fit">
                                ~140 km
                            </div>
                            <h3 class="font-bold text-xl text-white mb-2 group-hover:translate-x-2 transition-transform">
                                Rann of Kutch → Mandvi</h3>
                            <div class="flex items-center text-white/90 text-sm group-hover:text-white transition-colors">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Direct Route Available</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 pb-4 px-6 bg-gradient-to-b from-background to-secondary/30">
                        <button
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg group-hover:bg-accent group-hover:text-white group-hover:border-accent transition-all text-sm font-medium flex items-center justify-center">
                            View Details
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </a>

                <!-- Route 6 - Rann to Ahmedabad -->
                <a href="{{ url('rann-of-kutch-to-gandhidham-railway-station-taxi') }}"
                    class="overflow-hidden group border-2 border-gray-200 rounded-lg hover:border-accent/50 hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-56 sm:h-64 overflow-hidden">
                        <img src="{{ asset('assets/hero-rann-kutch-C7wliKV1.jpg') }}" alt="Rann of Kutch to Ahmedabad"
                            class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent group-hover:from-primary/90 group-hover:via-primary/50 transition-all duration-500">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <div
                                class="inline-block px-3 py-1 bg-white/90 text-foreground backdrop-blur-sm mb-3 group-hover:bg-accent group-hover:text-white transition-colors rounded-full text-xs font-semibold w-fit">
                                ~142 km
                            </div>
                            <h3 class="font-bold text-xl text-white mb-2 group-hover:translate-x-2 transition-transform">
                                Rann of Kutch → Ahmedabad</h3>
                            <div class="flex items-center text-white/90 text-sm group-hover:text-white transition-colors">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Direct Route Available</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 pb-4 px-6 bg-gradient-to-b from-background to-secondary/30">
                        <button
                            class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg group-hover:bg-accent group-hover:text-white group-hover:border-accent transition-all text-sm font-medium flex items-center justify-center">
                            View Details
                            <svg class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,hsl(var(--accent)/0.1),transparent_50%)]"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <div
                    class="inline-block px-4 py-1 bg-primary/10 text-primary border border-primary/20 rounded-full text-sm mb-4">
                    Customer Stories</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Customers Say</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Read reviews from travelers who experienced our reliable taxi service
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 - Priya Sharma -->
                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 hover:border-primary/30 hover:shadow-2xl group relative overflow-hidden"
                    style="transform: rotate(0.5deg); transition: all 0.3s ease;">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-accent to-trust"></div>
                    <div class="pt-8 pb-6 px-6 text-center">
                        <!-- Customer Avatar -->
                        <div class="mb-6 flex justify-center">
                            <div class="relative">
                                <div
                                    class="w-24 h-24 rounded-full bg-gradient-to-br from-primary via-accent to-trust p-1 group-hover:scale-110 transition-transform duration-300">
                                    <div
                                        class="w-full h-full rounded-full bg-background flex items-center justify-center">
                                        <span
                                            class="text-3xl font-bold bg-gradient-to-r from-primary via-accent to-trust bg-clip-text text-transparent">
                                            P
                                        </span>
                                    </div>
                                </div>
                                <!-- Badge decoration -->
                                <div
                                    class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="h-5 w-5 fill-white text-white" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Info -->
                        <div class="mb-6">
                            <h3 class="font-bold text-xl text-foreground mb-1">Priya Sharma</h3>
                            <p class="text-sm text-muted-foreground flex items-center justify-center gap-1">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Mumbai
                            </p>
                        </div>

                        <!-- Star Rating -->
                        <div class="flex justify-center mb-6 gap-1">
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 50ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 100ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 150ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 200ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <!-- Testimonial Quote -->
                        <div class="relative mb-4">
                            <span
                                class="text-6xl text-primary/20 absolute -top-4 left-1/2 -translate-x-1/2">&ldquo;</span>
                            <p class="text-muted-foreground leading-relaxed relative z-10 italic">
                                Excellent service! The driver was punctual, professional, and knew all the best spots at
                                Rann of Kutch. Highly recommended for anyone visiting the white desert.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 - Rajesh Patel -->
                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 hover:border-primary/30 hover:shadow-2xl group relative overflow-hidden"
                    style="transform: rotate(-0.5deg); transition: all 0.3s ease;">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-accent to-trust"></div>
                    <div class="pt-8 pb-6 px-6 text-center">
                        <!-- Customer Avatar -->
                        <div class="mb-6 flex justify-center">
                            <div class="relative">
                                <div
                                    class="w-24 h-24 rounded-full bg-gradient-to-br from-primary via-accent to-trust p-1 group-hover:scale-110 transition-transform duration-300">
                                    <div
                                        class="w-full h-full rounded-full bg-background flex items-center justify-center">
                                        <span
                                            class="text-3xl font-bold bg-gradient-to-r from-primary via-accent to-trust bg-clip-text text-transparent">
                                            R
                                        </span>
                                    </div>
                                </div>
                                <!-- Badge decoration -->
                                <div
                                    class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="h-5 w-5 fill-white text-white" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Info -->
                        <div class="mb-6">
                            <h3 class="font-bold text-xl text-foreground mb-1">Rajesh Patel</h3>
                            <p class="text-sm text-muted-foreground flex items-center justify-center gap-1">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Ahmedabad
                            </p>
                        </div>

                        <!-- Star Rating -->
                        <div class="flex justify-center mb-6 gap-1">
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 50ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 100ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 150ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 200ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <!-- Testimonial Quote -->
                        <div class="relative mb-4">
                            <span
                                class="text-6xl text-primary/20 absolute -top-4 left-1/2 -translate-x-1/2">&ldquo;</span>
                            <p class="text-muted-foreground leading-relaxed relative z-10 italic">
                                Very comfortable journey from Ahmedabad to Rann. The vehicle was clean and well-maintained.
                                Will definitely use their service again during Rann Utsav.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 - Anita Desai -->
                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 hover:border-primary/30 hover:shadow-2xl group relative overflow-hidden"
                    style="transform: rotate(0.5deg); transition: all 0.3s ease;">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-accent to-trust"></div>
                    <div class="pt-8 pb-6 px-6 text-center">
                        <!-- Customer Avatar -->
                        <div class="mb-6 flex justify-center">
                            <div class="relative">
                                <div
                                    class="w-24 h-24 rounded-full bg-gradient-to-br from-primary via-accent to-trust p-1 group-hover:scale-110 transition-transform duration-300">
                                    <div
                                        class="w-full h-full rounded-full bg-background flex items-center justify-center">
                                        <span
                                            class="text-3xl font-bold bg-gradient-to-r from-primary via-accent to-trust bg-clip-text text-transparent">
                                            A
                                        </span>
                                    </div>
                                </div>
                                <!-- Badge decoration -->
                                <div
                                    class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="h-5 w-5 fill-white text-white" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Info -->
                        <div class="mb-6">
                            <h3 class="font-bold text-xl text-foreground mb-1">Anita Desai</h3>
                            <p class="text-sm text-muted-foreground flex items-center justify-center gap-1">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Surat
                            </p>
                        </div>

                        <!-- Star Rating -->
                        <div class="flex justify-center mb-6 gap-1">
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 50ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 100ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 150ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="h-5 w-5 fill-primary text-primary group-hover:fill-accent group-hover:text-accent transition-colors"
                                style="transition-delay: 200ms" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <!-- Testimonial Quote -->
                        <div class="relative mb-4">
                            <span
                                class="text-6xl text-primary/20 absolute -top-4 left-1/2 -translate-x-1/2">&ldquo;</span>
                            <p class="text-muted-foreground leading-relaxed relative z-10 italic">
                                Professional and reliable taxi service. Our family trip to the Rann of Kutch was made
                                memorable by their excellent service and local knowledge.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 relative overflow-hidden bg-gradient-to-b from-secondary/20 to-background">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <div
                    class="inline-block px-4 py-1 bg-trust/10 text-trust border border-trust/20 rounded-full text-sm mb-4">
                    Got Questions?</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Everything you need to know about our taxi services in the Rann of Kutch
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div
                        class="faq-item border-2 border-gray-200 rounded-lg px-6 hover:border-primary/30 transition-colors">
                        <button
                            class="faq-trigger w-full py-4 text-left font-semibold hover:text-primary flex items-center justify-between">
                            <span>How do I book a taxi to Rann of Kutch?</span>
                            <svg class="faq-icon h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden pb-4 text-muted-foreground leading-relaxed">
                            You can book a taxi through our website using the booking form, call us directly at +91 98765
                            43210, or contact us via WhatsApp. We recommend booking in advance, especially during the Rann
                            Utsav season (November to February).
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div
                        class="faq-item border-2 border-gray-200 rounded-lg px-6 hover:border-primary/30 transition-colors">
                        <button
                            class="faq-trigger w-full py-4 text-left font-semibold hover:text-primary flex items-center justify-between">
                            <span>What is the distance from Ahmedabad to Rann of Kutch?</span>
                            <svg class="faq-icon h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden pb-4 text-muted-foreground leading-relaxed">
                            The distance from Ahmedabad to Rann of Kutch is approximately 400 kilometers, which takes around
                            7-8 hours by road. We provide comfortable vehicles with experienced drivers who know the route
                            well.
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div
                        class="faq-item border-2 border-gray-200 rounded-lg px-6 hover:border-primary/30 transition-colors">
                        <button
                            class="faq-trigger w-full py-4 text-left font-semibold hover:text-primary flex items-center justify-between">
                            <span>Are your vehicles air-conditioned?</span>
                            <svg class="faq-icon h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden pb-4 text-muted-foreground leading-relaxed">
                            Yes, all our vehicles are well-maintained, air-conditioned, and regularly serviced to ensure
                            your comfort throughout the journey. We have a fleet of sedans, SUVs, and tempo travelers to
                            suit different group sizes.
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div
                        class="faq-item border-2 border-gray-200 rounded-lg px-6 hover:border-primary/30 transition-colors">
                        <button
                            class="faq-trigger w-full py-4 text-left font-semibold hover:text-primary flex items-center justify-between">
                            <span>Do you provide pick-up and drop services from airports?</span>
                            <svg class="faq-icon h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden pb-4 text-muted-foreground leading-relaxed">
                            Yes, we provide reliable airport transfer services from Ahmedabad Airport and Bhuj Airport to
                            Rann of Kutch. Our drivers will meet you at the arrival terminal with a name board for easy
                            identification.
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div
                        class="faq-item border-2 border-gray-200 rounded-lg px-6 hover:border-primary/30 transition-colors">
                        <button
                            class="faq-trigger w-full py-4 text-left font-semibold hover:text-primary flex items-center justify-between">
                            <span>What are your payment options?</span>
                            <svg class="faq-icon h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden pb-4 text-muted-foreground leading-relaxed">
                            We accept multiple payment methods including cash, UPI, bank transfer, and online payment. A
                            small advance payment may be required at the time of booking to confirm your reservation.
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div
                        class="faq-item border-2 border-gray-200 rounded-lg px-6 hover:border-primary/30 transition-colors">
                        <button
                            class="faq-trigger w-full py-4 text-left font-semibold hover:text-primary flex items-center justify-between">
                            <span>Can I make stops during the journey?</span>
                            <svg class="faq-icon h-5 w-5 transition-transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden pb-4 text-muted-foreground leading-relaxed">
                            Yes, for outstation and multi-day trips, you can request stops at various tourist attractions,
                            restaurants, or rest areas. Our drivers are familiar with the route and can suggest good spots
                            for breaks and sightseeing.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-muted-foreground mb-4">Still have questions?</p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-8 py-3 border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white hover:border-primary transition-colors text-lg font-medium">
                    Contact Us
                </a>
            </div>
        </div>
    </section>


    <!-- Modal for Booking (Hidden by default) -->
    <div id="booking-modal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-3 sm:p-4 overflow-y-auto">
        <div class="bg-white rounded-lg max-w-md w-full p-4 sm:p-6 my-4 animate-fade-in max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-start mb-3 sm:mb-4">
                <h3 class="text-xl sm:text-2xl font-bold pr-2" id="modal-title">Book Your Taxi</h3>
                <button onclick="closeBookingModal()" class="text-gray-500 hover:text-gray-700 flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <p class="text-xs sm:text-sm text-muted-foreground mb-3 sm:mb-4">Fill in your journey details and we'll get back to you shortly</p>

            <form id="cabbookingmodalform" method="post" action="{{ route('confirm-booking') }}"
                class="space-y-3 sm:space-y-4 service-form">
                @csrf
                <input type="hidden" name="trip_type" value="one-way" />
                <input type="hidden" name="form" value="modal-from" />
                <input type="hidden" name="car_type" id="car_type">
                <div id="source_ids-error-oneway" class="error text-danger" style="display:none;">Please
                    select pickup city</div>

                <!-- Pickup -->
                <div class="space-y-1.5 sm:space-y-2 relative">
                    <label class="flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm font-medium">
                        <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Pickup Location *</span>
                    </label>
                    <input type="text" id="source_id" name="source_id" placeholder="Enter pickup location"
                        required
                        class="w-full px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:border-primary source_id">
                    <input type="hidden" name="source_ids" id="source_ids_hidden" class="source_ids_hidden"
                        value="">
                    <div class="dropdown-menu sourceSuggestions" role="listbox"></div>
                    <label id="source_id-error" class="error text-danger text-xs sm:text-sm" for="source_id"></label>
                    <label id="source_ids_hidden-error" class="error text-danger text-xs sm:text-sm" for="source_ids_hidden"></label>
                </div>

                <!-- Drop-off -->
                <div class="space-y-1.5 sm:space-y-2 relative">
                    <div id="destination_ids-error-oneway" class="error text-danger text-xs sm:text-sm" style="display:none;">Please
                        select drop city</div>
                    <label class="flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm font-medium">
                        <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1 1 0 01-1.414 0L7.9 16.657A8 8 0 1117.657 16.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Drop-off Location *</span>
                    </label>
                    <input type="text" id="destination_id" name="destination_id"
                        placeholder="Enter drop-off location" required
                        class="w-full px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:border-primary destination_id">
                    <div class="dropdown-menu destinationSuggestions" role="listbox"></div>
                    <input type="hidden" name="destination_ids" id="destination_ids_hidden"
                        class="destination_ids_hidden" value="">
                    <label id="destination_id-error" class="error text-danger text-xs sm:text-sm" for="destination_id"></label>
                    <label id="destination_ids_hidden-error" class="error text-danger text-xs sm:text-sm"
                        for="destination_ids_hidden"></label>
                </div>

                <!-- Phone -->
                <div class="space-y-1.5 sm:space-y-2">
                    <label class="flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm font-medium">
                        <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28l1.498 4.493-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257 4.493 1.498V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Phone Number *
                    </label>
                    <input type="tel" name="mobile" placeholder="9724382302" required maxlength="10"
                        minlength="10"
                        class="w-full px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                </div>

                <!-- Date -->
                <div class="space-y-1.5 sm:space-y-2">
                    <label class="flex items-center gap-1.5 sm:gap-2 text-xs sm:text-sm font-medium">
                        <svg class="h-3.5 w-3.5 sm:h-4 sm:w-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Journey Date
                    </label>
                    <input type="date" name="pickup_date"
                        class="w-full px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                </div>

                <button type="submit"
                    class="w-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors btn-shine font-medium">
                    Get Quote for One Way
                </button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/live-search.js') }}"></script>
    <script>
        // Carousel
        let currentSlide = 0;
        const slides = document.querySelectorAll('#carousel-track > div');
        const totalSlides = slides.length;
        const carouselTrack = document.getElementById('carousel-track');

        function updateCarousel() {
            carouselTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        // Auto-play carousel
        setInterval(nextSlide, 4000);

        // Tab Switching
        function switchTab(tabName) {
            // tab styles
            const tabs = document.querySelectorAll('.tab-btn');
            tabs.forEach(tab => {
                const active = tab.dataset.tab === tabName;
                tab.classList.toggle('border-primary', active);
                tab.classList.toggle('text-primary', active);
                tab.classList.toggle('border-transparent', !active);
            });

            // forms
            const forms = document.querySelectorAll('.service-form');
            forms.forEach(f => f.classList.add('hidden'));

            const form = document.getElementById('form-' + tabName);
            if (form) form.classList.remove('hidden');
        }

        // Booking Form Submission
        function handleBookingSubmit(event) {
            event.preventDefault();

            const phone = document.getElementById('phone').value;
            const pickup = document.getElementById('pickup').value;
            const dropoff = document.getElementById('dropoff').value;
            const date = document.getElementById('date').value;
            const serviceType = document.getElementById('service-type').value;

            if (!phone || !pickup) {
                alert('Please fill in all required fields including phone number');
                return;
            }

            // For Laravel: This would redirect to your Laravel route
            // window.location.href = '/contact?phone=' + phone + '&pickup=' + pickup + '&dropoff=' + dropoff + '&date=' + date + '&type=' + serviceType;

            alert('Success! Redirecting to booking page...');
            console.log({
                phone,
                pickup,
                dropoff,
                date,
                serviceType
            });
        }

        // Modal Functions
        let selectedTaxi = '';

        function openBookingModal(taxiName) {
            selectedTaxi = taxiName;
            document.getElementById('modal-title').textContent = 'Book Your ' + taxiName;
            document.getElementById('car_type').value = taxiName;
            document.getElementById('booking-modal').classList.remove('hidden');
            document.getElementById('booking-modal').classList.add('flex');
        }

        function closeBookingModal() {
            const bookingModal = document.getElementById('booking-modal');
            bookingModal.classList.add('hidden');
            bookingModal.classList.remove('flex');

            // Dispatch custom event when modal is hidden (similar to Bootstrap's hidden.bs.modal)
            const hiddenEvent = new CustomEvent('hidden.bs.modal', {
                bubbles: true,
                cancelable: true
            });
            bookingModal.dispatchEvent(hiddenEvent);
        }

        function handleModalBooking(event) {
            event.preventDefault();
            alert('Booking request received for ' + selectedTaxi + '! We\'ll contact you shortly.');
            closeBookingModal();
        }

        // Close modal on outside click
        const bookingModal = document.getElementById('booking-modal');
        if (bookingModal) {
            bookingModal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeBookingModal();
                }
            });

            // Reset form when modal is hidden (similar to Bootstrap's hidden.bs.modal event)
            bookingModal.addEventListener('hidden.bs.modal', function() {
                const modalForm = document.getElementById('cabbookingmodalform');
                if (modalForm) {
                    modalForm.reset();
                    // Clear any validation errors
                    const errorLabels = modalForm.querySelectorAll('.error');
                    errorLabels.forEach(label => {
                        label.textContent = '';
                        label.style.display = 'none';
                    });
                    // Clear hidden fields except trip_type and form
                    const hiddenFields = modalForm.querySelectorAll('input[type="hidden"]:not([name="trip_type"]):not([name="form"])');
                    hiddenFields.forEach(field => {
                        field.value = '';
                    });
                    // Clear dropdown suggestions
                    const suggestionMenus = modalForm.querySelectorAll('.dropdown-menu');
                    suggestionMenus.forEach(menu => {
                        menu.innerHTML = '';
                    });
                }
            });

            // Close modal on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !bookingModal.classList.contains('hidden')) {
                    closeBookingModal();
                }
            });
        }

        // FAQ Accordion Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqTriggers = document.querySelectorAll('.faq-trigger');

            faqTriggers.forEach(trigger => {
                trigger.addEventListener('click', function() {
                    const faqItem = this.closest('.faq-item');
                    const faqContent = faqItem.querySelector('.faq-content');
                    const faqIcon = faqItem.querySelector('.faq-icon');
                    const isOpen = !faqContent.classList.contains('hidden');

                    // Close all FAQ items
                    document.querySelectorAll('.faq-item').forEach(item => {
                        const content = item.querySelector('.faq-content');
                        const icon = item.querySelector('.faq-icon');
                        content.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    });

                    // Toggle current FAQ item
                    if (isOpen) {
                        faqContent.classList.add('hidden');
                        faqIcon.style.transform = 'rotate(0deg)';
                    } else {
                        faqContent.classList.remove('hidden');
                        faqIcon.style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>
@endsection
