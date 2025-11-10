@extends('layouts.front')
@section('content')
    <!-- Hero -->
    <section class="py-16 md:py-24 bg-gradient-to-r from-primary via-accent to-trust text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold">Get in Touch</h1>
                <p class="text-xl text-white/90">
                    Book your taxi or get a custom quote for your journey to the Rann of Kutch
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="py-14 md:py-20">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Phone -->
                <div class="bg-white border rounded-lg p-6 card-hover text-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Call Us</h3>
                    <p class="text-sm text-muted-foreground mb-4">Available 24/7</p>
                    <a href="tel:{{ config('settings.tel_code') }}"
                        class="text-primary font-semibold hover:underline">{{ config('settings.tel_code') }}</a>
                </div>

                <!-- WhatsApp -->
                <div class="bg-white border rounded-lg p-6 card-hover text-center">
                    <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">WhatsApp</h3>
                    <p class="text-sm text-muted-foreground mb-4">Quick responses</p>
                    <a href="https://wa.me/{{ config('settings.tel_code') }}" target="_blank"
                        class="text-accent font-semibold hover:underline">Chat with Us</a>
                </div>

                <!-- Email -->
                <div class="bg-white border rounded-lg p-6 card-hover text-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Email Us</h3>
                    <p class="text-sm text-muted-foreground mb-4">For detailed inquiries</p>
                    <a href="mailto:{{ config('settings.email') }}"
                        class="text-primary font-semibold hover:underline">{{ config('settings.email') }}</a>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Booking Form -->
                <div class="bg-white border rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-2">Book Your Ride</h2>
                    <p class="text-sm text-muted-foreground mb-6">Fill in your details and we'll get back to you shortly</p>

                    <form id="contactform" method="post" action="{{ route('confirm-booking') }}"
                        class="space-y-4 service-form">
                        @csrf
                        <input type="hidden" name="form" value="contact-from" />
                        <div class="space-y-2">
                            <label class="text-sm font-medium">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                placeholder="Enter your full name">
                        </div>

                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium">Phone Number *</label>
                                <input type="tel" name="mobile" required maxlength="10" minlength="10"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                    placeholder="+91 98765 43210">
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium">Email Address</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                    placeholder="your@email.com">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium">Services *</label>
                            <select id="tripType" name="service_type" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                                <option value="" selected disabled>Select Service</option>
                                <option value="oneway taxi">One Way Taxi</option>
                                <option value="outstation taxi">OutStation Taxi</option>
                                <option value="local taxi">Local Taxi</option>
                                <option value="airport taxi">Airport Taxi</option>
                                <option value="car rental">Car Rental</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}">
                            </div>
                            <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
                            <input type="hidden" name="bot" value="bot">
                            <input type="hidden" name="bot_capture" value="">
                            @if ($errors->has('g-recaptcha-response'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit"
                            class="w-full px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover font-medium transition-colors flex items-center justify-center gap-2">
                            <span>Submit Booking Request</span>
                            <svg id="loading-spinner" class="hidden h-5 w-5 animate-spin" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </button>

                        <p class="text-xs text-center text-muted-foreground">
                            We'll confirm your booking within 30 minutes
                        </p>
                    </form>
                </div>

                <!-- Office Info -->
                <div class="space-y-6">
                    <div class="bg-white border rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Our Office</span>
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold mb-1">Main Office</h4>
                                <p class="text-muted-foreground">
                                    Kutch District<br>
                                    Gujarat, India<br>
                                    PIN: 370001
                                </p>
                            </div>

                            <div>
                                <h4 class="font-semibold mb-1">Office Hours</h4>
                                <p class="text-muted-foreground">
                                    Monday - Sunday: 24/7<br>
                                    (Phone & WhatsApp support available round the clock)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <svg class="h-5 w-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Quick Booking Tips</span>
                        </h3>
                        <ul class="space-y-2 text-sm text-muted-foreground">
                            <li>• Book at least 24 hours in advance for best availability</li>
                            <li>• For Rann Utsav season (Nov-Feb), book 3-7 days ahead</li>
                            <li>• Airport pickups: Provide flight details for accurate timing</li>
                            <li>• Multi-day tours: Share your complete itinerary</li>
                            <li>• Group bookings: Mention number of passengers and luggage</li>
                            <li>• Early morning/late night: No extra charges, just inform us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us -->
    <section class="py-5">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose Rann Kutch Taxi?</h2>
                <p class="text-muted-foreground max-w-2xl mx-auto">
                    Your trusted travel partner in Gujarat
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Safe & Secure</h3>
                    <p class="text-sm text-muted-foreground">
                        Verified drivers, GPS tracking, and 24/7 support for your safety
                    </p>
                </div>

                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Always On Time</h3>
                    <p class="text-sm text-muted-foreground">
                        Punctual service with real-time updates and tracking
                    </p>
                </div>

                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Best Rates</h3>
                    <p class="text-sm text-muted-foreground">
                        Transparent pricing with no hidden charges
                    </p>
                </div>

                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-accent flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Hassle-Free</h3>
                    <p class="text-sm text-muted-foreground">
                        Easy booking process and flexible cancellation policy
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Set minimum date to today
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('pickupDate').setAttribute('min', today);
            document.getElementById('returnDate').setAttribute('min', today);

            // Show/hide return date based on trip type
            document.getElementById('tripType').addEventListener('change', function() {
                const returnDateField = document.getElementById('returnDateField');
                if (this.value === 'roundtrip' || this.value === 'multiday') {
                    returnDateField.style.display = 'block';
                } else {
                    returnDateField.style.display = 'none';
                }
            });
        });

        // FAQ Accordion
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const svg = button.querySelector('svg');
            const isOpen = !answer.classList.contains('hidden');

            // Close all FAQs
            document.querySelectorAll('.faq-answer').forEach(ans => {
                ans.classList.add('hidden');
            });
            document.querySelectorAll('.faq-question svg').forEach(icon => {
                icon.classList.remove('rotate-180');
            });

            // Toggle current FAQ
            if (isOpen) {
                answer.classList.add('hidden');
                svg.classList.remove('rotate-180');
            } else {
                answer.classList.remove('hidden');
                svg.classList.add('rotate-180');
            }
        }

        // Vehicle Selection
        function selectVehicleFromCard(vehicleType) {
            const select = document.getElementById('vehicleType');
            const vehicleMap = {
                'sedan': 'sedan',
                'suv': 'suv',
                'premium': 'premium',
                'tempo': 'tempo'
            };
            select.value = vehicleMap[vehicleType];

            // Scroll to form
            document.getElementById('booking-form').scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }

        // Form Submission
        document.getElementById('booking-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const submitBtn = document.getElementById('submit-btn');
            const spinner = document.getElementById('loading-spinner');

            submitBtn.disabled = true;
            spinner.classList.remove('hidden');

            // Collect form data
            const formData = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                tripType: document.getElementById('tripType').value,
                vehicleType: document.getElementById('vehicleType').value,
                pickup: document.getElementById('pickup').value,
                dropoff: document.getElementById('dropoff').value,
                pickupDate: document.getElementById('pickupDate').value,
                returnDate: document.getElementById('returnDate').value,
                passengers: document.getElementById('passengers').value,
                message: document.getElementById('message').value
            };

            // Store in sessionStorage for thank-you page
            sessionStorage.setItem('bookingData', JSON.stringify(formData));

            // Simulate form submission and redirect
            setTimeout(() => {
                window.location.href = '/thank-you';
            }, 1500);
        });
    </script>
@endsection
