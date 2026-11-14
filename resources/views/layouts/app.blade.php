<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#05070D">

    <title>@yield('title', 'Adeagbo Khalid A. | Full-Stack Laravel Developer')</title>
    <meta name="description" content="@yield('description', 'Full-stack Laravel developer building web applications, AI-powered tools, and Web3 platforms.')">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Adeagbo Khalid A. | Full-Stack Laravel Developer')">
    <meta property="og:description" content="@yield('description', 'Full-stack Laravel developer building web applications, AI-powered tools, and Web3 platforms.')">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary">

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%2305070D'/%3E%3Ctext x='32' y='45' font-family='Arial' font-size='38' font-weight='700' text-anchor='middle' fill='%23F97316'%3EA%3C/text%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ink text-text font-body antialiased relative">

    {{-- Animated gradient background --}}
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="blob-1 absolute -top-40 -left-40 w-[500px] h-[500px] rounded-full bg-blue/20 blur-[120px]"></div>
        <div class="blob-2 absolute top-1/3 -right-40 w-[500px] h-[500px] rounded-full bg-orange/20 blur-[120px]"></div>
        <div class="blob-1 absolute bottom-0 left-1/4 w-[400px] h-[400px] rounded-full bg-blue/10 blur-[100px]"></div>
    </div>

    {{-- NAV --}}
    <header class="fixed top-0 left-0 right-0 z-50 glass">
        <nav class="max-w-6xl mx-auto px-6 md:px-16 h-16 flex items-center justify-between">

            <a href="/" class="font-display font-semibold text-lg whitespace-nowrap">
                Adeagbo Khalid A.
            </a>

            <ul class="hidden md:flex items-center gap-8 font-medium text-sm">
                <li><a href="#about" class="text-muted hover:text-text transition">About</a></li>
                <li><a href="#skills" class="text-muted hover:text-text transition">Skills</a></li>
                <li><a href="#projects" class="text-muted hover:text-text transition">Projects</a></li>
                <li><a href="#experience" class="text-muted hover:text-text transition">Experience</a></li>
                <li><a href="#services" class="text-muted hover:text-text transition">Services</a></li>
            </ul>

            <a href="#contact" class="hidden md:inline-flex px-5 py-2 bg-orange text-ink font-semibold text-sm rounded-full hover:opacity-90 transition">
                Hire Me
            </a>

            <button id="menu-btn" type="button" aria-label="Toggle menu" aria-expanded="false" class="md:hidden p-2 text-text">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </nav>

        <div id="mobile-menu" class="hidden md:hidden border-t border-white/10">
            <div class="px-6 py-5 flex flex-col gap-4 text-sm font-medium">
                <a href="#about" class="text-muted hover:text-text transition">About</a>
                <a href="#skills" class="text-muted hover:text-text transition">Skills</a>
                <a href="#projects" class="text-muted hover:text-text transition">Projects</a>
                <a href="#experience" class="text-muted hover:text-text transition">Experience</a>
                <a href="#services" class="text-muted hover:text-text transition">Services</a>
                <a href="#contact" class="inline-flex justify-center px-5 py-2.5 bg-orange text-ink font-semibold rounded-full">Hire Me</a>
            </div>
        </div>
    </header>

    <main class="pt-16">
        @yield('content')
    </main>

    <script>
        (function () {
            var btn = document.getElementById('menu-btn');
            var menu = document.getElementById('mobile-menu');
            if (!btn || !menu) { return; }

            btn.addEventListener('click', function () {
                var isHidden = menu.classList.toggle('hidden');
                btn.setAttribute('aria-expanded', isHidden ? 'false' : 'true');
            });

            menu.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    menu.classList.add('hidden');
                    btn.setAttribute('aria-expanded', 'false');
                });
            });
        })();
    </script>

</body>
</html>
