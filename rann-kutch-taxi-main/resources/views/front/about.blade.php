@extends('layouts.front')
@section('content')

    <!-- Hero -->
    <section class="py-16 md:py-24 bg-gradient-to-r from-primary via-accent to-trust text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold">
                    About Rann Kutch Taxi Service
                </h1>
                <p class="text-xl text-white/90">
                    Your trusted partner for comfortable and safe journeys in the Rann of Kutch region since 2010
                </p>
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold">Our Mission</h2>
                    <p class="text-lg text-muted-foreground">
                        To provide safe, comfortable, and reliable taxi services for travelers exploring the magnificent Rann of Kutch region. We are committed to making your journey as memorable as your destination.
                    </p>
                    <p class="text-lg text-muted-foreground">
                        With over a decade of experience serving tourists, business travelers, and locals, we understand the unique terrain and requirements of travel in this remarkable region. Our mission is to combine local expertise with modern service standards.
                    </p>
                </div>
                <div class="relative h-[400px] rounded-2xl overflow-hidden">
                    <img
                        src="{{asset('assets/rann-aerial.jpg')}}"
                        alt="Aerial view of the white salt desert of Rann of Kutch"
                        class="w-full h-full object-cover"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Why Specialize in Kutch -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-secondary/40 via-background to-accent/5">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto space-y-8">
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Why We Specialize in the Rann of Kutch Region</h2>
                    <p class="text-lg text-muted-foreground">
                        Deep local knowledge makes all the difference
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6">
                        <h3 class="text-xl font-semibold mb-3">Understanding the Terrain</h3>
                        <p class="text-muted-foreground">
                            The Rann of Kutch is one of the world's largest salt deserts, spanning over 7,500 square kilometers. The unique terrain, from vast white salt flats to remote desert roads, requires experienced drivers who understand seasonal changes, road conditions, and safe navigation techniques.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6">
                        <h3 class="text-xl font-semibold mb-3">Local Cultural Connection</h3>
                        <p class="text-muted-foreground">
                            Our drivers are not just navigators—they are cultural ambassadors. They can guide you to authentic craft villages, recommend the best times to visit specific locations, and share stories about the rich heritage of Kutch culture, from traditional textiles to ancient architecture.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6">
                        <h3 class="text-xl font-semibold mb-3">Seasonal Expertise</h3>
                        <p class="text-muted-foreground">
                            The Rann transforms dramatically with seasons. From the famous Rann Utsav (November to February) when the white desert comes alive with full moon nights and cultural festivities, to the monsoon months when the area becomes a wetland—we know how to plan your journey perfectly for any time of year.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Core Values</h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    What drives us every day
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary via-accent to-trust flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Safety First</h3>
                    <p class="text-sm text-muted-foreground">
                        Well-maintained vehicles, trained drivers, and comprehensive insurance for your peace of mind
                    </p>
                </div>

                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary via-accent to-trust flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Quality Service</h3>
                    <p class="text-sm text-muted-foreground">
                        Professional drivers, clean vehicles, and attention to detail in every journey
                    </p>
                </div>

                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary via-accent to-trust flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Customer Focus</h3>
                    <p class="text-sm text-muted-foreground">
                        Your comfort and satisfaction drive every decision we make
                    </p>
                </div>

                <div class="card-hover bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary via-accent to-trust flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Reliability</h3>
                    <p class="text-sm text-muted-foreground">
                        On-time service, transparent pricing, and dependable support 24/7
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet & Standards -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-secondary/40 via-background to-accent/5">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative h-[400px] rounded-2xl overflow-hidden">
                    <img
                        src="{{asset('assets/images/about.png')}}"
                        alt="Our fleet of well-maintained luxury vehicles"
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold">Our Fleet & Service Standards</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Well-Maintained Fleet</h3>
                            <p class="text-muted-foreground">
                                Our vehicles undergo regular maintenance and thorough inspections. From comfortable sedans to spacious SUVs and group-friendly Tempo Travellers, every vehicle meets our high standards for cleanliness and performance.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Professional Drivers</h3>
                            <p class="text-muted-foreground">
                                All our drivers are experienced, licensed professionals who undergo regular training. They are courteous, punctual, and possess in-depth knowledge of the Kutch region, ensuring both safe driving and enriching conversations.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Comprehensive Insurance</h3>
                            <p class="text-muted-foreground">
                                All vehicles are fully insured, providing you with complete peace of mind during your journey through the Rann of Kutch region.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Rann of Kutch -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">About the Rann of Kutch</h2>

                <div class="bg-white rounded-lg shadow-lg border-2 border-gray-200 p-6 space-y-4">
                    <p class="text-lg">
                        The <strong>Rann of Kutch</strong> is a vast salt-marsh located in the Thar Desert in the Kutch District of Gujarat, India. It is one of the largest salt deserts in the world, covering approximately 7,500 square kilometers.
                    </p>
                    <p class="text-muted-foreground">
                        The Rann is famous for its stark white salt desert landscape, which becomes particularly spectacular during the full moon. The region transforms dramatically with seasons—during monsoons, it becomes a wetland, while in winter (November to February), it dries into a vast white expanse that attracts tourists from around the world.
                    </p>
                    <p class="text-muted-foreground">
                        The annual <strong>Rann Utsav</strong> cultural festival celebrates the heritage of Kutch with traditional music, dance, crafts, and local cuisine. The region is also renowned for its rich handicraft tradition, including intricate embroidery, tie-dye textiles, and traditional mirror work.
                    </p>
                    <p class="text-muted-foreground">
                        Beyond the white desert, the Kutch region offers diverse attractions including the historic Bhuj city, beautiful Mandvi beach, ancient palaces, wildlife sanctuaries, and authentic craft villages where artisans continue centuries-old traditions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 md:py-24 bg-gradient-to-r from-primary via-accent to-trust text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold">Experience the Rann with Local Experts</h2>
                <p class="text-xl text-white/90">
                    Let our experienced team make your journey to the Rann of Kutch unforgettable
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{route('contact')}}" class="inline-flex items-center justify-center px-8 py-3 bg-white text-primary rounded-lg hover:bg-white/90 transition-colors font-medium">
                        Book Your Journey
                    </a>
                    <a href="{{route('services')}}" class="inline-flex items-center justify-center px-8 py-3 bg-white/10 backdrop-blur-sm border-2 border-white/20 text-white rounded-lg hover:bg-white/20 transition-colors font-medium">
                        View Services
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
