@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-900">
    <!-- Header Section -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                Membership Plans
            </h1>
            <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500 dark:text-gray-400">
                Choose the perfect plan that fits your fitness goals and lifestyle.
            </p>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-3">
            @foreach($plans as $plan)
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm divide-y divide-gray-200 dark:divide-gray-700">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $plan['name'] }}</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900 dark:text-white">${{ $plan['price'] }}</span>
                        <span class="text-base font-medium text-gray-500 dark:text-gray-400">/{{ $plan['duration'] }}</span>
                    </p>
                    <a href="{{ route('register') }}" class="mt-8 block w-full bg-red-600 border border-transparent rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-red-700">Get Started</a>
                </div>
                <div class="pt-6 pb-8 px-6">
                    <h3 class="text-xs font-medium text-gray-900 dark:text-white tracking-wide uppercase">What's included</h3>
                    <ul role="list" class="mt-6 space-y-4">
                        @foreach($plan['features'] as $feature)
                        <li class="flex space-x-3">
                            <i class="fas fa-check flex-shrink-0 h-5 w-5 text-green-500"></i>
                            <span class="text-base text-gray-500 dark:text-gray-400">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
            Frequently asked questions
        </h2>
        <div class="mt-12">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-12">
                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                        What's the minimum contract duration?
                    </dt>
                    <dd class="mt-2 text-base text-gray-500 dark:text-gray-400">
                        Our memberships are month-to-month with no long-term commitment required.
                    </dd>
                </div>

                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                        Can I freeze my membership?
                    </dt>
                    <dd class="mt-2 text-base text-gray-500 dark:text-gray-400">
                        Yes, you can freeze your membership for up to 3 months per year.
                    </dd>
                </div>

                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                        Are there any signup fees?
                    </dt>
                    <dd class="mt-2 text-base text-gray-500 dark:text-gray-400">
                        No, we don't charge any signup or enrollment fees.
                    </dd>
                </div>

                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                        Can I upgrade my plan?
                    </dt>
                    <dd class="mt-2 text-base text-gray-500 dark:text-gray-400">
                        Yes, you can upgrade your plan at any time. The new rate will be prorated.
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-red-600">
        <div class="max-w-2xl mx-auto py-16 px-4 text-center sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Ready to get started?</span>
                <span class="block text-red-200">Join now and get your first month at 50% off!</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-red-200">
                Limited time offer for new members. Terms and conditions apply.
            </p>
            <a href="{{ route('contact.index') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-red-50 sm:w-auto">
                Contact Us
            </a>
        </div>
    </div>
</div>
@endsection