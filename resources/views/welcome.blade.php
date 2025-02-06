<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TA Fintech Solution</title>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .animate-fade-in-up {
                opacity: 0;
                animation: fadeInUp 0.6s ease-out forwards;
            }
            
            .animate-delay-100 { animation-delay: 100ms; }
            .animate-delay-200 { animation-delay: 200ms; }
            .animate-delay-300 { animation-delay: 300ms; }
            .animate-delay-400 { animation-delay: 400ms; }
            .animate-delay-500 { animation-delay: 500ms; }

            .scroll-fade {
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            }
            
            .scroll-fade.visible {
                opacity: 1;
                transform: translateY(0);
            }
        </style>

    <body class="font-sans antialiased bg-gradient-to-b from-gray-50 to-gray-100 dark:from-black dark:to-gray-900 dark:text-white/50 min-h-screen">
        <!-- Hero Section -->
        <div class="relative overflow-hidden">
                        <!-- Hero Background Image -->
                        <div class="absolute inset-0 z-0">
                            <img src="{{ asset('storage/images/bg-img.jpg') }}" 
                                 alt="Background" 
                                 class="w-full h-full object-cover brightness-50">
                        </div>
            <!-- Navigation -->
            <header class="fixed top-0 left-0 right-0 z-50">
                <!-- Added backdrop div for blur effect -->
                <div class="absolute inset-0 bg-white/50 dark:bg-black/50 backdrop-blur-md"></div>
                
                <!-- Main navigation content -->
                <nav class="relative max-w-7xl mx-auto px-6">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center gap-4">
                            <a href="#" class="text-2xl font-bold text-[#6b6b4a]">TA Fintech</a>
                        </div>
                        
                        <!-- Desktop Navigation -->
                        <div class="hidden md:flex items-center gap-6">
                            <a href="#services" class="text-gray-700 dark:text-gray-300 hover:text-[#6b6b4a] dark:hover:text-[#6b6b4a] transition">Services</a>
                            <a href="#faq" class="text-gray-700 dark:text-gray-300 hover:text-[#6b6b4a] dark:hover:text-[#6b6b4a] transition">FAQ</a>
                            <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-[#6b6b4a] dark:hover:text-[#6b6b4a] transition">Contact</a>
                            
                            @auth
                                <a href="{{ url('/dashboard') }}" class="bg-[#6b6b4a] text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-[#6b6b4a] dark:hover:text-[#6b6b4a] transition">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-[#6b6b4a] text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition">Register</a>
                                @endif
                            @endauth
                        </div>
            
                        <!-- Mobile Menu Button -->
                        <button class="md:hidden p-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" id="mobile-menu-button">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
            
                    <!-- Mobile Navigation -->
                    <div class="hidden md:hidden pb-4" id="mobile-menu">
                        <div class="flex flex-col gap-4">
                            <a href="#services" class="text-gray-700 dark:text-gray-300 hover:text-[#6b6b4a] dark:hover:text-[#6b6b4a] transition">Services</a>
                            <a href="#faq" class="text-gray-700 dark:text-gray-300 hover:text-[#6b6b4a] dark:hover:text-[#6b6b4a] transition">FAQ</a>
                            <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-[#6b6b4a] dark:hover:text-[#6b6b4a] transition">Contact</a>
                        </div>
                    </div>
                </nav>
            </header>

            <!-- Hero Content -->
            <div class="relative pt-32 pb-16 sm:pt-40 sm:pb-24">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center">
                        <h1 class="animate-fade-in-up text-4xl sm:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                            Your Financial Future 
                            <span class="text-[#6b6b4a]">Starts Here</span>
                        </h1>
                        <p class="animate-fade-in-up animate-delay-200 text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">
                            Expert financial solutions tailored to your needs. Start your journey towards financial freedom today.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="#services" class="animate-fade-in-up animate-delay-300 bg-[#6b6b4a] text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition">
                                Get Started
                            </a>
                            <a href="#contact" class="animate-fade-in-up animate-delay-400 border border-[#6b6b4a] text-[#6b6b4a] px-8 py-3 rounded-lg hover:bg-[#6b6b4a] hover:text-white transition">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <section id="services" class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 scroll-fade">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Services</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Comprehensive financial solutions designed to help you achieve your goals
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group bg-white dark:bg-zinc-800 p-8 rounded-xl shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#6b6b4a]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="flex flex-col items-center mb-4">
                                <svg class="w-12 h-12 text-[#6b6b4a] mb-4 transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="font-semibold text-2xl text-[#6b6b4a] mb-3 transform transition-transform duration-300">One Click Investment</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                                Our company prioritizes safe capital management with up to 5% monthly return with a single click.
                            </p>
                        </div>
                    </div>
                
                    <div class="group bg-white dark:bg-zinc-800 p-8 rounded-xl shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#6b6b4a]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="flex flex-col items-center mb-4">
                                <svg class="w-12 h-12 text-[#6b6b4a] mb-4 transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <h3 class="font-semibold text-2xl text-[#6b6b4a] mb-3 transform transition-transform duration-300">Trading Education</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                                Our company provides the best trading syllabus and mentorship for aspiring traders.
                            </p>
                        </div>
                    </div>
                
                    <div class="group bg-white dark:bg-zinc-800 p-8 rounded-xl shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#6b6b4a]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="flex flex-col items-center mb-4">
                                <svg class="w-12 h-12 text-[#6b6b4a] mb-4 transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <h3 class="font-semibold text-2xl text-[#6b6b4a] mb-3 transform transition-transform duration-300">Affiliates</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                                Earn up to 10% bonus when you refer your friends and family to join our investment community.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id= "faq" class="py-12 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-fade">
                <!-- Header -->
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Frequently Asked Questions
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-gray-600 dark:text-gray-400">
                        Find answers to common questions about our financial services
                    </p>
                </div>
        
                <!-- FAQ Grid -->
                <div class="mt-12 max-w-3xl mx-auto">
                    <dl class="space-y-6 divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="pt-6">
                            <dt class="text-lg">
                                <button class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white" aria-controls="faq-1" aria-expanded="false">
                                    <span class="font-semibold">What we do?</span>
                                    <span class="ml-6 flex h-7 items-center">
                                        <svg class="h-6 w-6 transform transition-transform duration-200 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12 max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                                <p class="text-base text-gray-600 dark:text-gray-400">
                                    We currently do financial services including diversified investment, trading education and affiliates.
                                </p>
                            </dd>
                        </div>
        
                        <div class="pt-6">
                            <dt class="text-lg">
                                <button class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white" aria-controls="faq-2" aria-expanded="false">
                                    <span class="font-semibold">Is the money invested guaranteed to have positive return every month?</span>
                                    <span class="ml-6 flex h-7 items-center">
                                        <svg class="h-6 w-6 transform transition-transform duration-200 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12 max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                                <p class="text-base text-gray-600 dark:text-gray-400">
                                    No, speculating on financial derivatives can be challenging, even big banks can be liquidated. We try our best to meet client's monthly objective.
                                </p>
                            </dd>
                        </div>
        
                        <div class="pt-6">
                            <dt class="text-lg">
                                <button class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white" aria-controls="faq-3" aria-expanded="false">
                                    <span class="font-semibold">Is this MLM?</span>
                                    <span class="ml-6 flex h-7 items-center">
                                        <svg class="h-6 w-6 transform transition-transform duration-200 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12 max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                                <p class="text-base text-gray-600 dark:text-gray-400">
                                    No, MLM relies heavily on new client but we have sufficient liquidity to run this services. We still try our best to provide services with top quality and competent prices to our clients.
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-6 scroll-fade">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">Get in Touch</h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Have questions? We're here to help. Send us a message and we'll respond as soon as possible.
                    </p>
                </div>
        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div class="bg-gray-50 dark:bg-zinc-800 p-8 rounded-xl shadow-lg">
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Name</label>
                                <input type="text" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-zinc-700 focus:ring-2 focus:ring-[#6b6b4a] focus:border-transparent transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                                <input type="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-zinc-700 focus:ring-2 focus:ring-[#6b6b4a] focus:border-transparent transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>
                                <textarea rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-zinc-700 focus:ring-2 focus:ring-[#6b6b4a] focus:border-transparent transition"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-[#6b6b4a] text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition">
                                Send Message
                            </button>
                        </form>
                    </div>
        
                    <div class="bg-gray-50 dark:bg-zinc-800 p-8 rounded-xl shadow-lg">
                        <div class="space-y-8">
                            <!-- Location Section -->
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Our Location</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    No. 27-1, Jalan Aman Tiara 2<br>
                                    Bandar Tropicana Aman, 42500<br>
                                    Telok Panglima Garang, Selangor
                                </p>
                            </div>
        
                            <!-- Email Section -->
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Email Us</h3>
                                <div class="space-y-2 text-gray-600 dark:text-gray-400">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-[#6b6b4a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <a href="mailto:ta.fintech@gmail.com" class="hover:text-[#6b6b4a] transition-colors">ta.fintech@gmail.com</a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-[#6b6b4a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <a href="mailto:ta.hanifasyraf@gmail.com" class="hover:text-[#6b6b4a] transition-colors">ta.hanifasyraf@gmail.com</a>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Map -->
                            <div class="w-full h-[300px] rounded-lg overflow-hidden">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.535816278314!2d101.52256737423701!3d2.94868865435
                                    37354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdafaf7482a00f%3A0x28852cb83cf518dd!2sSORANOS%20RENTAL
                                    %20-%20KERETA%20SEWA!5e0!3m2!1sen!2smy!4v1738657458755!5m2!1sen!2smy" 
                                    class="w-full h-full"
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-12 bg-gray-50 dark:bg-black">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center">
                    <p class="text-gray-600 dark:text-gray-400">
                        © 2025 TA Fintech Solution. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </body>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 64, // Account for fixed header
                        behavior: 'smooth'
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // FAQ accordion functionality
        document.querySelectorAll('dt button').forEach((button, index) => {
        button.addEventListener('click', () => {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        const dd = button.closest('dt').nextElementSibling;
        const icon = button.querySelector('svg');
        
        // Toggle the expanded state
        button.setAttribute('aria-expanded', !expanded);
        
        // Instead of toggling hidden class, we'll modify max-height and opacity
        if (!expanded) {
            dd.style.maxHeight = dd.scrollHeight + 'px';
            dd.style.opacity = '1';
            icon.style.transform = 'rotate(180deg)';
        } else {
            dd.style.maxHeight = '0';
            dd.style.opacity = '0';
            icon.style.transform = 'rotate(0deg)';
        }
        
        // Close other FAQs
        document.querySelectorAll('dt button').forEach((otherButton, otherIndex) => {
            if (otherIndex !== index) {
                const otherDd = otherButton.closest('dt').nextElementSibling;
                const otherIcon = otherButton.querySelector('svg');
                otherButton.setAttribute('aria-expanded', 'false');
                otherDd.style.maxHeight = '0';
                otherDd.style.opacity = '0';
                otherIcon.style.transform = 'rotate(0deg)';
            }
        });
    });
});

        // Scroll-based navigation highlight
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('nav a[href^="#"]');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-[#6b6b4a]');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('text-[#6b6b4a]');
                }
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const section = document.querySelector(this.getAttribute('href'));
        section.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

        // Add scroll animation observer
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with scroll-fade class
        document.addEventListener('DOMContentLoaded', () => {
            const scrollElements = document.querySelectorAll('.scroll-fade');
            scrollElements.forEach(element => observer.observe(element));
        });
    </script>
</html>