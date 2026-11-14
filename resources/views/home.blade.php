@extends('layouts.app')

@section('content')

    @php
        $projects = [
            [
                'name' => 'Daorader AI',
                'image' => 'daorader',
                'desc' => 'Aggregates and intelligently organizes opportunities into a personalized recommendation engine, powered by the Zero Authority DAO ecosystem.',
                'tags' => ['Node.js', 'Web3'],
                'live' => 'https://dao-radar-ai.onrender.com',
                'github' => 'https://github.com/Adeagbo-Khalid/dao-radar-ai',
            ],
            [
                'name' => 'Client Portfolio Site',
                'image' => 'client-portfolio',
                'desc' => 'A one-page portfolio built for a collaborator, with a dark, futuristic design. Deployed and live.',
                'tags' => ['Laravel', 'Client Work'],
                'live' => 'https://nofiu-portfolio.vercel.app/',
                'github' => null,
            ],
            [
                'name' => 'RewriteAI',
                'image' => 'rewriteai',
                'desc' => 'An AI-powered writing assistant that rewrites, fixes grammar, adjusts tone, and summarizes text on demand.',
                'tags' => ['JavaScript', 'OpenRouter', 'LanguageTool'],
                'live' => 'https://rewrite-ai-nooi.onrender.com',
                'github' => null,
            ],
            [
                'name' => 'AlegeOfficial Platform',
                'image' => 'alegeofficial',
                'desc' => 'A full client site built for a Web3 Twitter/X influencer, with About, Skills, Case Studies, Experience, Services, and a contact section.',
                'tags' => ['Web3', 'Client Work'],
                'live' => 'https://my-project-ms3v.onrender.com',
                'github' => null,
            ],
            [
                'name' => 'TinyHop',
                'image' => 'tinyhop',
                'desc' => 'A URL shortener that turns long links into short, shareable ones.',
                'tags' => ['Laravel', 'URL Shortener'],
                'live' => 'https://tinyhop-64nx.onrender.com',
                'github' => null,
            ],
        ];

        $skills = [
            ['name' => 'Laravel', 'icon' => 'laravel'],
            ['name' => 'PHP', 'icon' => 'php'],
            ['name' => 'MySQL', 'icon' => 'mysql'],
            ['name' => 'Tailwind CSS', 'icon' => 'tailwindcss'],
            ['name' => 'Git & GitHub', 'icon' => 'git'],
            ['name' => 'Livewire', 'icon' => 'livewire'],
        ];
    @endphp

    {{-- HERO --}}
    <section class="min-h-screen flex items-center px-6 md:px-16 py-16 relative">

        <div class="max-w-6xl mx-auto md:mx-0 w-full grid grid-cols-1 lg:grid-cols-[1.3fr_1fr] gap-12 items-center">

            <div>

                <div class="inline-flex items-center gap-2 glass rounded-full px-4 py-1.5 mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-orange"></span>
                    </span>
                    <span class="text-xs text-muted tracking-wide">Available for Work</span>
                </div>

                <p class="text-sm font-medium text-blue-soft tracking-wide mb-6">
                    Full-Stack Laravel Developer
                </p>

                <h1 class="font-display font-bold text-5xl md:text-7xl leading-tight mb-6">
                    ADEAGBO<br>
                    <span class="bg-gradient-to-r from-blue to-orange bg-clip-text text-transparent">KHALID A.</span>
                </h1>

                <p class="text-muted text-lg md:text-xl mb-10 max-w-xl leading-relaxed">
                    Problem Solver &middot; Builder &middot; Lifelong Learner. Crafting fast, reliable products across web and Web3.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#projects" class="px-7 py-3.5 bg-gradient-to-r from-blue to-orange text-white font-semibold rounded-full hover:opacity-90 transition glow-blue">
                        View Projects
                    </a>
                    <a href="#contact" class="px-7 py-3.5 glass text-text font-semibold rounded-full hover:border-orange/50 transition">
                        Hire Me
                    </a>
                </div>

            </div>

            <div class="order-first lg:order-last flex justify-center lg:justify-end">
                <div class="relative w-56 h-56 md:w-72 md:h-72 lg:w-80 lg:h-80">
                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-blue to-orange opacity-30 blur-2xl"></div>
                    <div class="relative w-full h-full rounded-full overflow-hidden glass p-1.5">
                        @if (file_exists(public_path('images/khalid.jpg')))
                            <img src="{{ asset('images/khalid.jpg') }}" alt="Adeagbo Khalid A." class="w-full h-full object-cover rounded-full">
                        @else
                            <div class="w-full h-full rounded-full bg-gradient-to-br from-blue/40 to-orange/40 flex items-center justify-center">
                                <span class="font-display font-bold text-6xl text-white/90">AK</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </section>

    {{-- ABOUT --}}
    <section id="about" class="px-6 md:px-16 py-28">

        <div class="max-w-4xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-orange-soft tracking-wide mb-3">About Me</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-8">Who I Am</h2>

            <p class="text-text text-lg leading-relaxed mb-6 max-w-2xl">
                I'm Khalid, a full-stack Laravel developer building tools that solve real problems. My work spans internal business tools, Web3-facing platforms, and clean, functional interfaces.
            </p>

            <p class="text-muted text-base leading-relaxed mb-10 max-w-2xl">
                Currently a Junior Software Developer Intern at Peldarg Consulting Ltd, where I help build, test, and maintain web applications. I got my start in tech advocacy as a Campus Ambassador for HAUTHUB, promoting tech training and career development within my campus community.
            </p>

            <div class="glass rounded-2xl p-6 max-w-2xl">
                <p class="text-xs font-mono text-blue-soft mb-2">Education</p>
                <h3 class="font-display font-semibold text-lg mb-1">Educator specializing in Biology</h3>
                <p class="text-sm text-muted leading-relaxed">B.Sc. (Education) in Biology, University of Nigeria, Nsukka. Graduated 2026.</p>
            </div>

        </div>

    </section>

    {{-- SKILLS --}}
    <section id="skills" class="px-6 md:px-16 py-28">

        <div class="max-w-4xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-blue-soft tracking-wide mb-3">Skills &amp; Expertise</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-12">What I Work With</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                @foreach ($skills as $skill)
                    <div class="glass rounded-xl p-5 flex flex-col items-center gap-3 text-center hover:-translate-y-1 hover:glow-blue transition">
                        <div class="w-10 h-10 flex items-center justify-center">
                            <img src="https://cdn.simpleicons.org/{{ $skill['icon'] }}/E8ECF4" alt="{{ $skill['name'] }}" class="max-w-full max-h-full">
                        </div>
                        <span class="text-sm font-medium text-text">{{ $skill['name'] }}</span>
                    </div>
                @endforeach
            </div>

            <p class="text-sm font-medium text-orange-soft tracking-wide mt-14 mb-6">Creative</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                <div class="glass rounded-xl p-5 flex flex-col items-center gap-3 text-center hover:-translate-y-1 hover:glow-orange transition">
                    <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8" class="w-10 h-10">
                            <rect x="2" y="5" width="14" height="14" rx="2" />
                            <path d="M16 10l6-3v10l-6-3z" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-text">Video Creation</span>
                </div>
                <div class="glass rounded-xl p-5 flex flex-col items-center gap-3 text-center hover:-translate-y-1 hover:glow-orange transition">
                    <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8" class="w-10 h-10">
                            <path d="M12 19l7-7 3 3-7 7-3-3z" stroke-linejoin="round" />
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" stroke-linejoin="round" />
                            <circle cx="11" cy="11" r="2" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-text">Graphic Design</span>
                </div>
            </div>

        </div>

    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="px-6 md:px-16 py-28">

        <div class="max-w-5xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-orange-soft tracking-wide mb-3">Projects</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-12">Selected Work</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                @foreach ($projects as $project)
                    @php
                        $imagePath = 'images/projects/' . $project['image'] . '.png';
                        $hasImage = file_exists(public_path($imagePath));
                    @endphp

                    <div class="glass rounded-2xl overflow-hidden hover:-translate-y-1 hover:glow-blue transition flex flex-col">

                        <div class="h-44 overflow-hidden">
                            @if ($hasImage)
                                <img src="{{ asset($imagePath) }}" alt="{{ $project['name'] }} screenshot" loading="lazy" class="w-full h-full object-cover object-top">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-blue/30 to-orange/20 flex items-center justify-center px-6">
                                    <span class="font-display font-semibold text-xl text-white/70 text-center">{{ $project['name'] }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="font-display font-semibold text-xl mb-2">{{ $project['name'] }}</h3>
                            <p class="text-muted text-sm leading-relaxed mb-4">{{ $project['desc'] }}</p>

                            <div class="flex flex-wrap gap-2 mb-5">
                                @foreach ($project['tags'] as $tag)
                                    <span class="text-[11px] font-mono px-2.5 py-1 rounded-full bg-blue/10 text-blue-soft">{{ $tag }}</span>
                                @endforeach
                            </div>

                            <div class="flex gap-4 text-sm font-medium mt-auto">
                                <a href="{{ $project['live'] }}" target="_blank" rel="noopener" class="text-orange hover:underline">Live Demo &rarr;</a>
                                @if ($project['github'])
                                    <a href="{{ $project['github'] }}" target="_blank" rel="noopener" class="text-muted hover:text-text transition">GitHub</a>
                                @endif
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    {{-- EXPERIENCE --}}
    <section id="experience" class="px-6 md:px-16 py-28">

        <div class="max-w-3xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-blue-soft tracking-wide mb-3">Experience</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-12">Where I've Worked</h2>

            <div class="relative border-l border-border pl-8 space-y-12">

                <div class="relative">
                    <span class="absolute -left-[38px] top-1 w-3 h-3 rounded-full bg-orange glow-orange"></span>
                    <p class="text-xs font-mono text-muted mb-1">2026 &ndash; Present</p>
                    <h3 class="font-display font-semibold text-lg mb-1">Junior Software Developer Intern</h3>
                    <p class="text-sm text-orange-soft mb-2">Peldarg Consulting Ltd</p>
                    <p class="text-muted text-sm leading-relaxed">Assist in developing, testing, and maintaining web applications; prepare technical documentation; participate in QA.</p>
                </div>

                <div class="relative">
                    <span class="absolute -left-[38px] top-1 w-3 h-3 rounded-full bg-blue glow-blue"></span>
                    <p class="text-xs font-mono text-muted mb-1">2024 &ndash; 2025</p>
                    <h3 class="font-display font-semibold text-lg mb-1">Campus Ambassador</h3>
                    <p class="text-sm text-blue-soft mb-2">HAUTHUB</p>
                    <p class="text-muted text-sm leading-relaxed">Promoted tech training and career development initiatives within the campus community.</p>
                </div>

            </div>

        </div>

    </section>

    {{-- SERVICES --}}
    <section id="services" class="px-6 md:px-16 py-28">

        <div class="max-w-5xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-orange-soft tracking-wide mb-3">Services</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-12">How I Can Help</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <div class="glass rounded-xl p-6 hover:-translate-y-1 hover:glow-blue transition">
                    <h3 class="font-display font-semibold mb-2">Full-Stack Laravel Development</h3>
                    <p class="text-muted text-sm leading-relaxed">End-to-end web applications built on Laravel and PHP.</p>
                </div>

                <div class="glass rounded-xl p-6 hover:-translate-y-1 hover:glow-blue transition">
                    <h3 class="font-display font-semibold mb-2">Web3 Integration</h3>
                    <p class="text-muted text-sm leading-relaxed">Building tools and platforms for DAO and Web3 ecosystems.</p>
                </div>

                <div class="glass rounded-xl p-6 hover:-translate-y-1 hover:glow-blue transition">
                    <h3 class="font-display font-semibold mb-2">AI-Powered Tools</h3>
                    <p class="text-muted text-sm leading-relaxed">Integrating AI APIs into practical, everyday tools.</p>
                </div>

                <div class="glass rounded-xl p-6 hover:-translate-y-1 hover:glow-blue transition">
                    <h3 class="font-display font-semibold mb-2">Custom Portfolio Sites</h3>
                    <p class="text-muted text-sm leading-relaxed">Personal and client portfolio builds with modern design.</p>
                </div>

            </div>

        </div>

    </section>

    {{-- CTA --}}
    <section class="px-6 md:px-16 py-28">
        <div class="max-w-4xl mx-auto md:mx-0 glass rounded-3xl p-12 text-center glow-blue">
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-4">Let's Build Something Great</h2>
            <p class="text-muted mb-8 max-w-xl mx-auto">Open to collaborations, freelance work, and full-time opportunities.</p>
            <a href="#contact" class="inline-block px-8 py-4 bg-gradient-to-r from-blue to-orange text-white font-semibold rounded-full hover:opacity-90 transition">
                Start a Conversation
            </a>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="px-6 md:px-16 py-28">

        <div class="max-w-2xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-orange-soft tracking-wide mb-3">Contact</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-6">Get In Touch</h2>

            <p class="text-muted mb-10">Have a project in mind, or just want to connect? Message me on WhatsApp for the fastest reply, or send an email.</p>

            <div class="glass rounded-2xl p-8 mb-8">
                <p class="text-xs font-mono text-muted mb-2">WhatsApp</p>
                <p class="text-lg md:text-xl font-medium text-text mb-6">+234 915 950 4236</p>
                <a href="https://wa.me/2349159504236?text=Hi%20Khalid%2C%20I%27d%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener" class="inline-block px-7 py-3.5 bg-gradient-to-r from-blue to-orange text-white font-semibold rounded-full hover:opacity-90 transition glow-blue">
                    Chat on WhatsApp
                </a>
            </div>

            <div class="glass rounded-2xl p-6 mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <p class="text-xs font-mono text-muted mb-1">Email</p>
                    <p class="text-text break-all">adeagboadedolapo121@gmail.com</p>
                </div>
                <a href="mailto:adeagboadedolapo121@gmail.com" class="inline-block px-6 py-3 glass text-text font-semibold rounded-full hover:border-orange/50 transition text-center">
                    Send Email
                </a>
            </div>

            <div class="flex flex-wrap gap-4 text-sm font-medium">
                <a href="https://x.com/Mallam_Khalid" target="_blank" rel="noopener" class="glass rounded-full px-5 py-2.5 text-text hover:border-orange/50 transition">X (Twitter)</a>
                <a href="https://linkedin.com/in/adeagbo-adedolapo-2a49aa310" target="_blank" rel="noopener" class="glass rounded-full px-5 py-2.5 text-text hover:border-orange/50 transition">LinkedIn</a>
                <a href="https://github.com/Adeagbo-Khalid" target="_blank" rel="noopener" class="glass rounded-full px-5 py-2.5 text-text hover:border-orange/50 transition">GitHub</a>
            </div>

        </div>

    </section>

    {{-- FOOTER --}}
    <footer class="px-6 md:px-16 py-10 border-t border-border">
        <div class="max-w-5xl mx-auto md:mx-0 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="font-display font-semibold">Adeagbo Khalid A.</p>
            <p class="text-sm text-muted">Full-Stack Laravel Developer</p>
            <p class="text-sm text-muted">&copy; {{ date('Y') }}</p>
        </div>
    </footer>

@endsection
