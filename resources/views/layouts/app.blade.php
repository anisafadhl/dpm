<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Duta Parama Mandiri - @yield('title', 'Arsitektur & Konstruksi')</title>
    
    <!-- Memanggil CSS Tailwind & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="[https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css)">
    
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <style>
        .admin-element, .admin-element-block, .admin-element-flex { display: none; }
        body.admin-mode .admin-element { display: inline-flex; }
        body.admin-mode .admin-element-block { display: block; }
        body.admin-mode .admin-element-flex { display: flex; }
        .gallery-scroll::-webkit-scrollbar { height: 6px; }
        .gallery-scroll::-webkit-scrollbar-track { background: #e5e7eb; border-radius: 4px; }
        .dark .gallery-scroll::-webkit-scrollbar-track { background: #1f2937; }
        .gallery-scroll::-webkit-scrollbar-thumb { background: #5db2c1; border-radius: 4px; }
        .reveal-on-scroll { opacity: 0; transform: translateY(40px); transition: opacity 0.8s ease-out, transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94); }
        .reveal-on-scroll.is-visible { opacity: 1; transform: translateY(0); }
        
        @media (min-width: 768px) {
            .org-line-vertical::after { content: ''; position: absolute; width: 2px; height: 32px; background-color: var(--color-dpm-teal); bottom: -32px; left: 50%; transform: translateX(-50%); z-index: 0; }
            .org-connector { position: relative; }
            .org-connector::before { content: ''; position: absolute; width: 100%; height: 2px; background-color: var(--color-dpm-teal); top: -32px; left: 0; z-index: 0; }
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-dpm-dark text-gray-800 dark:text-gray-300 font-sans antialiased overflow-x-hidden transition-colors duration-300 {{ session('is_admin') ? 'admin-mode view-portfolio' : '' }}">

    <nav class="fixed w-full z-50 bg-white/90 dark:bg-dpm-card/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border-2 border-dpm-teal flex items-center justify-center relative overflow-hidden bg-white dark:bg-black shadow-sm flex-shrink-0">
                        <span class="text-gray-800 dark:text-gray-300 font-bold text-lg absolute -ml-4">D</span>
                        <span class="text-dpm-teal font-bold text-lg z-10">P</span>
                        <span class="text-dpm-teal font-bold text-lg absolute -mr-5">M</span>
                    </div>
                    <span class="font-bold text-lg tracking-wider text-gray-900 dark:text-white hidden sm:block">Duta Parama Mandiri</span>
                </a>
                
                <div class="hidden lg:block">
                    <div class="ml-10 flex items-baseline space-x-6">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-dpm-teal' : 'text-gray-600' }} hover:text-dpm-teal px-3 py-2 text-sm font-medium transition">Beranda</a>
                        <a href="{{ route('organization') }}" class="{{ request()->routeIs('organization') ? 'text-dpm-teal' : 'text-gray-600' }} hover:text-dpm-teal px-3 py-2 text-sm font-medium transition">Struktur Organisasi</a>
                        <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'text-dpm-teal' : 'text-gray-600' }} hover:text-dpm-teal px-3 py-2 text-sm font-medium transition">Portfolio Lengkap</a>
                    </div>
                </div>

                <div class="flex items-center gap-2 sm:gap-3">
                    <button onclick="toggleTheme()" class="bg-gray-100 dark:bg-gray-800 border dark:border-gray-700 rounded-full w-8 h-8 flex items-center justify-center"><i class="fa-solid fa-moon" id="themeIcon"></i></button>

                    @if(session('is_admin'))
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-gray-100 dark:bg-gray-800 border dark:border-gray-700 rounded-full text-xs py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-700 transition flex items-center gap-2 font-medium">
                                <i class="fa-solid fa-right-from-bracket text-red-500"></i> Logout Admin
                            </button>
                        </form>
                    @else
                        <button onclick="openModal('loginModal')" class="bg-gray-100 dark:bg-gray-800 border dark:border-gray-700 rounded-full text-xs py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-700 transition flex items-center gap-2 font-medium">
                            <i class="fa-solid fa-right-to-bracket"></i> Admin Login
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-100 dark:bg-gray-900 pt-12 pb-8 border-t-4 border-dpm-teal mt-16">
        <div class="max-w-7xl mx-auto text-center text-gray-500 text-xs">
            &copy; 2024 PT Duta Parama Mandiri.
        </div>
    </footer>

    <!-- Modal Login -->
    <div id="loginModal" class="fixed inset-0 bg-gray-900/80 backdrop-blur-sm z-[80] hidden items-center justify-center opacity-0 transition-opacity p-4">
        <div class="bg-white dark:bg-dpm-card border dark:border-gray-800 w-full max-w-sm rounded-xl p-8" id="loginModalBox">
            <div class="flex justify-between mb-6 border-b dark:border-gray-800 pb-3">
                <h3 class="text-xl font-bold dark:text-white">Login Admin</h3>
                <button onclick="closeModal('loginModal')" class="text-gray-400"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>
            
            @if(session('error'))
                <div class="bg-red-100 text-red-700 p-2 text-sm rounded mb-4">{{ session('error') }}</div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-400 mb-1">Username</label>
                    <input type="text" name="username" required class="w-full mb-4 bg-gray-50 dark:bg-black border dark:border-gray-700 p-2.5 rounded text-gray-900 dark:text-white outline-none focus:ring-2 focus:ring-dpm-teal" placeholder="Masukkan username">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-400 mb-1">Password</label>
                    <input type="password" name="password" required class="w-full mb-4 bg-gray-50 dark:bg-black border dark:border-gray-700 p-2.5 rounded text-gray-900 dark:text-white outline-none focus:ring-2 focus:ring-dpm-teal" placeholder="Masukkan password">
                </div>
                <button type="submit" class="w-full py-2.5 mt-2 bg-dpm-teal text-white font-bold rounded hover:bg-teal-600 transition">Masuk</button>
            </form>
        </div>
    </div>

    <script>
        @if(session('error'))
            openModal('loginModal');
        @endif

        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            localStorage.setItem('color-theme', html.classList.contains('dark') ? 'dark' : 'light');
            
            const themeIcon = document.getElementById('themeIcon');
            if (html.classList.contains('dark')) {
                themeIcon.classList.remove('fa-moon'); themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun'); themeIcon.classList.add('fa-moon');
            }
        }
        
        function openModal(id) {
            const m = document.getElementById(id);
            m.classList.remove('hidden'); m.classList.add('flex');
            setTimeout(() => m.classList.remove('opacity-0'), 10);
        }
        
        function closeModal(id) {
            const m = document.getElementById(id);
            m.classList.add('opacity-0');
            setTimeout(() => { m.classList.add('hidden'); m.classList.remove('flex'); }, 300);
        }
        
        document.addEventListener("DOMContentLoaded", () => {
            if (document.documentElement.classList.contains('dark')) {
                document.getElementById('themeIcon').classList.replace('fa-moon', 'fa-sun');
            }
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '0px', threshold: 0.15 });

            document.querySelectorAll('.reveal-on-scroll').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>