<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce Dashboard')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>

    <!-- Tailwind & JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 flex flex-col md:flex-row">

    <!-- Mobile Top Navigation Header -->
    <header class="md:hidden flex items-center justify-between px-6 py-4 bg-slate-900 border-b border-slate-800 sticky top-0 z-40">
        <a href="{{ route('products.index') }}" class="flex items-center gap-2.5 no-underline">
            <div class="w-9 h-9 bg-gradient-to-tr from-violet-600 to-cyan-400 rounded-xl flex items-center justify-center font-extrabold text-white shadow-[0_0_15px_rgba(139,92,246,0.2)]">E</div>
            <span class="text-white font-extrabold text-xl tracking-tight">e<span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-cyan-400">Commerce</span></span>
        </a>
        <button id="mobile-menu-btn" class="text-slate-400 hover:text-white focus:outline-none p-1.5 hover:bg-slate-800 rounded-lg transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </header>

    <!-- Sidebar Navigation -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-72 bg-slate-900 border-r border-slate-800/80 p-6 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col justify-between">
        <div class="flex flex-col gap-8">
            <!-- Brand Logo -->
            <div class="flex items-center justify-between">
                <a href="{{ route('products.index') }}" class="flex items-center gap-3 no-underline">
                    <div class="w-10 h-10 bg-gradient-to-tr from-violet-600 to-cyan-400 rounded-xl flex items-center justify-center font-extrabold text-white shadow-[0_0_20px_rgba(139,92,246,0.3)]">E</div>
                    <span class="text-white font-extrabold text-2xl tracking-tight">e<span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-cyan-400">Commerce</span></span>
                </a>
                <button id="close-sidebar-btn" class="md:hidden text-slate-400 hover:text-white p-1 hover:bg-slate-800 rounded-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="flex flex-col gap-6">
                <!-- Section: Catalog -->
                <div>
                    <h3 class="px-4 text-[10px] font-bold tracking-widest text-slate-500 uppercase mb-3">Store Catalog</h3>
                    <ul class="space-y-1.5 list-none pl-0">
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->routeIs('products.index') ? 'text-white bg-violet-600/10 border border-violet-500/20 shadow-[inset_0_0_12px_rgba(139,92,246,0.05)]' : 'text-slate-400 hover:text-white hover:bg-slate-800/40 border border-transparent' }}">
                                <span class="w-7 h-7 rounded-lg flex items-center justify-center text-sm transition-all duration-200 {{ request()->routeIs('products.index') ? 'bg-gradient-to-tr from-violet-600 to-cyan-500 text-white' : 'bg-slate-800 text-slate-400 group-hover:bg-slate-700 group-hover:text-slate-200' }}">📦</span>
                                <span class="font-medium text-sm">All Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.filtered') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->routeIs('products.filtered') ? 'text-white bg-violet-600/10 border border-violet-500/20 shadow-[inset_0_0_12px_rgba(139,92,246,0.05)]' : 'text-slate-400 hover:text-white hover:bg-slate-800/40 border border-transparent' }}">
                                <span class="w-7 h-7 rounded-lg flex items-center justify-center text-sm transition-all duration-200 {{ request()->routeIs('products.filtered') ? 'bg-gradient-to-tr from-violet-600 to-cyan-500 text-white' : 'bg-slate-800 text-slate-400 group-hover:bg-slate-700 group-hover:text-slate-200' }}">💎</span>
                                <span class="font-medium text-sm">Premium Products</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section: People -->
                <div>
                    <h3 class="px-4 text-[10px] font-bold tracking-widest text-slate-500 uppercase mb-3">Customers</h3>
                    <ul class="space-y-1.5 list-none pl-0">
                        <li class="nav-item">
                            <a href="{{ route('customers.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->routeIs('customers.index') ? 'text-white bg-violet-600/10 border border-violet-500/20 shadow-[inset_0_0_12px_rgba(139,92,246,0.05)]' : 'text-slate-400 hover:text-white hover:bg-slate-800/40 border border-transparent' }}">
                                <span class="w-7 h-7 rounded-lg flex items-center justify-center text-sm transition-all duration-200 {{ request()->routeIs('customers.index') ? 'bg-gradient-to-tr from-violet-600 to-cyan-500 text-white' : 'bg-slate-800 text-slate-400 group-hover:bg-slate-700 group-hover:text-slate-200' }}">👥</span>
                                <span class="font-medium text-sm">All Customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('customers.filtered') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->routeIs('customers.filtered') ? 'text-white bg-violet-600/10 border border-violet-500/20 shadow-[inset_0_0_12px_rgba(139,92,246,0.05)]' : 'text-slate-400 hover:text-white hover:bg-slate-800/40 border border-transparent' }}">
                                <span class="w-7 h-7 rounded-lg flex items-center justify-center text-sm transition-all duration-200 {{ request()->routeIs('customers.filtered') ? 'bg-gradient-to-tr from-violet-600 to-cyan-500 text-white' : 'bg-slate-800 text-slate-400 group-hover:bg-slate-700 group-hover:text-slate-200' }}">📍</span>
                                <span class="font-medium text-sm">Cairo Customers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Footer Brand Info -->
        <div class="border-t border-slate-800/60 pt-4 text-center">
            <span class="text-xs text-slate-500 font-medium">NTI E-Commerce Admin v1.0</span>
        </div>
    </aside>

    <!-- Overlay for mobile menu -->
    <div id="sidebar-overlay" class="fixed inset-0 z-40 bg-slate-950/80 backdrop-blur-sm hidden transition-opacity duration-300"></div>

    <!-- Main Content Frame -->
    <div class="flex-1 md:pl-72 flex flex-col min-h-screen">
        <main class="flex-grow p-6 md:p-10 flex flex-col">
            <!-- Content Header -->
            <header class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-2xl md:text-3xl font-extrabold text-white tracking-tight">@yield('page_title')</h1>
                    <p class="text-sm text-slate-400 mt-1">@yield('page_subtitle', 'Overview of your E-commerce system')</p>
                </div>
                @yield('header_actions')
            </header>

            <!-- Main Content Slot -->
            <div class="flex-1 flex flex-col">
                @yield('content')
            </div>

            <!-- Dashboard Footer -->
            <footer class="mt-12 pt-6 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 font-medium">
                <span>eCommerce Hub &copy; {{ date('Y') }}</span>
                <span class="flex items-center gap-1.5">
                    Designed with <span class="text-rose-500">♥</span> using Tailwind CSS v4
                </span>
            </footer>
        </main>
    </div>

    <!-- Mobile Navigation Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('close-sidebar-btn');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            const toggleMenu = (open) => {
                if (open) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }
            };

            menuBtn.addEventListener('click', () => toggleMenu(true));
            closeBtn.addEventListener('click', () => toggleMenu(false));
            overlay.addEventListener('click', () => toggleMenu(false));
        });
    </script>
</body>
</html>
