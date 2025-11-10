@extends('layouts.front')
@section('content')

  <!-- Hero -->
  <section class="py-16 md:py-24 bg-gradient-to-r from-primary via-accent to-trust text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto text-center space-y-6">
        <h1 class="text-4xl md:text-5xl font-bold">Our Services</h1>
        <p class="text-xl text-white/90">
          Comprehensive taxi and car rental solutions for all your travel needs in the Rann of Kutch region
        </p>
      </div>
    </div>
  </section>

  <!-- Services Detail -->
  <section class="py-16 md:py-24">
    <div class="container mx-auto px-4 space-y-16">

      <!-- One Way Taxi -->
      <div id="one-way" class="scroll-mt-24">
        <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 overflow-hidden">
          <div class="grid md:grid-cols-2 gap-8">
            <div class="p-8 md:p-12 space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-16 h-16 rounded-full bg-secondary border-2 border-accent flex items-center justify-center flex-shrink-0">
                  <svg class="h-8 w-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                  </svg>
                </div>
                <div>
                  <h2 class="text-3xl font-bold mb-2">One Way Taxi</h2>
                  <p class="text-lg text-muted-foreground">
                    Perfect for travelers who need point-to-point transportation without a return journey. Ideal for tourists visiting Rann of Kutch or returning from the white desert.
                  </p>
                </div>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Key Features</h3>
                <ul class="space-y-2">
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Economical pricing for one-way trips</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>No return charges or deadhead fees</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Comfortable vehicles for long journeys</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Experienced drivers familiar with routes</span>
                  </li>
                </ul>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Perfect For</h3>
                <div class="flex flex-wrap gap-2">
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Tourist travel to Rann of Kutch from major cities</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Return journey after Rann Utsav festival</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">One-way airport transfers</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Inter-city travel without return commitment</span>
                </div>
              </div>

              <a href="{{route('one-way-taxi')}}" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine">
                Book This Service
              </a>
            </div>

            <div class="relative min-h-[400px]">
              <img src="{{asset('assets/fleet-vehicles.jpg')}}" alt="One Way Taxi fleet" class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
              <div class="absolute bottom-6 left-6 right-6 z-10">
                {{-- <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine shadow-lg">
                  Book This Service
                </a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Outstation Taxi -->
      <div id="outstation" class="scroll-mt-24">
        <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 overflow-hidden">
          <div class="grid md:grid-cols-2 gap-8">
            <div class="relative min-h-[400px] md:order-first">
              <img src="{{asset('assets/fleet-vehicles.jpg')}}" alt="Outstation Taxi fleet" class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
              <div class="absolute bottom-6 left-6 right-6 z-10">
                {{-- <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine shadow-lg">
                  Book This Service
                </a> --}}
              </div>
            </div>

            <div class="p-8 md:p-12 space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-16 h-16 rounded-full bg-secondary border-2 border-accent flex items-center justify-center flex-shrink-0">
                  <svg class="h-8 w-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
                </div>
                <div>
                  <h2 class="text-3xl font-bold mb-2">Outstation Taxi</h2>
                  <p class="text-lg text-muted-foreground">
                    Multi-day journeys with flexible itineraries, multiple stops, and comprehensive sightseeing packages around the Kutch region and beyond.
                  </p>
                </div>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Key Features</h3>
                <ul class="space-y-2">
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Multi-day packages available</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Flexible routes and stops</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Local sightseeing included</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Driver accommodation arranged</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Daily usage limits with reasonable extensions</span>
                  </li>
                </ul>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Perfect For</h3>
                <div class="flex flex-wrap gap-2">
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Kutch region exploration (Mandvi, Bhuj, Rann)</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Extended Gujarat tour packages</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Business trips with multiple locations</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Family vacation with sightseeing</span>
                </div>
              </div>

              <a href="{{route('outstation-taxi')}}" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine">
                Book This Service
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Airport Taxi -->
      <div id="airport" class="scroll-mt-24">
        <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 overflow-hidden">
          <div class="grid md:grid-cols-2 gap-8">
            <div class="p-8 md:p-12 space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-16 h-16 rounded-full bg-secondary border-2 border-accent flex items-center justify-center flex-shrink-0">
                  <svg class="h-8 w-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                  </svg>
                </div>
                <div>
                  <h2 class="text-3xl font-bold mb-2">Airport Taxi</h2>
                  <p class="text-lg text-muted-foreground">
                    Reliable and punctual airport transfer services from Ahmedabad Airport and Bhuj Airport to Rann of Kutch and surrounding areas.
                  </p>
                </div>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Key Features</h3>
                <ul class="space-y-2">
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Flight tracking for delays</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Meet & greet at arrivals</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Luggage assistance</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Clean, comfortable vehicles</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>24/7 availability</span>
                  </li>
                </ul>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Perfect For</h3>
                <div class="flex flex-wrap gap-2">
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Ahmedabad Airport to Rann of Kutch transfers</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Bhuj Airport to white desert pickup</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Early morning or late night flights</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Group airport transfers for tour packages</span>
                </div>
              </div>

              <a href="{{route('airport-taxi')}}" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine">
                Book This Service
              </a>
            </div>

            <div class="relative min-h-[400px]">
              <img src="{{asset('assets/fleet-vehicles.jpg')}}" alt="Airport Taxi fleet" class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
              {{-- <div class="absolute bottom-6 left-6 right-6 z-10">
                <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine shadow-lg">
                  Book This Service
                </a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>

      <!-- Local Taxi -->
      <div id="local" class="scroll-mt-24">
        <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 overflow-hidden">
          <div class="grid md:grid-cols-2 gap-8">
            <div class="relative min-h-[400px] md:order-first">
              <img src="{{asset('assets/fleet-vehicles.jpg')}}" alt="Local Taxi fleet" class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
              {{-- <div class="absolute bottom-6 left-6 right-6 z-10">
                <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine shadow-lg">
                  Book This Service
                </a>
              </div> --}}
            </div>

            <div class="p-8 md:p-12 space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-16 h-16 rounded-full bg-secondary border-2 border-accent flex items-center justify-center flex-shrink-0">
                  <svg class="h-8 w-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <div>
                  <h2 class="text-3xl font-bold mb-2">Local Taxi</h2>
                  <p class="text-lg text-muted-foreground">
                    Hourly or daily rentals for local sightseeing within the Kutch region. Perfect for exploring nearby attractions, shopping, and local experiences.
                  </p>
                </div>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Key Features</h3>
                <ul class="space-y-2">
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Hourly or full-day packages</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Local expert drivers</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Multiple stop flexibility</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Wait time included</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>AC vehicles for comfort</span>
                  </li>
                </ul>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Perfect For</h3>
                <div class="flex flex-wrap gap-2">
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Rann of Kutch local area tours</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Bhuj city sightseeing</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Mandvi beach and palace visits</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Local craft village tours (Nirona, Bhujodi)</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Shopping and cultural experiences</span>
                </div>
              </div>

              <a href="{{route('local-taxi')}}" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine">
                Book This Service
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Car Rental with Driver -->
      <div id="car-rental" class="scroll-mt-24">
        <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 overflow-hidden">
          <div class="grid md:grid-cols-2 gap-8">
            <div class="p-8 md:p-12 space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-16 h-16 rounded-full bg-secondary border-2 border-accent flex items-center justify-center flex-shrink-0">
                  <svg class="h-8 w-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                  </svg>
                </div>
                <div>
                  <h2 class="text-3xl font-bold mb-2">Car Rental with Driver</h2>
                  <p class="text-lg text-muted-foreground">
                    Hire comfortable, well-maintained vehicles with professional drivers for your specific duration and requirements in the Kutch region.
                  </p>
                </div>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Key Features</h3>
                <ul class="space-y-2">
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Various vehicle options (Sedan, SUV, Tempo Traveller)</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Professional, courteous drivers</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Fuel and toll charges included</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Customizable packages</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Insurance covered vehicles</span>
                  </li>
                </ul>
              </div>

              <div>
                <h3 class="text-xl font-semibold mb-4">Perfect For</h3>
                <div class="flex flex-wrap gap-2">
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Corporate events and business travel</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Wedding guest transportation</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Film and photography shoots</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Extended stays in Kutch region</span>
                  <span class="px-3 py-1 bg-secondary text-sm rounded-full">Custom itinerary requirements</span>
                </div>
              </div>

              <a href="{{route('car-rental')}}" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine">
                Book This Service
              </a>
            </div>

            <div class="relative min-h-[400px]">
              <img src="{{asset('assets/fleet-vehicles.jpg')}}" alt="Car Rental fleet" class="absolute inset-0 w-full h-full object-cover" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
              {{-- <div class="absolute bottom-6 left-6 right-6 z-10">
                <a href="/contact" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover transition-colors font-medium btn-shine shadow-lg">
                  Book This Service
                </a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Vehicle Types / Our Fleet -->
  <section class="py-16 md:py-24 bg-gradient-to-b from-secondary/40 via-background to-accent/5">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Fleet</h2>
        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
          Well-maintained, comfortable vehicles to suit every travel requirement
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6">
          <h3 class="font-bold text-xl mb-4">Sedan</h3>
          <div class="space-y-3">
            <p class="text-sm"><span class="font-semibold">Capacity:</span> 4 passengers</p>
            <p class="text-sm"><span class="font-semibold">Luggage:</span> 2-3 bags</p>
            <p class="text-sm"><span class="font-semibold">Ideal for:</span> Individual/couple travel</p>
          </div>
        </div>

        <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6">
          <h3 class="font-bold text-xl mb-4">SUV</h3>
          <div class="space-y-3">
            <p class="text-sm"><span class="font-semibold">Capacity:</span> 6-7 passengers</p>
            <p class="text-sm"><span class="font-semibold">Luggage:</span> 4-5 bags</p>
            <p class="text-sm"><span class="font-semibold">Ideal for:</span> Family trips</p>
          </div>
        </div>

        <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6">
          <h3 class="font-bold text-xl mb-4">Tempo Traveller</h3>
          <div class="space-y-3">
            <p class="text-sm"><span class="font-semibold">Capacity:</span> 12-14 passengers</p>
            <p class="text-sm"><span class="font-semibold">Luggage:</span> 8-10 bags</p>
            <p class="text-sm"><span class="font-semibold">Ideal for:</span> Group tours</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
      <div class="bg-gradient-to-r from-primary via-accent to-trust text-white rounded-lg overflow-hidden">
        <div class="p-12 text-center space-y-6">
          <h2 class="text-3xl md:text-4xl font-bold">Need a Custom Package?</h2>
          <p class="text-xl text-white/90 max-w-2xl mx-auto">
            We can create tailored travel solutions for your specific requirements. Contact us to discuss your needs.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3 bg-white text-primary rounded-lg hover:bg-white/90 transition-colors font-medium">
              Get Custom Quote
            </a>
            <a href="tel:{{ config('settings.tel_code') }}" class="inline-flex items-center justify-center px-8 py-3 bg-white/10 backdrop-blur-sm border-2 border-white/20 text-white rounded-lg hover:bg-white/20 transition-colors font-medium">
              Call: {{ config('settings.tel_code') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
