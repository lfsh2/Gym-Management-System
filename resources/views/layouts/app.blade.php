<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cocksville Fitness Gym - @yield('title', 'Welcome')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <i class="fas fa-dumbbell text-red-600 text-2xl"></i>
                    <span class="text-xl font-bold">ForeverLife Cocksville Fitness</span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">Home</a>
                    <a href="{{ route('features') }}" class="nav-link {{ request()->routeIs('features') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">Features</a>
                    <a href="{{ route('plans') }}" class="nav-link {{ request()->routeIs('plans') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">Plans</a>
                    <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.index') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">Contact</a>
                    
                    @auth
                        <div class="relative group">
                            <button class="flex items-center space-x-1 text-gray-600 hover:text-red-600">
                                <span>{{ Auth::user()->name }}</span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>
                            <div class="absolute right-0 w-48 mt-2 py-2 bg-white rounded-lg shadow-xl hidden group-hover:block">
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-800 hover:bg-red-50">Dashboard</a>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-800 hover:bg-red-50">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-800 hover:bg-red-50">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-red-600">Login</a>
                        <a href="{{ route('register') }}" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors duration-300">Join Now</a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-gray-600">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden pb-6">
                <a href="{{ route('home') }}" class="block py-2 text-gray-600 hover:text-red-600">Home</a>
                <a href="{{ route('features') }}" class="block py-2 text-gray-600 hover:text-red-600">Features</a>
                <a href="{{ route('plans') }}" class="block py-2 text-gray-600 hover:text-red-600">Plans</a>
                <a href="{{ route('contact.index') }}" class="block py-2 text-gray-600 hover:text-red-600">Contact</a>
                
                @auth
                    <hr class="my-2 border-gray-200">
                    <a href="{{ route('dashboard') }}" class="block py-2 text-gray-600 hover:text-red-600">Dashboard</a>
                    <a href="{{ route('profile.edit') }}" class="block py-2 text-gray-600 hover:text-red-600">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left py-2 text-gray-600 hover:text-red-600">Logout</button>
                    </form>
                @else
                    <hr class="my-2 border-gray-200">
                    <a href="{{ route('login') }}" class="block py-2 text-gray-600 hover:text-red-600">Login</a>
                    <a href="{{ route('register') }}" class="block py-2 text-gray-600 hover:text-red-600">Join Now</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">California Fitness</h4>
                    <p class="text-gray-400">Transform your life with state-of-the-art facilities and expert guidance.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('features') }}" class="text-gray-400 hover:text-white">Features</a></li>
                        <li><a href="{{ route('plans') }}" class="text-gray-400 hover:text-white">Plans</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Newsletter</h4>
                    <form class="space-y-4">
                        <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded-lg text-black">
                        <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} ForeverLife Fitness. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>