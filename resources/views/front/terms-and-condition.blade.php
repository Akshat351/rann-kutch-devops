@extends('layouts.front')
@section('content')

<!-- Hero Section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-primary via-accent to-trust text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center space-y-6">
            <h1 class="text-4xl md:text-5xl font-bold">Terms and Conditions</h1>
            <p class="text-xl text-white/90">
                Please read these terms carefully before using our taxi services
            </p>
            <p class="text-sm text-white/80">
                Last Updated: {{ date('F d, Y') }}
            </p>
        </div>
    </div>
</section>

<!-- Terms Content -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">

            <!-- Introduction -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-8">
                <p class="text-muted-foreground leading-relaxed text-center">
                    Welcome to Rann Kutch Taxi Service. These Terms and Conditions govern your use of our taxi booking services. By booking a taxi with us, you agree to be bound by these Terms.
                </p>
            </div>

            <!-- Section 1: Booking Terms -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Booking Terms</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>All bookings are subject to availability and confirmation by Rann Kutch Taxi Service. We recommend booking at least 24 hours in advance, and 3-7 days ahead during peak seasons (Rann Utsav, Nov-Feb).</p>
                    <p>Customers must provide accurate information during booking. Any changes must be communicated at least 6 hours before pickup time.</p>
                    <p>We reserve the right to provide an equivalent or upgraded vehicle if the requested vehicle is unavailable.</p>
                </div>
            </div>

            <!-- Section 2: Cancellation Policy -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Cancellation Policy</h2>
                </div>
                <div class="space-y-4">
                    <div class="bg-secondary/30 rounded-lg p-4">
                        <div class="grid md:grid-cols-2 gap-4 text-sm">
                            <div>
                                <p class="font-semibold text-foreground mb-2">24+ hours before pickup:</p>
                                <p class="text-muted-foreground">Full refund (minus processing fee)</p>
                            </div>
                            <div>
                                <p class="font-semibold text-foreground mb-2">12-24 hours before pickup:</p>
                                <p class="text-muted-foreground">50% refund</p>
                            </div>
                            <div>
                                <p class="font-semibold text-foreground mb-2">6-12 hours before pickup:</p>
                                <p class="text-muted-foreground">25% refund</p>
                            </div>
                            <div>
                                <p class="font-semibold text-foreground mb-2">Less than 6 hours or No-show:</p>
                                <p class="text-muted-foreground">No refund</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted-foreground text-sm">Refunds are processed within 5-7 business days to the original payment method.</p>
                </div>
            </div>

            <!-- Section 3: Payment Terms -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Payment Terms</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>We accept Cash, UPI, Credit/Debit Cards, and Online Bank Transfers. Payment can be made in advance or after trip completion.</p>
                    <p>Prices include vehicle rental, driver charges, and fuel costs. Toll charges, parking fees, and state taxes are additional.</p>
                    <p><strong class="text-foreground">Additional Charges:</strong> Extra kilometers charged as per per/km rate. Extra hours charged ₹250-500/hour. Waiting time charged after first 30 minutes free.</p>
                </div>
            </div>

            <!-- Section 4: Vehicle & Driver -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Vehicle & Driver</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>All vehicles are well-maintained, clean, insured, and equipped with AC. All drivers are licensed, experienced, and familiar with Gujarat routes.</p>
                    <p>Drivers will assist with luggage and maintain professional behavior. For multi-day tours, driver accommodation charges are included or charged separately as discussed.</p>
                </div>
            </div>

            <!-- Section 5: Customer Responsibilities -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Customer Responsibilities</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>Customers must treat drivers and vehicles with respect. Smoking, alcohol consumption, and illegal activities are strictly prohibited in vehicles.</p>
                    <p>Customers are responsible for their luggage and personal belongings. We are not liable for loss or damage to personal items.</p>
                    <p>Customers should be ready at the scheduled pickup time. Waiting charges apply after the first 30 minutes of free waiting.</p>
                </div>
            </div>

            <!-- Section 6: Liability & Insurance -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Liability & Insurance</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>All vehicles are insured as per government regulations. Insurance covers third-party liability and vehicle damage.</p>
                    <p>We are not liable for delays caused by traffic, weather, or unforeseen circumstances beyond our control. Our liability is limited to the booking amount paid.</p>
                    <p>In case of accidents, customers must immediately inform us and local authorities. Claims will be processed as per insurance policy terms.</p>
                </div>
            </div>

            <!-- Section 7: Modifications & Changes -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Modifications & Changes</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>Route changes can be requested during the trip, subject to feasibility. Additional charges may apply if changes significantly increase distance.</p>
                    <p>Changes to pickup time, date, or location can be made by contacting us at least 6 hours in advance, subject to availability.</p>
                </div>
            </div>

            <!-- Section 8: Privacy & Data -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Privacy & Data Protection</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>We collect and process your personal information securely as per our Privacy Policy. Your contact details, travel information, and payment data are securely stored.</p>
                    <p>We do not share your personal information with third parties without your consent, except as required by law. You have the right to access, modify, or delete your personal information.</p>
                </div>
            </div>

            <!-- Section 9: Dispute Resolution -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Dispute Resolution</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>Any disputes or complaints should be brought to our attention within 48 hours of service completion. We will investigate and respond within 5 business days.</p>
                    <p>If disputes cannot be resolved amicably, they will be subject to the jurisdiction of courts in Kutch, Gujarat, India. These Terms are governed by Indian laws.</p>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-gradient-to-r from-primary/10 via-primary/5 to-primary/10 border border-primary/20 rounded-xl p-8 mb-6">
                <h2 class="text-2xl font-bold mb-4 text-center">Questions About These Terms?</h2>
                <p class="text-center text-muted-foreground mb-6">
                    Contact us for any clarification or queries
                </p>
                <div class="grid md:grid-cols-3 gap-6">
                    <a href="tel:{{ config('settings.tel_code') }}" class="flex flex-col items-center gap-3 p-4 rounded-lg bg-white hover:bg-gray-50 transition-colors">
                        <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span class="font-semibold">Call Us</span>
                        <span class="text-sm text-primary">{{ config('settings.tel_code') }}</span>
                    </a>
                    <a href="https://wa.me/{{ config('settings.tel_code') }}" target="_blank" class="flex flex-col items-center gap-3 p-4 rounded-lg bg-white hover:bg-gray-50 transition-colors">
                        <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <span class="font-semibold">WhatsApp</span>
                        <span class="text-sm text-accent">Quick Chat</span>
                    </a>
                    <a href="mailto:{{ config('settings.email') }}" class="flex flex-col items-center gap-3 p-4 rounded-lg bg-white hover:bg-gray-50 transition-colors">
                        <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="font-semibold">Email Us</span>
                        <span class="text-sm text-primary">{{ config('settings.email') }}</span>
                    </a>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{route('home')}}" class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-hover font-medium transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Back to Home
                </a>
                <a href="{{route('contact')}}" class="flex-1 flex items-center justify-center gap-2 px-6 py-3 border-2 border-gray-300 rounded-lg hover:bg-gray-50 font-medium transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Book a Taxi
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
