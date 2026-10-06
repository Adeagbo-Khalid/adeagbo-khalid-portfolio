<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Adeagbo Khalid A. — Full-Stack Software Developer')</title>
    <meta name="description" content="@yield('description', 'Full-stack software developer building Laravel, Web3, and AI-powered products.')">

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

            <a href="#contact" class="hidden sm:inline-flex px-5 py-2 bg-orange text-ink font-semibold text-sm rounded-full hover:opacity-90 transition">
                Hire Me
            </a>

        </nav>
    </header>

    <main class="pt-16">
        @yield('content')
    </main>

</body>
</html>