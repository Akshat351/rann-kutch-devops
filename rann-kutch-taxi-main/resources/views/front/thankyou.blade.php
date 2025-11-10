@extends('layouts.front')
@section('content')

<!-- Hero Section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-primary via-accent to-trust text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center space-y-6">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/20 backdrop-blur-sm mb-4 animate-bounce-once">
                <svg class="h-10 w-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold">Thank You!</h1>
            <p class="text-xl text-white/90">
                Your booking request has been submitted successfully
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">

            <!-- Success Card -->
            <div class="bg-white rounded-lg shadow-xl border-2 border-gray-200 overflow-hidden mb-8">
                <div class="bg-gradient-to-r from-primary/10 via-primary/5 to-primary/10 p-8 text-center border-b">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-100 mb-4">
                        <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-2">Booking Request Received!</h2>
                    <p class="text-muted-foreground mb-4">
                        We've received your booking request and will get back to you shortly
                    </p>
                    <div class="inline-block px-6 py-2 bg-primary/10 border border-primary/20 rounded-full">
                        <p class="text-sm">
                            Booking Reference: <span class="font-bold text-primary">RKT{{ date('Ymd') }}{{ rand(1000, 9999) }}</span>
                        </p>
                    </div>
                </div>

                <div class="p-8">
                    <!-- What Happens Next -->
                    <div class="bg-gradient-to-r from-primary/10 to-primary/5 border border-primary/20 rounded-xl p-6 mb-6">
                        <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            What Happens Next?
                        </h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <p class="font-semibold mb-1">Confirmation Call</p>
                                    <p class="text-muted-foreground">Our team will contact you within 30 minutes to confirm your booking details</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <p class="font-semibold mb-1">Final Pricing</p>
                                    <p class="text-muted-foreground">We'll share the final pricing and payment details after reviewing your requirements</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg class="h-5 w-5 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <p class="font-semibold mb-1">Driver Details</p>
                                    <p class="text-muted-foreground">Driver information and vehicle details will be shared before your trip</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Support -->
                    <div class="bg-gradient-to-br from-secondary/50 to-secondary/30 border border-gray-200 rounded-xl p-6 mb-6">
                        <h3 class="text-xl font-bold text-center mb-2">Need Assistance?</h3>
                        <p class="text-sm text-center text-muted-foreground mb-6">
                            Our support team is available 24/7 to help you with any questions
                        </p>
                        <div class="grid sm:grid-cols-3 gap-4">
                            <a href="tel:{{ config('settings.tel_code') }}" class="flex flex-col items-center gap-2 px-4 py-4 rounded-lg bg-white hover:bg-gray-50 shadow-sm transition-colors">
                                <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                                    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold">Call Us</span>
                                <span class="text-xs text-muted-foreground">{{ config('settings.mobile') }}</span>
                            </a>
                            <a href="https://wa.me/{{ config('settings.whatsapp_number') }}" target="_blank" class="flex flex-col items-center gap-2 px-4 py-4 rounded-lg bg-white hover:bg-gray-50 shadow-sm transition-colors">
                                <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center">
                                    <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold">WhatsApp</span>
                                <span class="text-xs text-muted-foreground">Quick Chat</span>
                            </a>
                            <a href="mailto:{{ config('settings.email') }}" class="flex flex-col items-center gap-2 px-4 py-4 rounded-lg bg-white hover:bg-gray-50 shadow-sm transition-colors">
                                <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                                    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold">Email Us</span>
                                <span class="text-xs text-muted-foreground">{{ config('settings.email') }}</span>
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
                            Make Another Booking
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0">
                        <svg class="h-6 w-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2">Important Information</h3>
                        <ul class="space-y-2 text-sm text-muted-foreground">
                            <li class="flex items-start gap-2">
                                <span class="text-primary">•</span>
                                <span>Please keep your phone available for the confirmation call within 30 minutes</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-primary">•</span>
                                <span>Have your booking reference number ready when contacting us</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-primary">•</span>
                                <span>For any changes or cancellations, contact us at least 24 hours before pickup</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-primary">•</span>
                                <span>We accept cash, UPI, credit/debit cards, and online bank transfers</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
