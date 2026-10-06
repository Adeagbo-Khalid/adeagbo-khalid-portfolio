@extends('layouts.app')

@section('content')

    {{-- HERO --}}
    <section class="min-h-screen flex items-center px-6 md:px-16 relative">

        <div class="max-w-4xl mx-auto md:mx-0 w-full">

            <div class="inline-flex items-center gap-2 glass rounded-full px-4 py-1.5 mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-orange"></span>
                </span>
                <span class="text-xs text-muted tracking-wide">Available for Work</span>
            </div>

            <p class="text-sm font-medium text-blue-soft tracking-wide mb-6">
                Full-Stack Software Developer
            </p>

            <h1 class="font-display font-bold text-5xl md:text-7xl leading-tight mb-6">
                ADEAGBO<br>
                <span class="bg-gradient-to-r from-blue to-orange bg-clip-text text-transparent">KHALID A.</span>
            </h1>

            <p class="text-muted text-lg md:text-xl mb-10 max-w-xl leading-relaxed">
                Problem Solver &middot; Builder &middot; Lifelong Learner &mdash; crafting fast, reliable products across web and Web3.
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

    </section>

    {{-- ABOUT --}}
    <section id="about" class="px-6 md:px-16 py-28">

        <div class="max-w-4xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-orange-soft tracking-wide mb-3">About Me</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-8">Who I Am</h2>

            <p class="text-text text-lg leading-relaxed mb-6 max-w-2xl">
                I'm Khalid — a full-stack software developer working across the Laravel/PHP ecosystem, building tools that solve real problems. My work spans internal business tools, Web3-facing platforms, and clean, functional interfaces.
            </p>

            <p class="text-muted text-base leading-relaxed max-w-2xl">
                Currently a Junior Software Developer Intern at Peldarg Consulting Ltd, where I help build, test, and maintain web applications. I got my start in tech advocacy as a Campus Ambassador for HAUTHUB, promoting tech training and career development within my campus community.
            </p>

        </div>

    </section>

    {{-- SKILLS --}}
    <section id="skills" class="px-6 md:px-16 py-28">

        <div class="max-w-4xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-blue-soft tracking-wide mb-3">Skills & Expertise</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-12">What I Work With</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">

                @php
                    $skills = [
                        ['name' => 'Laravel', 'icon' => 'laravel'],
                        ['name' => 'PHP', 'icon' => 'php'],
                        ['name' => 'MySQL', 'icon' => 'mysql'],
                        ['name' => 'Tailwind CSS', 'icon' => 'tailwindcss'],
                        ['name' => 'Git & GitHub', 'icon' => 'git'],
                        ['name' => 'Livewire', 'icon' => 'livewire'],
                    ];
                @endphp

                @foreach ($skills as $skill)
                    <div class="glass rounded-xl p-5 flex flex-col items-center gap-3 text-center hover:-translate-y-1 hover:glow-blue transition">
                        <div class="w-10 h-10 flex items-center justify-center">
                            <img src="https://cdn.simpleicons.org/{{ $skill['icon'] }}/E8ECF4" alt="{{ $skill['name'] }}" class="max-w-full max-h-full">
                        </div>
                        <span class="text-sm font-medium text-text">{{ $skill['name'] }}</span>
                    </div>
                @endforeach

            </div>

        </div>

    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="px-6 md:px-16 py-28">

        <div class="max-w-5xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-orange-soft tracking-wide mb-3">Projects</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-12">Selected Work</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Daorader AI --}}
                <div class="glass rounded-2xl overflow-hidden hover:-translate-y-1 hover:glow-blue transition">
                    <div class="h-40 bg-gradient-to-br from-blue/30 to-orange/20 flex items-center justify-center">
                        <span class="text-xs text-muted">[ Project preview image placeholder ]</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-display font-semibold text-xl mb-2">Daorader AI</h3>
                        <p class="text-muted text-sm leading-relaxed mb-4">
                            Aggregates and intelligently organizes opportunities into a personalized recommendation engine, powered by the Zero Authority DAO ecosystem.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-[10px] font-mono px-2 py-1 rounded-full bg-blue/10 text-blue-soft">Node.js</span>
                            <span class="text-[10px] font-mono px-2 py-1 rounded-full bg-orange/10 text-orange-soft">Web3</span>
                        </div>
                        <div class="flex gap-4 text-sm font-medium">
                            <a href="https://dao-radar-ai.onrender.com" target="_blank" class="text-orange hover:underline">Live Demo &rarr;</a>
                            <a href="https://github.com/Adeagbo-Khalid/dao-radar-ai" target="_blank" class="text-muted hover:text-text">GitHub</a>
                        </div>
                    </div>
                </div>

                {{-- Client Portfolio --}}
                <div class="glass rounded-2xl overflow-hidden hover:-translate-y-1 hover:glow-blue transition">
                    <div class="h-40 bg-gradient-to-br from-blue/30 to-orange/20 flex items-center justify-center">
                        <span class="text-xs text-muted">[ Project preview image placeholder ]</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-display font-semibold text-xl mb-2">Client Portfolio Site</h3>
                        <p class="text-muted text-sm leading-relaxed mb-4">
                            A one-page portfolio built for a collaborator, featuring a dark, futuristic design — deployed and live.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-[10px] font-mono px-2 py-1 rounded-full bg-blue/10 text-blue-soft">Laravel</span>
                        </div>
                        <div class="flex gap-4 text-sm font-medium">
                            <a href="https://nofiu-portfolio.vercel.app/" target="_blank" class="text-orange hover:underline">Live Demo &rarr;</a>
                        </div>
                    </div>
                </div>

                {{-- RewriteAI --}}
                <div class="glass rounded-2xl overflow-hidden hover:-translate-y-1 hover:glow-blue transition">
                    <div class="h-40 bg-gradient-to-br from-blue/30 to-orange/20 flex items-center justify-center">
                        <span class="text-xs text-muted">[ Project preview image placeholder ]</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-display font-semibold text-xl mb-2">RewriteAI</h3>
                        <p class="text-muted text-sm leading-relaxed mb-4">
                            An AI-powered writing assistant that rewrites, fixes grammar, adjusts tone, and summarizes text on demand.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-[10px] font-mono px-2 py-1 rounded-full bg-orange/10 text-orange-soft">AI / API</span>
                        </div>
                        <div class="flex gap-4 text-sm font-medium">
                            <a href="https://rewrite-ai-nooi.onrender.com" target="_blank" class="text-orange hover:underline">Live Demo &rarr;</a>
                        </div>
                    </div>
                </div>

                {{-- AlegeOfficial --}}
                <div class="glass rounded-2xl overflow-hidden hover:-translate-y-1 hover:glow-blue transition">
                    <div class="h-40 bg-gradient-to-br from-blue/30 to-orange/20 flex items-center justify-center">
                        <span class="text-xs text-muted">[ Project preview image placeholder ]</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-display font-semibold text-xl mb-2">AlegeOfficial Platform</h3>
                        <p class="text-muted text-sm leading-relaxed mb-4">
                            A full client site built for a Web3 Twitter/X influencer &mdash; About, Skills, Case Studies, Experience, Services, and a working contact form.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-[10px] font-mono px-2 py-1 rounded-full bg-orange/10 text-orange-soft">Web3</span>
                            <span class="text-[10px] font-mono px-2 py-1 rounded-full bg-blue/10 text-blue-soft">Client Work</span>
                        </div>
                        <div class="flex gap-4 text-sm font-medium">
                            <a href="https://my-project-ms3v.onrender.com" target="_blank" class="text-orange hover:underline">Live Demo &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    {{-- EXPERIENCE TIMELINE --}}
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
                    <h3 class="font-display font-semibold mb-2">Full-Stack Web Development</h3>
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

    {{-- TESTIMONIALS (placeholder) --}}
    <section id="testimonials" class="px-6 md:px-16 py-28">

        <div class="max-w-4xl mx-auto md:mx-0">

            <p class="text-sm font-medium text-blue-soft tracking-wide mb-3">Testimonials</p>
            <h2 class="font-display font-bold text-3xl md:text-4xl mb-12">What Clients Say</h2>

            <div class="glass rounded-2xl p-10 text-center">
                <p class="text-muted italic mb-2">[ Placeholder &mdash; add real client testimonials here once available ]</p>
                <p class="text-xs text-muted">This section is ready to populate whenever you have quotes to share.</p>
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

            <p class="text-muted mb-10">Have a project in mind, or just want to connect? Reach out below.</p>

            <div class="flex flex-col gap-3 mb-12">
                <a href="mailto:adeagboadedolapo121@gmail.com" class="text-text hover:text-orange transition">adeagboadedolapo121@gmail.com</a>
                <a href="https://x.com/Mallam_Khalid" target="_blank" class="text-text hover:text-orange transition">x.com/Mallam_Khalid</a>
                <a href="https://linkedin.com/in/adeagbo-adedolapo-2a49aa310" target="_blank" class="text-text hover:text-orange transition">linkedin.com/in/adeagbo-adedolapo-2a49aa310</a>
            </div>

            <form class="space-y-4 glass rounded-2xl p-8">
                @csrf
                <input type="text" name="name" placeholder="Your Name" class="w-full bg-transparent border border-border rounded-lg px-4 py-3 text-text focus:outline-none focus:border-orange transition">
                <input type="email" name="email" placeholder="Your Email" class="w-full bg-transparent border border-border rounded-lg px-4 py-3 text-text focus:outline-none focus:border-orange transition">
                <textarea name="message" rows="4" placeholder="Your Message" class="w-full bg-transparent border border-border rounded-lg px-4 py-3 text-text focus:outline-none focus:border-orange transition"></textarea>
                <button type="submit" class="w-full px-6 py-3.5 bg-gradient-to-r from-blue to-orange text-white font-semibold rounded-lg hover:opacity-90 transition">
                    Send Message
                </button>
            </form>

        </div>

    </section>

    {{-- FOOTER --}}
    <footer class="px-6 md:px-16 py-10 border-t border-border">
        <div class="max-w-5xl mx-auto md:mx-0 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <p class="font-display font-semibold">Adeagbo Khalid A.</p>
            <div class="flex gap-6 text-sm text-muted">
                <a href="https://x.com/Mallam_Khalid" target="_blank" class="hover:text-orange transition">X</a>
                <a href="https://linkedin.com/in/adeagbo-adedolapo-2a49aa310" target="_blank" class="hover:text-orange transition">LinkedIn</a>
                <a href="https://github.com/Adeagbo-Khalid" target="_blank" class="hover:text-orange transition">GitHub</a>
            </div>
            <p class="text-sm text-muted">&copy; 2026</p>
        </div>
    </footer>

@endsection