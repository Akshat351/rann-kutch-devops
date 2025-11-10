  @extends('layouts.front')
  @section('styles')
    <!-- Schema Markup -->
    <script type="application/ld+json">
       {!! $trip->schema !!}
    </script>
  @endsection
  @section('content')
      <!-- Breadcrumbs -->
      <div class="border-b py-4 bg-secondary/30">
          <div class="container mx-auto px-4">
              <nav class="flex items-center gap-2 text-sm text-muted-foreground">
                  <a href="{{ route('home') }}" class="hover:text-primary">Home</a>
                  <span>/</span>

                  <span class="text-gray-900">{{ $trip->source->name }} to {{ $trip->destination->name }} Taxi </span>
              </nav>
          </div>
      </div>

      <!-- Hero -->
      <section class="py-12 md:py-16">
          <div class="container mx-auto px-4">
              <div class="grid md:grid-cols-2 gap-8 items-center">
                  <div class="space-y-6">
                      <div class="flex flex-wrap gap-2">
                          @php
                              $distance = $trip->distance ?? 0;
                              $avgSpeed = 60; // km per hour
                              $hours = $distance / $avgSpeed;
                              $minHours = round($hours * 0.9, 1);
                              $maxHours = round($hours * 1.1, 1);
                          @endphp
                          <span
                              class="inline-flex items-center px-3 py-1 rounded-full text-white bg-primary text-sm">~{{ $trip->distance }}
                              km</span>
                          <span class="inline-flex items-center px-3 py-1 rounded-full border text-sm">{{ $minHours }} -
                              {{ $maxHours }} hours</span>
                          {{-- <span class="inline-flex items-center px-3 py-1 rounded-full border text-sm">Best: Nov–Feb</span> --}}
                      </div>
                      <h1 class="text-4xl md:text-5xl font-bold">{{ $trip->source->name }} to {{ $trip->destination->name }}
                          Taxi Service</h1>
                      <p class="text-xl text-muted-foreground">
                          Experience a comfortable and scenic journey from {{ $trip->source->name }} to the magnificent
                          {{ $trip->destination->name }}.
                          Our reliable taxi service ensures a safe and memorable trip through Gujarat's desert landscape.
                      </p>
                      <div class="flex flex-col sm:flex-row gap-4">
                          <a href="{{ route('contact') }}" class="btn-shine px-8 py-3 rounded-lg text-center">Book This
                              Route</a>
                          <a href="tel:{{ config('settings.tel_code') }}"
                              class="px-8 py-3 rounded-lg border-2 border-orange-600 text-orange-600 text-center hover:bg-orange-50">Call
                              for Quote</a>
                      </div>
                  </div>
                  <div class="relative h-[400px] rounded-2xl overflow-hidden">
                      <img src="{{ asset('assets/rann-aerial-wKb3yTaq.jpg') }}"
                          alt="{{ $trip->source->name }} to {{ $trip->destination->name }} taxi route"
                          class="w-full h-full object-cover" />
                  </div>
              </div>
          </div>
      </section>

      <!-- Route Details -->
      <section class="py-12 md:py-16">
          <div class="container mx-auto px-4">
              <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">
                  Trip Summary — {{ $trip->source->name }} → {{ $trip->destination->name }}
              </h2>

              @php
                  $isRound = isset($trip->trip_type) && str_contains(strtolower($trip->trip_type), 'round');
                  $etaGuess = $trip->distance ? max(1, ceil($trip->distance / 55)) : null; // simple fallback
              @endphp

              <div class="grid md:grid-cols-3 gap-6">
                  <!-- Summary -->
                  <div class="bg-white border rounded-xl p-6">
                      <h3 class="font-semibold text-xl mb-3">Route Details</h3>
                      <ul class="space-y-2 text-muted-foreground">
                          <li><strong>Route:</strong> {{ $trip->source->name }} → {{ $trip->destination->name }}</li>
                          <li><strong>Distance:</strong> {{ number_format($trip->distance ?? 0, 0) }} km</li>
                          <li><strong>Estimated Duration:</strong> {{ $maxHours }}</li>
                      </ul>

                      <a href="https://wa.me/{{ config('settings.whatsapp_number') ?? '919999999999' }}?text=Hi! I want a taxi quote for {{ $trip->source->name }} to {{ $trip->destination->name }}"
                          target="_blank"
                          class="mt-5 inline-flex w-full items-center justify-center gap-2 bg-green-500 text-white font-medium py-2.5 rounded-lg hover:bg-green-600 transition-colors">
                          <svg class="w-5 h-5 fill-current" viewBox="0 0 32 32">
                              <path
                                  d="M16.04 3C9.39 3 4 8.39 4 15.04c0 2.66.88 5.12 2.36 7.15L4 29l6.98-2.31a12.03 12.03 0 005.06 1.09c6.65 0 12.04-5.39 12.04-12.04S22.69 3 16.04 3zm0 22.1a9.99 9.99 0 01-5.1-1.39l-.36-.21-4.15 1.37 1.36-4.05-.24-.37A10.08 10.08 0 016.04 15c0-5.53 4.47-10 10-10s10 4.47 10 10-4.47 10.1-10 10.1zm5.68-7.57c-.31-.16-1.83-.9-2.11-1.01-.28-.1-.48-.15-.68.16-.2.31-.78 1.01-.96 1.22-.18.2-.36.23-.67.08-.31-.16-1.31-.48-2.49-1.54a9.36 9.36 0 01-1.73-2.14c-.18-.31 0-.47.13-.63.14-.15.31-.36.46-.54.15-.18.2-.31.31-.52.1-.2.05-.38-.03-.54-.08-.16-.68-1.63-.93-2.23-.24-.57-.48-.49-.67-.5l-.57-.01a1.1 1.1 0 00-.8.37c-.28.3-1.06 1.03-1.06 2.52 0 1.48 1.09 2.9 1.24 3.1.15.2 2.14 3.27 5.2 4.58.73.32 1.3.51 1.75.65.74.23 1.4.2 1.92.12.59-.09 1.83-.75 2.1-1.48.26-.73.26-1.35.18-1.48-.08-.13-.28-.21-.59-.37z" />
                          </svg>
                          Chat on WhatsApp
                      </a>

                      <p class="text-xs text-muted-foreground mt-2">
                          * Instant WhatsApp quote available for your selected route.
                      </p>
                  </div>


                  <!-- Included / Excluded -->
                  <div class="bg-white border rounded-xl p-6">
                      <h3 class="font-semibold text-xl mb-3">What’s Included</h3>
                      <ul class="list-disc pl-5 space-y-2 text-muted-foreground">
                          <li>Private AC cab (clean & sanitized)</li>
                          <li>Professional driver</li>
                          <li>Fuel for planned route</li>
                          <li>Standard pickup wait time</li>
                      </ul>
                      <h3 class="font-semibold text-xl mt-6 mb-3">What’s Extra</h3>
                      <ul class="list-disc pl-5 space-y-2 text-muted-foreground">
                          <li>Toll, parking, state tax (as applicable)</li>
                          <li>Night allowance (if 10 PM – 6 AM)</li>
                          <li>Detours / extra km beyond plan</li>
                          <li>Entry fees & activities</li>
                      </ul>
                  </div>

                  <!-- Notes -->
                  <div class="bg-white border rounded-xl p-6">
                      <h3 class="font-semibold text-xl mb-3">Good to Know</h3>
                      <ul class="list-disc pl-5 space-y-2 text-muted-foreground">
                          <li>Flexible halts for meals & restrooms</li>
                          <li>Peak season demand during festivals & full-moon nights</li>
                          <li>Free reschedule within the same day (subject to availability)</li>
                          <li>Share pickup time & luggage to get the most accurate quote</li>
                      </ul>
                      @if (!empty($trip->sort_description))
                          <p class="mt-4 text-sm text-muted-foreground">{{ $trip->sort_description }}</p>
                      @endif
                  </div>
              </div>
          </div>
      </section>

      <!-- Vehicle Showcase (cards + modal) -->
      <section class="py-12 md:py-16">
          <div class="container mx-auto px-4">
              <div class="max-w-6xl mx-auto space-y-8">
                  <div class="text-center space-y-4">
                      <h2 class="text-3xl md:text-4xl font-bold">Choose Your Vehicle</h2>
                      <p class="text-muted-foreground max-w-2xl mx-auto">
                          Select from our fleet of well-maintained vehicles. Prices include fuel, driver allowance, tolls,
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
                          <div class="pt-2 border-t mb-4">
                              <p class="text-sm text-muted-foreground">Starting from</p>
                              <p class="text-2xl font-bold text-primary">₹{{ $trip->mini }}</p>
                              <p class="text-xs text-muted-foreground">One way</p>
                          </div>
                          <button type="button"
                              class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                              data-id="Mini"
                              data-trip="{{ isset($userRequest['trip_type']) ? $userRequest['trip_type'] : 'one-way' }}"
                              data-price="{{ intval($trip->mini ?? 0) }}">
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
                          <div class="pt-2 border-t mb-4">
                              <p class="text-sm text-muted-foreground">Starting from</p>
                              <p class="text-2xl font-bold text-primary">₹{{ $trip->sedan }}</p>
                              <p class="text-xs text-muted-foreground">One way</p>
                          </div>
                          <button type="button"
                              class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                              data-id="Sedan"
                              data-trip="{{ isset($userRequest['trip_type']) ? $userRequest['trip_type'] : 'one-way' }}"
                              data-price="{{ intval($trip->sedan ?? 0) }}">
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
                          <div class="pt-2 border-t mb-4">
                              <p class="text-sm text-muted-foreground">Starting from</p>
                              <p class="text-2xl font-bold text-primary">₹{{ $trip->ertiga }}</p>
                              <p class="text-xs text-muted-foreground">One way</p>
                          </div>
                          <button type="button"
                              class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                              data-id="Ertiga"
                              data-trip="{{ isset($userRequest['trip_type']) ? $userRequest['trip_type'] : 'one-way' }}"
                              data-price="{{ intval($trip->ertiga ?? 0) }}">
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
                          <div class="pt-2 border-t mb-4">
                              <p class="text-sm text-muted-foreground">Starting from</p>
                              <p class="text-2xl font-bold text-primary">₹{{ $trip->innova }}</p>
                              <p class="text-xs text-muted-foreground">One way</p>
                          </div>
                          <button type="button"
                              class="cab-open w-full border-2 border-orange-600 text-orange-600 py-2 rounded-lg hover:bg-orange-50"
                              data-id="Innova"
                              data-trip="{{ isset($userRequest['trip_type']) ? $userRequest['trip_type'] : 'one-way' }}"
                              data-price="{{ intval($trip->innova ?? 0) }}">
                              Book Now
                          </button>
                      </div>

                  </div>
              </div>
          </div>
      </section>


      <!-- Journey Overview -->
      <section class="py-12 md:py-16 desert-gradient">
          <div class="container mx-auto px-4">
              <div class="max-w-4xl mx-auto space-y-6">
                  <div
                      class="max-w-none
         [&_*]:my-3
         [&_h1]:text-4xl md:[&_h1]:text-5xl [&_h1]:font-bold
         [&_h2]:text-3xl md:[&_h2]:text-4xl [&_h2]:font-bold
         [&_h3]:text-2xl md:[&_h3]:text-3xl [&_h3]:font-semibold
         [&_h4]:text-xl md:[&_h4]:text-2xl [&_h4]:font-semibold
         [&_p]:text-lg [&_p]:text-muted-foreground
         [&_strong]:text-foreground
         [&_ul]:list-disc [&_ul]:pl-6
         [&_ol]:list-decimal [&_ol]:pl-6
         [&_a]:text-primary hover:[&_a]:underline
         [&_img]:rounded-xl [&_img]:mx-auto
         [&_blockquote]:border-l-4 [&_blockquote]:pl-4 [&_blockquote]:italic">
                      @if (isset($trip->description))
                          {!! $trip->description !!}
                      @else
                          <h2 class="text-3xl md:text-4xl font-bold">Journey Overview</h2>
                          <p class="text-lg"> The journey from <strong>{{ $trip->source->name }} to
                                  {{ $trip->destination->name }}</strong> offers a scenic blend of urban charm, rural
                              landscapes, and cultural richness. As you begin your trip from {{ $trip->source->name }},
                              you'll
                              gradually witness the transition from city life to peaceful countryside, open desert roads,
                              and
                              traditional villages. </p>
                          <p class="text-lg text-muted-foreground"> This route is popular among travelers heading towards
                              {{ $trip->destination->name }} for tourism, relaxation, photography, and cultural
                              experiences.
                              From local handicrafts to unique desert landscapes, this journey gives you a taste of
                              Gujarat’s
                              heritage and natural beauty. </p>
                          <p class="text-lg"> With <strong>Rann of Kutch Taxi</strong>, your travel becomes smooth,
                              stress-free,
                              and enjoyable. Our trained chauffeurs ensure safe driving, helpful guidance, and comfortable
                              travel for families, couples, solo explorers, and corporate travelers. Sit back and enjoy a
                              reliable ride to your destination. </p>
                          <p class="text-lg text-muted-foreground"> Along the way, you may pass historic towns, artisan
                              hubs,
                              local food joints, and picturesque viewpoints — making the trip from
                              <strong>{{ $trip->source->name }} to {{ $trip->destination->name }}</strong> not just
                              transportation, but a memorable road journey.
                          </p>
                          <h3 class="text-2xl md:text-3xl font-bold">✨ What to Expect on This Route</h3>
                          <ul class="list-disc pl-6 text-lg">
                              <li>Comfortable long-distance travel experience</li>
                              <li>Smooth highways and scenic countryside roads</li>
                              <li>Experienced, courteous & local expert drivers</li>
                              <li>Clean cars with AC, luggage space & safety features</li>
                              <li>Flexible stops for refreshment, photography & sightseeing</li>
                          </ul>
                          <p class="text-lg text-muted-foreground"> Whether it’s a quick city-to-city transfer or a full
                              sightseeing journey, we make sure your ride from {{ $trip->source->name }} to
                              {{ $trip->destination->name }} is efficient, safe, and comfortable. </p>
                          <h3 class="text-2xl md:text-3xl font-bold">📞 Book Your Route</h3>
                          <p class="text-lg"> Ready to travel from <strong>{{ $trip->source->name }} to
                                  {{ $trip->destination->name }}</strong>? Book your cab today and enjoy a seamless travel
                              experience with <strong>Rann of Kutch Taxi</strong>. </p>
                          <h3 class="text-2xl md:text-3xl font-bold mt-6">🌄 A Scenic Drive From {{ $trip->source->name }}
                              to
                              {{ $trip->destination->name }}</h3>
                          <p class="text-lg"> The route from <strong>{{ $trip->source->name }} to
                                  {{ $trip->destination->name }}</strong> is known for its smooth highways, traditional
                              villages, and scenic stretches that showcase the true spirit of Gujarat. As you travel, lush
                              farmlands, heritage settlements, and peaceful landscapes accompany you throughout the journey,
                              making it perfect for both leisure and photography. </p>
                          <p class="text-lg text-muted-foreground"> Whether you’re visiting for tourism, a weekend retreat,
                              business travel, or family vacation, this trip offers a refreshing escape from routine life.
                              With
                              comfortable seats, clean interiors, and experienced drivers, <strong>Rann of Kutch
                                  Taxi</strong>
                              ensures you enjoy every moment on the road. </p>
                          <h3 class="text-2xl md:text-3xl font-bold mt-6">🕌 What Makes This Route Special?</h3>
                          <p class="text-lg"> The journey from <strong>{{ $trip->source->name }} to
                                  {{ $trip->destination->name }}</strong> reflects the cultural and natural beauty of the
                              region. Depending on your path, you may pass traditional craft villages, ancient temples, food
                              spots, desert viewpoints, and markets that highlight the rich heritage of Gujarat. </p>
                          <ul class="list-disc pl-6 text-lg">
                              <li>Opportunity to explore local food and snacks on the way</li>
                              <li>Unique cultural attractions & historical points en-route</li>
                              <li>Peaceful village roads & scenic countryside views</li>
                              <li>Chance to shop for handicrafts, textiles, and souvenirs</li>
                          </ul>
                          <p class="text-lg text-muted-foreground"> Our drivers also guide you towards recommended food
                              joints,
                              clean rest stops, and photography spots to enhance your travel experience. </p>
                          <h3 class="text-2xl md:text-3xl font-bold mt-6">🚕 Travel With Comfort & Convenience</h3>
                          <p class="text-lg"> At <strong>Rann of Kutch Taxi</strong>, we believe every journey should be
                              relaxing and memorable. Our service is crafted to provide a premium travel experience at
                              budget-friendly pricing — ensuring you reach <strong>{{ $trip->destination->name }}</strong>
                              safely, comfortably, and on time. </p>
                          <ul class="list-disc pl-6 text-lg">
                              <li>AC taxis with clean & sanitized interiors</li>
                              <li>Experienced drivers with route expertise</li>
                              <li>Flexible pickup & drop timing</li>
                              <li>Transparent pricing & no hidden charges</li>
                              <li>Stop anywhere for sightseeing or meals</li>
                          </ul>
                          <p class="text-lg text-muted-foreground"> From short road trips to long-distance travel, our taxis
                              are
                              ideal for families, couples, solo travelers, and groups. </p>
                          <h3 class="text-2xl md:text-3xl font-bold mt-6">📍 Start Your Trip Today</h3>
                          <p class="text-lg"> Ready to begin your journey from <strong>{{ $trip->source->name }} to
                                  {{ $trip->destination->name }}</strong>? Book your taxi with us and travel worry-free
                              with
                              comfort, reliability, and full support throughout the ride. </p>
                      @endif
                  </div>
              </div>
      </section>

      <!-- Our Taxi Service for this Route -->
      <section class="py-12 md:py-16 desert-gradient">
          <div class="container mx-auto px-4">
              <div class="max-w-4xl mx-auto space-y-8">
                  <h2 class="text-3xl md:text-4xl font-bold text-center">Our Taxi Service for This Route</h2>

                  <div class="grid md:grid-cols-3 gap-6">
                      <div class="bg-white border rounded-lg p-6 card-hover">
                          <svg class="w-10 h-10 text-primary mb-4" viewBox="0 0 24 24" fill="none"
                              stroke="currentColor">
                              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 13l2-2 4 4L21 5" />
                          </svg>
                          <h3 class="font-semibold text-lg mb-2">Vehicle Options</h3>
                          <ul class="text-sm text-muted-foreground space-y-2">
                              <li class="flex items-center gap-2">🚗 <span>Sedan – 4 passengers</span></li>
                              <li class="flex items-center gap-2">🚙 <span>SUV – 6–7 passengers</span></li>
                              <li class="flex items-center gap-2">🚐 <span>Innova – 7 passengers</span></li>
                              <li class="flex items-center gap-2">🚕 <span>Mini – 2–3 passengers</span></li>
                          </ul>

                      </div>

                      <div class="bg-white border rounded-lg p-6 card-hover">
                          <svg class="w-10 h-10 text-primary mb-4" viewBox="0 0 24 24" fill="none"
                              stroke="currentColor">
                              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 12l2 2 4-4M7 20h10a2 2 0 002-2V7" />
                          </svg>
                          <h3 class="font-semibold text-lg mb-2">What's Included</h3>
                          <ul class="text-sm text-muted-foreground space-y-1">
                              <li>• Driver allowance</li>
                              <li>• Fuel charges</li>
                              <li>• Toll & parking</li>
                              <li>• Insurance coverage</li>
                          </ul>
                      </div>

                      <div class="bg-white border rounded-lg p-6 card-hover">
                          <svg class="w-10 h-10 text-primary mb-4" viewBox="0 0 24 24" fill="none"
                              stroke="currentColor">
                              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 17l-5 3 1-5-4-4 5-.7L12 5l2 4.3 5 .7-4 4 1 5z" />
                          </svg>
                          <h3 class="font-semibold text-lg mb-2">Why Choose Us</h3>
                          <ul class="text-sm text-muted-foreground space-y-1">
                              <li>• Local driver expertise</li>
                              <li>• 24/7 support</li>
                              <li>• Flexible scheduling</li>
                              <li>• Transparent pricing</li>
                          </ul>
                      </div>
                  </div>

                  <div class="bg-white border rounded-lg p-6">
                      <h3 class="text-xl font-semibold mb-4">Service Options</h3>

                      <div class="space-y-4 text-muted-foreground">

                          <div>
                              <h4 class="font-semibold text-gray-900 mb-1">One-Way Service</h4>
                              Convenient drop-off at your destination in Rann of Kutch with no return journey — ideal for
                              travelers staying overnight or continuing onward plans.
                          </div>

                          <div>
                              <h4 class="font-semibold text-gray-900 mb-1">Round Trip / Return Service</h4>
                              Comfortable journey from Ahmedabad to the Rann and back, including waiting time for
                              sightseeing and overnight stay (1–2 days typical).
                          </div>

                          <div>
                              <h4 class="font-semibold text-gray-900 mb-1">Local Sightseeing</h4>
                              Explore the Rann of Kutch, Bhuj, Kalo Dungar, White Desert, handicraft villages & nearby
                              attractions with flexible hourly or full-day packages.
                          </div>

                          <div>
                              <h4 class="font-semibold text-gray-900 mb-1">Airport Pickup / Drop</h4>
                              Hassle-free taxi service from Ahmedabad Airport to Rann of Kutch or Bhuj Airport transfers —
                              timely & reliable for your travel plans.
                          </div>

                          <div>
                              <h4 class="font-semibold text-gray-900 mb-1">Multi-Day Holiday Packages</h4>
                              Complete Kutch tour including Rann, Mandvi Beach, Bhuj, wildlife sanctuaries & village
                              experiences — customizable + driver guidance.
                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </section>


      <!-- Safety & Quality -->
      <section class="py-12 md:py-16">
          <div class="container mx-auto px-4">
              <div class="max-w-4xl mx-auto space-y-8">
                  <h2 class="text-3xl md:text-4xl font-bold text-center">Safety & Quality Assurance</h2>

                  <div class="grid md:grid-cols-3 gap-6">
                      <div class="bg-white border rounded-lg p-6 text-center card-hover">
                          <svg class="w-12 h-12 text-primary mx-auto mb-3" viewBox="0 0 24 24" fill="none"
                              stroke="currentColor">
                              <path stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                          </svg>
                          <h3 class="font-semibold text-lg">Verified Drivers</h3>
                          <p class="text-sm text-muted-foreground">Background-checked, licensed, trained for desert
                              terrain.</p>
                      </div>

                      <div class="bg-white border rounded-lg p-6 text-center card-hover">
                          <svg class="w-12 h-12 text-primary mx-auto mb-3" viewBox="0 0 24 24" fill="none"
                              stroke="currentColor">
                              <path stroke-width="2" d="M3 13h18M5 10h14l1 3v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6l1-3z" />
                          </svg>
                          <h3 class="font-semibold text-lg">Well-Maintained Fleet</h3>
                          <p class="text-sm text-muted-foreground">Regular servicing, checks, and sanitization for comfort.
                          </p>
                      </div>

                      <div class="bg-white border rounded-lg p-6 text-center card-hover">
                          <svg class="w-12 h-12 text-primary mx-auto mb-3" viewBox="0 0 24 24" fill="none"
                              stroke="currentColor">
                              <path stroke-width="2" d="M12 8v4l3 3M12 22a10 10 0 110-20 10 10 0 010 20z" />
                          </svg>
                          <h3 class="font-semibold text-lg">24/7 Support</h3>
                          <p class="text-sm text-muted-foreground">Round-the-clock assistance and tracking.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Comprehensive Taxi Services -->
      <section class="py-12 md:py-16">
          <div class="container mx-auto px-4">
              <div class="max-w-6xl mx-auto space-y-12">
                  <h2 class="text-3xl md:text-4xl font-bold text-center mb-8"> Comprehensive Taxi Services </h2>
                  <div class="grid md:grid-cols-2 gap-8"> {{-- 🚗 From Source --}} @if ($fromSource->count())
                          <div class="bg-white border rounded-lg p-6 card-hover">
                              <div class="flex items-center gap-3 mb-4"> <svg class="w-8 h-8 text-primary"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                      <path stroke-width="2" d="M3 13h18" />
                                  </svg>
                                  <h3 class="text-2xl font-semibold"> Taxi from {{ $trip->source->name }} </h3>
                              </div>
                              <h4 class="font-semibold mb-2">Popular Destinations:</h4>
                              <ul class="text-sm text-muted-foreground space-y-1">
                                  @foreach ($fromSource as $t)
                                      <a href="{{ $t['slug'] }}" class="hover:text-orange-600 transition">
                                          <li>• {{ $t->source->name }} → {{ $t->destination->name }}</li>
                                      </a>
                                  @endforeach
                              </ul> <a href="{{ route('contact') }}"
                                  class="mt-4 inline-block w-full text-center px-4 py-2 rounded-lg bg-orange-600 text-white hover:bg-orange-700">
                                  Book Taxi from {{ $trip->source->name }} </a>
                          </div>
                          @endif {{-- 🚕 To Source --}} @if ($toSource->count())
                              <div class="bg-white border rounded-lg p-6 card-hover">
                                  <div class="flex items-center gap-3 mb-4"> <svg class="w-8 h-8 text-primary"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                          <path stroke-width="2" d="M3 11h18" />
                                      </svg>
                                      <h3 class="text-2xl font-semibold"> Taxi to {{ $trip->source->name }} </h3>
                                  </div>
                                  <h4 class="font-semibold mb-2">Popular Routes:</h4>
                                  <ul class="text-sm text-muted-foreground space-y-1">
                                      @foreach ($toSource as $t)
                                          <a href="{{ $t['slug'] }}" class="hover:text-orange-600 transition">
                                              <li>• {{ $t->source->name }} → {{ $t->destination->name }}</li>
                                          </a>
                                      @endforeach
                                  </ul> <a href="{{ route('contact') }}"
                                      class="mt-4 inline-block w-full text-center px-4 py-2 rounded-lg bg-orange-600 text-white hover:bg-orange-700">
                                      Book Taxi to {{ $trip->source->name }} </a>
                              </div>
                              @endif {{-- 🚙 From Destination --}} @if ($fromDestination->count())
                                  <div class="bg-white border rounded-lg p-6 card-hover">
                                      <div class="flex items-center gap-3 mb-4"> <svg class="w-8 h-8 text-primary"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                              <path stroke-width="2" d="M3 13h18" />
                                          </svg>
                                          <h3 class="text-2xl font-semibold"> Taxi from {{ $trip->destination->name }}
                                          </h3>
                                      </div>
                                      <h4 class="font-semibold mb-2">Available Routes:</h4>
                                      <ul class="text-sm text-muted-foreground space-y-1">
                                          @foreach ($fromDestination as $t)
                                              <a href="{{ $t['slug'] }}" class="hover:text-orange-600 transition">
                                                  <li>• {{ $t->source->name }} → {{ $t->destination->name }}</li>
                                              </a>
                                          @endforeach
                                      </ul> <a href="{{ route('contact') }}"
                                          class="mt-4 inline-block w-full text-center px-4 py-2 rounded-lg bg-orange-600 text-white hover:bg-orange-700">
                                          Book Taxi from {{ $trip->destination->name }} </a>
                                  </div>
                                  @endif {{-- 🚐 To Destination --}} @if ($toDestination->count())
                                      <div class="bg-white border rounded-lg p-6 card-hover">
                                          <div class="flex items-center gap-3 mb-4"> <svg class="w-8 h-8 text-primary"
                                                  viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                  <path stroke-width="2" d="M3 11h18" />
                                              </svg>
                                              <h3 class="text-2xl font-semibold"> Taxi to {{ $trip->destination->name }}
                                              </h3>
                                          </div>
                                          <h4 class="font-semibold mb-2">Popular Routes:</h4>
                                          <ul class="text-sm text-muted-foreground space-y-1">
                                              @foreach ($toDestination as $t)
                                                  <a href="{{ $t['slug'] }}" class="hover:text-orange-600 transition">
                                                      <li>• {{ $t->source->name }} → {{ $t->destination->name }}</li>
                                                  </a>
                                              @endforeach
                                          </ul> <a href="{{ route('contact') }}"
                                              class="mt-4 inline-block w-full text-center px-4 py-2 rounded-lg bg-orange-600 text-white hover:bg-orange-700">
                                              Book Taxi to {{ $trip->destination->name }} </a>
                                      </div>
                                  @endif
                  </div>
              </div>
          </div>
      </section>


      <!-- FAQ -->
      <section class="py-12 md:py-16 desert-gradient">
          <div class="container mx-auto px-4">
              <div class="max-w-4xl mx-auto">
                  <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Frequently Asked Questions</h2>

                  @if ($trip && $trip->faqs && $trip->faqs->count() > 0)
                      <div class="space-y-4" id="faqs">
                          @foreach ($trip->faqs as $index => $faq)
                              @php
                                  $isOpen = $loop->first; // first FAQ open by default
                                  $contentId = 'faq-content-' . $index;
                              @endphp

                              <div class="bg-white border rounded-lg overflow-hidden">
                                  <button
                                      class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger"
                                      aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
                                      aria-controls="{{ $contentId }}">
                                      <span>{{ $faq->question }}</span>
                                      <svg class="w-5 h-5 transition-transform {{ $isOpen ? 'rotate-180' : '' }}"
                                          fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                          <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                      </svg>
                                  </button>

                                  <div id="{{ $contentId }}"
                                      class="{{ $isOpen ? '' : 'hidden' }} px-6 pb-4 text-muted-foreground">
                                      {{-- If answers contain HTML, use {!! !!}. If plain text, use {{ }} --}}
                                      {!! $faq->answer !!}
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  @else
                      <div class="space-y-4">
                          <!-- 1 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  What services do you offer (One-Way, Round Trip, Local, Airport)?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  We provide One-Way drops, Round Trips, Local/Hourly rentals, and Airport transfers. Choose
                                  what fits your plan—no hidden route restrictions.
                              </div>
                          </div>

                          <!-- 2 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  What types of cars are available?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Hatchback, Sedan, SUV, and Tempo Traveller (on request). All vehicles are well-maintained
                                  with
                                  professional drivers.
                              </div>
                          </div>

                          <!-- 3 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  What’s included in the fare and what’s extra?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Base fare includes vehicle & driver charges. Tolls, parking, state tax, and entry fees are
                                  usually extra unless mentioned. For multi-day trips, driver allowance may apply.
                              </div>
                          </div>

                          <!-- 4 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Do you offer airport/hotel/home pickup and drop?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Yes, we pick up from Airport, Railway Station, hotels, and residences within city limits.
                                  Share exact location while booking.
                              </div>
                          </div>

                          <!-- 5 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  How early should I book my ride?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Regular days: 24–48 hours prior is ideal. Peak seasons, long weekends, and festivals: book
                                  3–7
                                  days in advance.
                              </div>
                          </div>

                          <!-- 6 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Can I add sightseeing stops or detours on the way?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Absolutely. Short halts are fine. For extended sightseeing or off-route detours,
                                  additional
                                  charges/time may apply.
                              </div>
                          </div>

                          <!-- 7 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  What about waiting charges and night allowances?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Waiting is free up to a grace period; beyond that, hourly rates apply. For
                                  late-night/overnight trips, a driver night allowance may be applicable.
                              </div>
                          </div>

                          <!-- 8 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  What is your cancellation and refund policy?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Free cancellation within a limited window after booking. Closer to the trip time, partial
                                  charges may apply. Exact terms are shared on the confirmation.
                              </div>
                          </div>

                          <!-- 9 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Which payment methods do you accept?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  UPI, net-banking, cards, and cash. A small advance may be required to confirm the booking;
                                  balance is payable to the driver or online.
                              </div>
                          </div>

                          <!-- 10 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Is there a luggage limit? Do you provide a roof carrier?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Standard luggage for your vehicle category is fine. For oversized items or roof carriers,
                                  inform us in advance (subject to availability and charges).
                              </div>
                          </div>

                          <!-- 11 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Do you provide child seats or booster seats?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Yes, available on prior request for select vehicles. Limited units—please mention during
                                  booking.
                              </div>
                          </div>

                          <!-- 12 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Are pets allowed in the cab?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Small pets are allowed in most vehicles with prior intimation. Please use a carrier and
                                  ensure
                                  the car remains clean.
                              </div>
                          </div>

                          <!-- 13 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  What if the vehicle breaks down or there’s an emergency?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  We arrange immediate assistance or a replacement vehicle (subject to
                                  location/availability)
                                  and keep you updated throughout.
                              </div>
                          </div>

                          <!-- 14 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Can I get a GST invoice or business receipt?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Yes, GST invoices/receipts are provided on request. Share your GST details while
                                  confirming
                                  the booking.
                              </div>
                          </div>

                          <!-- 15 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  Do drivers speak local/English/Hindi? Are they verified?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Drivers are verified, experienced, and typically speak Hindi and local language;
                                  English-speaking drivers available on request.
                              </div>
                          </div>

                          <!-- 16 -->
                          <div class="bg-white border rounded-lg overflow-hidden">
                              <button
                                  class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center faq-trigger">
                                  What are the km/day limits for multi-day outstation trips?
                                  <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor"
                                      viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                              <div class="hidden px-6 pb-4 text-muted-foreground">
                                  Packages usually include a fixed km/day (e.g., 300 km/day for SUV). Extra km/time is
                                  charged
                                  as per the selected vehicle.
                              </div>
                          </div>
                      </div>
                  @endif
              </div>
          </div>
      </section>

      <!-- Popular Routes in Gujarat -->
      {{-- <section class="py-12 md:py-16">
          <div class="container mx-auto px-4">
              <div class="max-w-6xl mx-auto space-y-8">
                  <div class="text-center space-y-2">
                      <h2 class="text-3xl md:text-4xl font-bold">Popular Travel Routes in Gujarat</h2>
                      <p class="text-muted-foreground">Explore more destinations with our reliable taxi service</p>
                  </div>

                  <div class="grid md:grid-cols-3 gap-6">
                      <!-- Each route card -->
                      <a href="/routes/bhuj-to-rann" class="group">
                          <div class="bg-white border rounded-lg p-6 card-hover h-full">
                              <div class="mb-2 text-primary flex items-center gap-2">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z" />
                                  </svg>
                                  <h3 class="font-semibold text-lg group-hover:text-primary">Bhuj ↔ Rann of Kutch</h3>
                              </div>
                              <p class="text-sm text-muted-foreground">~80 km • 1.5–2 hours</p>
                              <p class="text-sm">Shortest route to White Rann from nearest city.</p>
                              <span class="inline-flex items-center text-sm text-primary pt-2">
                                  View Details
                                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M9 5l7 7-7 7" />
                                  </svg>
                              </span>
                          </div>
                      </a>

                      <a href="/routes/rajkot-to-rann" class="group">
                          <div class="bg-white border rounded-lg p-6 card-hover h-full">
                              <div class="mb-2 text-primary flex items-center gap-2">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z" />
                                  </svg>
                                  <h3 class="font-semibold text-lg group-hover:text-primary">Rajkot ↔ Rann of Kutch</h3>
                              </div>
                              <p class="text-sm text-muted-foreground">~250 km • 4–5 hours</p>
                              <p class="text-sm">Good road connectivity and hotels.</p>
                              <span class="inline-flex items-center text-sm text-primary pt-2">
                                  View Details
                                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M9 5l7 7-7 7" />
                                  </svg>
                              </span>
                          </div>
                      </a>

                      <a href="/routes/rann-to-mandvi" class="group">
                          <div class="bg-white border rounded-lg p-6 card-hover h-full">
                              <div class="mb-2 text-primary flex items-center gap-2">
                                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z" />
                                  </svg>
                                  <h3 class="font-semibold text-lg group-hover:text-primary">Rann of Kutch ↔ Mandvi</h3>
                              </div>
                              <p class="text-sm text-muted-foreground">~140 km • 2.5 hours</p>
                              <p class="text-sm">Desert + beach combo; Vijay Vilas Palace.</p>
                              <span class="inline-flex items-center text-sm text-primary pt-2">
                                  View Details
                                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-width="2" d="M9 5l7 7-7 7" />
                                  </svg>
                              </span>
                          </div>
                      </a>

                      <!-- Add more if needed to mirror your app list -->
                  </div>

                  <div class="text-center pt-6">
                      <p class="text-muted-foreground mb-4">Don’t see your route? We cover all destinations across Gujarat.
                      </p>
                      <a href="/contact" class="inline-block px-8 py-3 rounded-lg border hover:bg-gray-50">Request Custom
                          Route</a>
                  </div>
              </div>
          </div>
      </section> --}}

      <!-- Final CTA -->
      <section class="py-16 hero-gradient text-white">
          <div class="container mx-auto px-4">
              <div class="max-w-3xl mx-auto text-center space-y-6">
                  <h2 class="text-3xl md:text-4xl font-bold">Ready to Book Your Journey?</h2>
                  <p class="text-xl text-white/90">
                      Experience the magic of the Rann of Kutch with our reliable taxi service. Contact us now for quotes
                      and availability.
                  </p>
                  <div class="flex flex-col sm:flex-row gap-4 justify-center">
                      <a href="{{ route('contact') }}"
                          class="px-8 py-3 rounded-lg bg-white text-orange-600 hover:bg-gray-100">Book
                          Now</a>
                      <a href="tel:{{ config('settings.tel_code') }}"
                          class="px-8 py-3 rounded-lg border border-white/20 bg-white/10 hover:bg-white/20">Call:
                          {{ config('settings.mobile') }}</a>
                  </div>
              </div>
          </div>
      </section>

      <!-- Modal for Booking (Hidden by default) -->
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
                      <h3 class="text-lg font-semibold">Cab Booking</h3>
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
                          class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          @csrf
                          <input type="hidden" name="car_type" id="modalCabType">
                          <input type="hidden" name="price" id="modalPrice">
                          <input type="hidden" name="trip_type" id="modalTripType">

                          <!-- keep your existing fields exactly as before -->
                          <input type="hidden" name="source_id" value="{{ $trip->source_id }}">
                          <input type="hidden" name="destination_id" value="{{ $trip->destination_id }}">

                          <div>
                              <label class="block text-sm font-medium mb-1">Pickup Address</label>
                              <input type="text" class="w-full rounded-lg border px-3 py-2"
                                  value="{{ $trip->source->name }}" readonly>
                          </div>

                          <div>
                              <label class="block text-sm font-medium mb-1">Drop Address</label>
                              <input type="text" class="w-full rounded-lg border px-3 py-2"
                                  value="{{ $trip->destination->name }}" readonly>
                          </div>

                          <div>
                              <label class="block text-sm font-medium mb-1">Name</label>
                              <input type="text" name="name" class="w-full rounded-lg border px-3 py-2"
                                  placeholder="Enter your name" value="{{ old('name') }}">
                              <span id="name-error" class="text-xs text-red-600"></span>
                          </div>

                          <div>
                              <label class="block text-sm font-medium mb-1">Mobile number</label>
                              <input type="text" name="mobile" class="w-full rounded-lg border px-3 py-2"
                                  placeholder="Enter your mobile number"
                                  value="{{ $userRequest['mobile'] ?? old('mobile') }}" minlength="10" maxlength="10">
                          </div>

                          <div>
                              <label class="block text-sm font-medium mb-1">PickUp Date</label>
                              <input type="date" name="pickup_date" id="pickup_date"
                                  class="w-full rounded-lg border px-3 py-2"
                                  value="{{ $userRequest['pickup_date'] ?? old('pickup_date') }}"
                                  min="{{ date('Y-m-d') }}">
                              <span id="pickup_date-error" class="text-xs text-red-600"></span>
                          </div>

                          <div>
                              <label class="block text-sm font-medium mb-1">PickUp Time</label>
                              <select name="pickup_time" id="pickup_time" class="w-full rounded-lg border px-3 py-2">
                                  <option value="">Select Time</option>
                                  <?php
                                  $start = strtotime('00:00');
                                  $end = strtotime('23:45');
                                  for ($time = $start; $time <= $end; $time += 15 * 60) {
                                      $value = date('H:i', $time);
                                      $label = date('h:i A', $time);
                                      $selected = old('pickup_time') == $value ? 'selected' : '';
                                      echo "<option value='{$value}' {$selected}>{$label}</option>";
                                  }
                                  ?>
                              </select>
                          </div>

                          <!-- Return fields: use Tailwind 'hidden' instead of Bootstrap 'd-none' -->
                          <div class="return-fields hidden">
                              <label class="block text-sm font-medium mb-1">Return Date</label>
                              <input type="date" name="return_date" id="return_date"
                                  class="w-full rounded-lg border px-3 py-2"
                                  value="{{ $userRequest['return_date'] ?? old('return_date') }}">
                              <span id="return_date-error" class="text-xs text-red-600"></span>
                          </div>

                          <div class="return-fields hidden">
                              <label class="block text-sm font-medium mb-1">Return Time</label>
                              <select name="return_time" id="return_time" class="w-full rounded-lg border px-3 py-2">
                                  <option value="">Select Time</option>
                                  <?php
                                  $start = strtotime('00:00');
                                  $end = strtotime('23:45');
                                  for ($time = $start; $time <= $end; $time += 15 * 60) {
                                      $value = date('H:i', $time);
                                      $label = date('h:i A', $time);
                                      $selected = old('return_time') == $value ? 'selected' : '';
                                      echo "<option value='{$value}' {$selected}>{$label}</option>";
                                  }
                                  ?>
                              </select>
                          </div>

                          <div class="md:col-span-2 text-right pt-2">
                              <button type="submit" class="rounded-lg bg-gray-900 text-white px-5 py-2.5 hover:bg-black">
                                  Confirm Booking
                              </button>
                          </div>
                      </form>
                  </div>

              </div>
          </div>
      </div>

  @endsection
  @section('scripts')
      <script>
          // --- FAQ accordion: only one open at a time ---
          const faqTriggers = document.querySelectorAll('.faq-trigger');

          faqTriggers.forEach(btn => {
              // a11y hint
              btn.setAttribute('aria-expanded', 'false');

              btn.addEventListener('click', () => {
                  const content = btn.nextElementSibling;
                  const icon = btn.querySelector('svg');
                  const wasOpen = !content.classList.contains('hidden');

                  // Close all
                  document.querySelectorAll('.faq-trigger + div').forEach(c => c.classList.add('hidden'));
                  document.querySelectorAll('.faq-trigger svg').forEach(s => s.classList.remove(
                      'rotate-180'));
                  faqTriggers.forEach(b => b.setAttribute('aria-expanded', 'false'));

                  // Open the clicked one only if it wasn't open
                  if (!wasOpen) {
                      content.classList.remove('hidden');
                      icon.classList.add('rotate-180');
                      btn.setAttribute('aria-expanded', 'true');
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
                  if (lock) {
                      document.documentElement.classList.add('overflow-y-hidden');
                      document.body.classList.add('overflow-y-hidden');
                  } else {
                      document.documentElement.classList.remove('overflow-y-hidden');
                      document.body.classList.remove('overflow-y-hidden');
                  }
              }

              function showModal() {
                  modal.classList.remove('hidden');
                  // start animation
                  requestAnimationFrame(() => {
                      backdrop.classList.remove('opacity-0');
                      panel.classList.remove('opacity-0', 'translate-y-4');
                  });
                  lockScroll(true);
              }

              function hideModal() {
                  // animate out
                  backdrop.classList.add('opacity-0');
                  panel.classList.add('opacity-0', 'translate-y-4');
                  // after animation ends, hide
                  setTimeout(() => {
                      modal.classList.add('hidden');
                      lockScroll(false);
                  }, 200);
              }

              // open buttons
              openBtns.forEach(btn => {
                  btn.addEventListener('click', (e) => {
                      e.preventDefault();
                      const cabType = btn.getAttribute('data-id') || '';
                      const tripType = btn.getAttribute('data-trip') || 'one-way';
                      const price = btn.getAttribute('data-price') || '';

                      // fill hidden fields
                      document.getElementById('modalCabType').value = cabType;
                      document.getElementById('modalTripType').value = tripType;
                      document.getElementById('modalPrice').value = price;

                      // toggle return fields
                      document.querySelectorAll('.return-fields').forEach(f => {
                          if (tripType === 'round-trip') {
                              f.classList.remove('hidden');
                          } else {
                              f.classList.add('hidden');
                          }
                      });

                      showModal();
                  });
              });

              // close actions
              closeBtn.addEventListener('click', hideModal);
              backdrop.addEventListener('click', hideModal);
              document.addEventListener('keydown', (e) => {
                  if (e.key === 'Escape' && !modal.classList.contains('hidden')) hideModal();
              });
          })();
      </script>
  @endsection
