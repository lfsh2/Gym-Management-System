@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-900">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/gym3.webp') }}" alt="Gym Equipment" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Our Features</h1>
            <p class="mt-6 max-w-3xl text-xl text-gray-300">
                Experience premium fitness with state-of-the-art equipment and facilities designed to help you achieve your fitness goals.
            </p>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
            @foreach($features as $feature)
            <div class="relative p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg feature-card">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="rounded-full bg-red-600 p-3">
                        <i class="fas fa-{{ $feature['icon'] }} text-white text-2xl"></i>
                    </div>
                </div>
                <div class="pt-4">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center">{{ $feature['name'] }}</h3>
                    <p class="mt-4 text-base text-gray-500 dark:text-gray-400 text-center">{{ $feature['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Amenities Section -->
    <div class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Premium Amenities
                </h2>
                <p class="mt-4 text-xl text-gray-600 dark:text-gray-400">
                    Everything you need for a comfortable and productive workout experience.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Locker Rooms -->
                <div class="relative">
                    <div class="aspect-w-3 aspect-h-2">
                        <img src="{{ asset('images/locker.jpeg') }}" alt="Locker Rooms" class="object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Modern Locker Rooms</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Spacious locker rooms with showers, towel service, and personal storage.</p>
                    </div>
                </div>

                <!-- Cardio Area -->
                <div class="relative">
                    <div class="aspect-w-3 aspect-h-2">
                        <img src="{{ asset('images/cardio.jpeg') }}" alt="Cardio Equipment" class="object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Cardio Zone</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Latest cardio equipment with built-in entertainment systems.</p>
                    </div>
                </div>

                <!-- Strength Area -->
                <div class="relative">
                    <div class="aspect-w-3 aspect-h-2">
                        <img src="{{ asset('images/weights.jpeg') }}" alt="Strength Training" class="object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Strength Training</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Comprehensive selection of free weights and resistance machines.</p>
                    </div>
                </div>

                <!-- HIIT Studio -->
                <div class="relative">
                    <div class="aspect-w-3 aspect-h-2">
                        <img src="{{ asset('images/hiit.jpeg') }}" alt="HIIT Studio" class="object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">HIIT Studio</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Dedicated space for high-intensity interval training sessions.</p>
                    </div>
                </div>

                <!-- Yoga Studio -->
                <div class="relative">
                    <div class="aspect-w-3 aspect-h-2">
                        <img src="{{ asset('images/yoga.jpeg') }}" alt="Yoga Studio" class="object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Yoga Studio</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Peaceful environment for yoga and mindfulness classes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-red-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to start your fitness journey?</span>
                <span class="block text-red-200">Join us today and transform your life.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-red-50">
                        Get Started
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="{{ route('contact.index') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700 hover:bg-red-800">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection