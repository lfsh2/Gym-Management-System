@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gray-900 h-screen">
    <div class="absolute inset-0">
        <img src="{{ asset('images/gym3.webp') }}" alt="Gym background" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <div class="text-center md:text-left">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Transform Your Life at<br>ForeverLife Fitness</h1>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl">Join our state-of-the-art facility and start your fitness journey today. Expert trainers, modern equipment, and motivating atmosphere await you.</p>
            <div class="space-x-4">
                <a href="{{ route('plans') }}" class="inline-block bg-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">Get Started</a>
                <a href="{{ route('contact.index') }}" class="inline-block bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition-colors">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Cocksville Fitness?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Experience the perfect blend of modern equipment, expert guidance, and a motivating atmosphere to achieve your fitness goals.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($features as $feature)
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-{{ $feature['icon'] }} text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $feature['title'] }}</h3>
                <p class="text-gray-600">{{ $feature['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Classes Preview Section -->
<div class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Classes</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Discover our wide range of classes designed for all fitness levels.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- HIIT Training -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/hiit.jpeg') }}" alt="HIIT Training" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">HIIT Training</h3>
                    <p class="text-gray-600 mb-4">High-intensity interval training to maximize calorie burn and improve cardiovascular fitness.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Mon, Wed, Fri</span>
                        <a href="{{ route('plans') }}" class="text-red-600 hover:text-red-800 font-medium">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Yoga -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/yoga.jpeg') }}" alt="Yoga Classes" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Yoga Classes</h3>
                    <p class="text-gray-600 mb-4">Find balance and flexibility with our expert-led yoga sessions for all levels.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Tue, Thu, Sat</span>
                        <a href="{{ route('plans') }}" class="text-red-600 hover:text-red-800 font-medium">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Strength Training -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/weights.jpeg') }}" alt="Strength Training" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Strength Training</h3>
                    <p class="text-gray-600 mb-4">Build muscle and increase strength with our comprehensive weight training programs.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Daily Sessions</span>
                        <a href="{{ route('plans') }}" class="text-red-600 hover:text-red-800 font-medium">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-red-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to Start Your Fitness Journey?</h2>
        <p class="text-xl text-red-100 mb-8">Join Cocksville Fitness today and transform your life with our expert guidance.</p>
        <a href="{{ route('register') }}" class="inline-block bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">Join Now</a>
    </div>
</div>
@endsection