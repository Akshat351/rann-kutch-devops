@extends('layouts.front')
@section('content')

<!-- Hero Section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-primary via-accent to-trust text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center space-y-6">
            <h1 class="text-4xl md:text-5xl font-bold">Privacy Policy</h1>
            <p class="text-xl text-white/90">
                Your privacy is important to us. Learn how we collect, use, and protect your information
            </p>
            <p class="text-sm text-white/80">
                Last Updated: {{ date('F d, Y') }}
            </p>
        </div>
    </div>
</section>

<!-- Privacy Content -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">

            <!-- Introduction -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-8">
                <p class="text-muted-foreground leading-relaxed text-center">
                    At Rann Kutch Taxi Service, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your information when you use our taxi booking services.
                </p>
            </div>

            <!-- Section 1: Information We Collect -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Information We Collect</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>When you book a taxi, we collect your name, phone number, email address, pickup and drop-off locations, travel dates, and payment details.</p>
                    <p>We may also collect information about how you use our website, including IP address and browsing patterns, to improve our services.</p>
                </div>
            </div>

            <!-- Section 2: How We Use Your Information -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">How We Use Your Information</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>We use your information to process bookings, confirm reservations, provide customer support, and communicate booking updates.</p>
                    <p>Your travel information helps us arrange appropriate vehicles and plan routes. Payment information is used solely for processing transactions.</p>
                    <p>We may use your information to improve our services and send promotional offers, but only with your consent.</p>
                </div>
            </div>

            <!-- Section 3: Information Sharing -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Information Sharing</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>We do not sell, trade, or rent your personal information to third parties. We may share your information with drivers and service providers only to fulfill your booking.</p>
                    <p>We may disclose your information if required by law or to protect our rights and safety, or that of our customers.</p>
                </div>
            </div>

            <!-- Section 4: Data Security -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Data Security</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>We implement security measures to protect your personal information against unauthorized access, alteration, or disclosure.</p>
                    <p>We use secure servers and encrypted connections for data transmission. However, no method of transmission over the Internet is 100% secure.</p>
                </div>
            </div>

            <!-- Section 5: Your Rights -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Your Rights</h2>
                </div>
                <div class="space-y-4">
                    <div class="bg-secondary/30 rounded-lg p-4">
                        <div class="grid md:grid-cols-2 gap-4 text-sm">
                            <div>
                                <p class="font-semibold text-foreground mb-2">Access Your Data</p>
                                <p class="text-muted-foreground">Request a copy of your personal information</p>
                            </div>
                            <div>
                                <p class="font-semibold text-foreground mb-2">Update Your Data</p>
                                <p class="text-muted-foreground">Correct or update inaccurate information</p>
                            </div>
                            <div>
                                <p class="font-semibold text-foreground mb-2">Delete Your Data</p>
                                <p class="text-muted-foreground">Request deletion of your information</p>
                            </div>
                            <div>
                                <p class="font-semibold text-foreground mb-2">Opt-Out</p>
                                <p class="text-muted-foreground">Unsubscribe from marketing communications</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted-foreground text-sm">To exercise any of these rights, please contact us using the contact information provided below.</p>
                </div>
            </div>

            <!-- Section 6: Data Retention & Cookies -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Data Retention & Cookies</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this policy, typically 3-5 years for booking records.</p>
                    <p>Our website may use cookies to enhance your browsing experience. You can control cookie preferences through your browser settings.</p>
                </div>
            </div>

            <!-- Section 7: Changes to Privacy Policy -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-8 mb-6">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center flex-shrink-0">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold">Changes to Privacy Policy</h2>
                </div>
                <div class="space-y-3 text-muted-foreground">
                    <p>We may update this Privacy Policy from time to time. We will notify you of any material changes by posting the updated policy on this page and updating the "Last Updated" date.</p>
                    <p>Your continued use of our services after changes constitutes acceptance of the updated policy.</p>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-gradient-to-r from-primary/10 via-primary/5 to-primary/10 border border-primary/20 rounded-xl p-8 mb-6">
                <h2 class="text-2xl font-bold mb-4 text-center">Questions About Privacy?</h2>
                <p class="text-center text-muted-foreground mb-6">
                    If you have any questions or concerns about this Privacy Policy, please contact us
                </p>
                <div class="grid md:grid-cols-3 gap-6">
                    <a href="tel:{{ config('settings.tel_code') }}" class="flex flex-col items-center gap-3 p-4 rounded-lg bg-white hover:bg-gray-50 transition-colors">
                        <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span class="font-semibold">Call Us</span>
                        <span class="text-sm text-primary">{{ config('settings.mobile') }}</span>
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
