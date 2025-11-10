<!-- Footer -->
<footer class="bg-secondary border-t">
    <div class="container mx-auto px-4 py-12">
        <!-- Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
            <!-- Logo & Description -->
            <div class="space-y-4">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('assets/images/rann-of-kutch-logo.png') }}" alt="Rann Kutch Taxi"
                        class="h-[70px] w-auto">
                </a>
                <p class="text-sm">
                    Trusted taxi and car rental solutions in the Rann of Kutch.
                    We ensure comfort, safety, and reliability in every ride.
                </p>
                <div class="flex space-x-4">
                    <!-- Facebook -->
                    <a href="{{ config('settings.facebook_url') ?: 'javascript:void(0)' }}"
                        class="text-muted-foreground hover:text-primary transition-colors">
                        <i class="fa-brands fa-facebook-f text-lg"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="{{ config('settings.twitter_url') ?: 'javascript:void(0)' }}"
                        class="text-muted-foreground hover:text-primary transition-colors">
                        <i class="fa-brands fa-twitter text-lg"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="{{ config('settings.instagram_url') ?: 'javascript:void(0)' }}"
                        class="text-muted-foreground hover:text-primary transition-colors">
                        <i class="fa-brands fa-instagram text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors">About</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="font-semibold mb-4">Services</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('one-way-taxi') }}" class="hover:text-primary transition-colors">One Way
                            Taxi</a></li>
                    <li><a href="{{ route('outstation-taxi') }}" class="hover:text-primary transition-colors">Outstation
                            Taxi</a></li>
                    <li><a href="{{ route('airport-taxi') }}" class="hover:text-primary transition-colors">Airport
                            Taxi</a></li>
                    <li><a href="{{ route('local-taxi') }}" class="hover:text-primary transition-colors">Local Taxi</a>
                    </li>
                    <li><a href="{{ route('car-rental') }}" class="hover:text-primary transition-colors">Car Rental</a>
                    </li>
                </ul>
            </div>

            <!-- Popular Routes (From) -->
            <div>
                <h3 class="font-semibold mb-4">From Rann of Kutch</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('rann-of-kutch-to-ahmedabad-taxi') }}"
                            class="hover:text-primary transition-colors">Rann of Kutch → Ahmedabad</a></li>
                    <li><a href="{{ url('rann-of-kutch-to-bhuj-taxi') }}"
                            class="hover:text-primary transition-colors">Rann of Kutch → Bhuj</a></li>
                    <li><a href="{{ url('rann-of-kutch-to-mandvi-taxi') }}"
                            class="hover:text-primary transition-colors">Rann of Kutch → Mandvi</a></li>
                    <li><a href="{{ url('rann-of-kutch-to-rajkot-taxi') }}"
                            class="hover:text-primary transition-colors">Rann of Kutch → Rajkot</a></li>
                    <li><a href="{{ url('rann-of-kutch-to-vadodara-taxi') }}"
                            class="hover:text-primary transition-colors">Rann of Kutch → Vadodara</a></li>
                </ul>
            </div>

            <!-- Popular Routes (To) -->
            <div>
                <h3 class="font-semibold mb-4">To Rann of Kutch</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('ahmedabad-to-rann-of-kutch-taxi') }}"
                            class="hover:text-primary transition-colors">Ahmedabad → Rann of Kutch</a></li>
                    <li><a href="{{ url('bhuj-to-rann-of-kutch-taxi') }}"
                            class="hover:text-primary transition-colors">Bhuj → Rann of Kutch</a></li>
                    <li><a href="{{ url('rajkot-to-rann-of-kutch-taxi') }}"
                            class="hover:text-primary transition-colors">Rajkot → Rann of Kutch</a></li>
                    <li><a href="{{ url('vadodara-to-rann-of-kutch-taxi') }}"
                            class="hover:text-primary transition-colors">Vadodara → Rann of Kutch</a></li>
                    <li><a href="{{ url('mumbai-to-rann-of-kutch-taxi') }}"
                            class="hover:text-primary transition-colors">Mumbai → Rann of Kutch</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-3 text-sm ">
                    <li class="flex items-start space-x-2 text-sm ">
                        <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Kutch District, Gujarat, India</span>
                    </li>
                    <li class="flex items-center space-x-2 text-sm ">
                        <svg class="h-5 w-5 text-primary flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:{{ config('settings.tel_code') }}"
                            class="hover:text-primary transition-colors">{{ config('settings.mobile') }}</a>
                    </li>
                    <li class="flex items-center space-x-2 text-sm ">
                        <svg class="h-5 w-5 text-primary flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:{{ config('settings.email') }}"
                            class="hover:text-primary transition-colors">{{ config('settings.email') }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom -->
        <div class="mt-12 pt-8 border-t border-border">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm ">
                    © {{ date('Y') }} <a href="https://rannofkutchtaxi.com/" class="hover:text-primary">Rann of
                        Kutch Taxi</a>
                    Service. Developed by <a href="https://www.trentiums.com/" target="_blank"
                        class="hover:text-primary">Trentium Solution</a>.
                </p>
                <div class="flex gap-4 text-sm">
                    <a href="{{ route('privacy-policy') }}"
                        class=" hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="{{ route('terms-and-condition') }}"
                        class=" hover:text-primary transition-colors">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
