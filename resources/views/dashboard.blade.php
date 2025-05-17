@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <!-- Welcome Section -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Welcome Back, {{ Auth::user()->name }}!
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Track your fitness progress, manage your membership, and stay updated with your gym activities.
                </p>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Membership Status -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-id-card text-red-600 text-3xl mr-4"></i>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Membership Status</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">Active</p>
                    </div>
                </div>
            </div>

            <!-- Days Until Renewal -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-calendar text-red-600 text-3xl mr-4"></i>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Days Until Renewal</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">15 Days</p>
                    </div>
                </div>
            </div>

            <!-- Classes This Month -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-dumbbell text-red-600 text-3xl mr-4"></i>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Classes This Month</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">8 Classes</p>
                    </div>
                </div>
            </div>

            <!-- Personal Training -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-user-friends text-red-600 text-3xl mr-4"></i>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">PT Sessions Left</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">3 Sessions</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Classes -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-full">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                    Upcoming Classes
                </h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Class</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Instructor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Time</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">HIIT Training</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">John Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">May 10, 2025</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">09:00 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Confirmed
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">Yoga Flow</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">Sarah Johnson</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">May 11, 2025</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">10:30 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Waitlist
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Book a Class -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Book a Class</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    Browse and book your next fitness class from our wide selection of offerings.
                </p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    View Schedule
                </a>
            </div>

            <!-- Schedule PT Session -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Personal Training</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    Schedule your next personal training session with one of our expert trainers.
                </p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Book Session
                </a>
            </div>

            <!-- View Progress -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Fitness Progress</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    Track your fitness journey and view your progress over time.
                </p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    View Progress
                </a>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                    Upcoming Events
                </h2>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 text-center">
                            <div class="text-lg font-bold text-red-600">15</div>
                            <div class="text-xs text-gray-500">MAY</div>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Summer Fitness Challenge</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Join our 30-day summer fitness challenge with amazing prizes!</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 text-center">
                            <div class="text-lg font-bold text-red-600">20</div>
                            <div class="text-xs text-gray-500">MAY</div>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Nutrition Workshop</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Learn about proper nutrition and meal planning with our experts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection