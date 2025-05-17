@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-900">
    <!-- Header Section -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                Contact Us
            </h1>
            <p class="mt-4 text-xl text-gray-500 dark:text-gray-400">
                Have questions? We'd love to hear from you.
            </p>
        </div>
    </div>

    <!-- Success Message -->
    @if (session('success'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-md bg-green-50 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-400"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Contact Form Section -->
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
        <div class="py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
            <div class="max-w-lg mx-auto">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                    Get in touch
                </h2>
                <p class="mt-3 text-lg leading-6 text-gray-500 dark:text-gray-400">
                    We're here to help and answer any questions you might have.
                </p>
                <dl class="mt-8 text-base text-gray-500 dark:text-gray-400">
                    <div class="mt-6">
                        <dt class="sr-only">Phone number</dt>
                        <dd class="flex">
                            <i class="fas fa-phone-alt flex-shrink-0 h-6 w-6 text-gray-400"></i>
                            <span class="ml-3">+1 (555) 123-4567</span>
                        </dd>
                    </div>
                    <div class="mt-3">
                        <dt class="sr-only">Email</dt>
                        <dd class="flex">
                            <i class="fas fa-envelope flex-shrink-0 h-6 w-6 text-gray-400"></i>
                            <span class="ml-3">foreverlife@yahoo.com</span>
                        </dd>
                    </div>
                    <div class="mt-3">
                        <dt class="sr-only">Address</dt>
                        <dd class="flex">
                            <i class="fas fa-map-marker-alt flex-shrink-0 h-6 w-6 text-gray-400"></i>
                            <span class="ml-3">10880 Railroad Ave<br>Cocksville, California</span>
                        </dd>
                    </div>
                </dl>
                <p class="mt-6 text-base text-gray-500 dark:text-gray-400">
                    Looking for careers?
                    <a href="#" class="font-medium text-red-600 hover:text-red-500">View our job openings</a>.
                </p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
            <div class="max-w-lg mx-auto lg:max-w-none">
                <form action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 gap-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-red-500 focus:border-red-500 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Your name">
                            @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-red-500 focus:border-red-500 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="your@email.com">
                            @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                        <div class="mt-1">
                            <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-red-500 focus:border-red-500 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="(555) 123-4567">
                            @error('phone')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Subject</label>
                        <div class="mt-1">
                            <input type="text" name="subject" id="subject" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-red-500 focus:border-red-500 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="How can we help?">
                            @error('subject')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                        <div class="mt-1">
                            <textarea id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-red-500 focus:border-red-500 border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Your message"></textarea>
                            @error('message')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="mt-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden">
      <div class="relative h-96">
        <iframe
          class="absolute inset-0 w-full h-full border-0"
          src="https://www.google.com/maps?q=10880+Railroad+Ave,+Cockeysville,+California&output=embed"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</div>

</div>
@endsection