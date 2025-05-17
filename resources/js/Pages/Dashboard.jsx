import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {/* Statistics Grid */}
                    <div className="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 mb-6">
                        {/* Active Members Card */}
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6">
                                <div className="text-gray-500 dark:text-gray-400 text-sm">Active Members</div>
                                <div className="text-2xl font-bold text-gray-900 dark:text-gray-100">250</div>
                                <div className="text-green-600 text-xs">↑ 12% from last month</div>
                            </div>
                        </div>

                        {/* Revenue Card */}
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6">
                                <div className="text-gray-500 dark:text-gray-400 text-sm">Monthly Revenue</div>
                                <div className="text-2xl font-bold text-gray-900 dark:text-gray-100">$15,240</div>
                                <div className="text-green-600 text-xs">↑ 8% from last month</div>
                            </div>
                        </div>

                        {/* New Members Card */}
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6">
                                <div className="text-gray-500 dark:text-gray-400 text-sm">New Members</div>
                                <div className="text-2xl font-bold text-gray-900 dark:text-gray-100">24</div>
                                <div className="text-gray-600 text-xs">This month</div>
                            </div>
                        </div>

                        {/* Expiring Memberships Card */}
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6">
                                <div className="text-gray-500 dark:text-gray-400 text-sm">Expiring Soon</div>
                                <div className="text-2xl font-bold text-gray-900 dark:text-gray-100">15</div>
                                <div className="text-amber-600 text-xs">Next 7 days</div>
                            </div>
                        </div>
                    </div>

                    {/* Recent Activity and Quick Actions */}
                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        {/* Recent Activity */}
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6">
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Recent Activity</h3>
                                <div className="space-y-4">
                                    {/* Activity items */}
                                    <div className="flex items-center justify-between">
                                        <div className="flex items-center">
                                            <div className="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                            <div>
                                                <p className="text-sm text-gray-900 dark:text-gray-100">New member registration</p>
                                                <p className="text-xs text-gray-500">John Doe</p>
                                            </div>
                                        </div>
                                        <span className="text-xs text-gray-500">2 min ago</span>
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <div className="flex items-center">
                                            <div className="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                            <div>
                                                <p className="text-sm text-gray-900 dark:text-gray-100">Membership renewal</p>
                                                <p className="text-xs text-gray-500">Sarah Smith</p>
                                            </div>
                                        </div>
                                        <span className="text-xs text-gray-500">1 hour ago</span>
                                    </div>
                                    <div className="flex items-center justify-between">
                                        <div className="flex items-center">
                                            <div className="w-2 h-2 bg-amber-500 rounded-full mr-3"></div>
                                            <div>
                                                <p className="text-sm text-gray-900 dark:text-gray-100">Payment received</p>
                                                <p className="text-xs text-gray-500">Mike Johnson - $50</p>
                                            </div>
                                        </div>
                                        <span className="text-xs text-gray-500">2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* Quick Actions */}
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6">
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Quick Actions</h3>
                                <div className="grid grid-cols-2 gap-4">
                                    <button className="p-4 bg-indigo-50 dark:bg-indigo-900/50 rounded-lg text-left hover:bg-indigo-100 dark:hover:bg-indigo-900/75 transition">
                                        <h4 className="text-sm font-medium text-indigo-700 dark:text-indigo-300">Add Member</h4>
                                        <p className="text-xs text-indigo-600 dark:text-indigo-400 mt-1">Register new member</p>
                                    </button>
                                    <button className="p-4 bg-green-50 dark:bg-green-900/50 rounded-lg text-left hover:bg-green-100 dark:hover:bg-green-900/75 transition">
                                        <h4 className="text-sm font-medium text-green-700 dark:text-green-300">Record Payment</h4>
                                        <p className="text-xs text-green-600 dark:text-green-400 mt-1">Process payment</p>
                                    </button>
                                    <button className="p-4 bg-amber-50 dark:bg-amber-900/50 rounded-lg text-left hover:bg-amber-100 dark:hover:bg-amber-900/75 transition">
                                        <h4 className="text-sm font-medium text-amber-700 dark:text-amber-300">View Schedule</h4>
                                        <p className="text-xs text-amber-600 dark:text-amber-400 mt-1">Class timetable</p>
                                    </button>
                                    <button className="p-4 bg-blue-50 dark:bg-blue-900/50 rounded-lg text-left hover:bg-blue-100 dark:hover:bg-blue-900/75 transition">
                                        <h4 className="text-sm font-medium text-blue-700 dark:text-blue-300">Reports</h4>
                                        <p className="text-xs text-blue-600 dark:text-blue-400 mt-1">View analytics</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
