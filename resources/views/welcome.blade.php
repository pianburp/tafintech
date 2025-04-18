<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TA Fintech</title>
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

        .animate-delay-100 {
            animation-delay: 100ms;
        }

        .animate-delay-200 {
            animation-delay: 200ms;
        }

        .animate-delay-300 {
            animation-delay: 300ms;
        }

        .animate-delay-400 {
            animation-delay: 400ms;
        }

        .animate-delay-500 {
            animation-delay: 500ms;
        }

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

<body
    class="font-sans antialiased bg-gradient-to-b from-gray-50 to-gray-100 dark:from-black dark:to-gray-900 dark:text-white/50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative overflow-hidden h-screen">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('storage/images/bg-img.jpg') }}" alt="Background"
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
                        <a href="#hero" class="text-2xl font-bold text-[#E09A53] transition-colors duration-300">TA Fintech</a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center gap-6">
                        <a href="#services"
                            class="text-gray-700 dark:text-gray-300 hover:text-[#E09A53] dark:hover:text-[#E09A53] transition">Services</a>
                        <a href="#faq"
                            class="text-gray-700 dark:text-gray-300 hover:text-[#E09A53] dark:hover:text-[#E09A53] transition">FAQ</a>
                        <a href="#contact"
                            class="text-gray-700 dark:text-gray-300 hover:text-[#E09A53] dark:hover:text-[#E09A53] transition">Contact</a>

                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="bg-[#E09A53] text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-gray-700 dark:text-gray-300 hover:text-[#E09A53] dark:hover:text-[#E09A53] transition">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="bg-[#E09A53] text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition">Register</a>
                            @endif
                        @endauth
                    </div>

                    <!-- Mobile Menu Button -->
                    <button
                        class="md:hidden p-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                        id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile Navigation -->
                <div class="hidden md:hidden pb-4" id="mobile-menu">
                    <div class="flex flex-col gap-4">
                        <a href="#services"
                            class="text-gray-700 dark:text-gray-300 hover:text-[#E09A53] dark:hover:text-[#E09A53] transition">Services</a>
                        <a href="#faq"
                            class="text-gray-700 dark:text-gray-300 hover:text-[#E09A53] dark:hover:text-[#E09A53] transition">FAQ</a>
                        <a href="#contact"
                            class="text-gray-700 dark:text-gray-300 hover:text-[#E09A53] dark:hover:text-[#E09A53] transition">Contact</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Hero Content -->
        <div id="hero" class="relative flex items-center justify-center h-full">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center">
                    <h1 class="animate-fade-in-up text-4xl sm:text-7xl font-bold text-gray-900 dark:text-white mb-6">
                        Your Dream Computer
                        <span class="text-[#E09A53]">Starts Here</span>
                    </h1>
                    <p
                        class="animate-fade-in-up animate-delay-200 text-2xl text-gray-800 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                        Expert technical technician to craft your dream computer.
                    </p>
                    <div class="flex justify-center gap-4">
                        <a href="#services"
                            class="animate-fade-in-up animate-delay-300 bg-[#E09A53] text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition">
                            Get Started
                        </a>
                        <a href="#contact"
                            class="animate-fade-in-up animate-delay-400 border border-[#E09A53] text-[#E09A53] px-8 py-3 rounded-lg hover:bg-[#E09A53] hover:text-white transition">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="py-12 bg-[#FDF6EC] dark:bg-[#28221b]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 scroll-fade">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Services</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Comprehensive computer solutions designed to help you achieve your goals
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="group bg-white dark:bg-zinc-800 p-8 rounded-xl shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#E09A53]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div class="flex flex-col items-center mb-4">
                            <svg class="w-12 h-12 text-[#E09A53] mb-4 transform group-hover:scale-110 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <h3
                                class="font-semibold text-2xl text-[#E09A53] mb-3 transform transition-transform duration-300">
                                Fix PC Component</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                            Our specialist can fix your PC problem
                        </p>
                    </div>
                </div>

                <div
                    class="group bg-white dark:bg-zinc-800 p-8 rounded-xl shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#E09A53]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div class="flex flex-col items-center mb-4">
                            <svg class="w-12 h-12 text-[#E09A53] mb-4 transform group-hover:scale-110 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg>
                            <h3
                                class="font-semibold text-2xl text-[#E09A53] mb-3 transform transition-transform duration-300">
                                Computer Advisor</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                            Our specialist can advise on your custom build PC
                        </p>
                    </div>
                </div>

                <div
                    class="group bg-white dark:bg-zinc-800 p-8 rounded-xl shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#E09A53]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative">
                        <div class="flex flex-col items-center mb-4">
                            <svg class="w-12 h-12 text-[#E09A53] mb-4 transform group-hover:scale-110 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4">
                                </path>
                            </svg>
                            <h3
                                class="font-semibold text-2xl text-[#E09A53] mb-3 transform transition-transform duration-300">
                                Software developing</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                            Struggling to develop software? We are helping you to develop web application or mobile
                            application
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id= "faq" class="py-12 bg-[#FDF6EC] dark:bg-[#28221b]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-fade">
            <!-- Header -->
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Frequently Asked Questions
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-600 dark:text-gray-400">
                    Find answers to common questions about our computer services
                </p>
            </div>

            <!-- FAQ Grid -->
            <div class="mt-12 max-w-3xl mx-auto">
                <dl class="space-y-6 divide-y divide-gray-200 dark:divide-gray-700">
                    <div class="pt-6">
                        <dt class="text-lg">
                            <button
                                class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white"
                                aria-controls="faq-1" aria-expanded="false">
                                <span class="font-semibold">What we do?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-200 text-gray-400 dark:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd
                            class="mt-2 pr-12 max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                            <p class="text-base text-gray-600 dark:text-gray-400">
                                We currently do computer services such as fixing computer parts,
                                custom build PC and develop software for web and mobile application.
                            </p>
                        </dd>
                    </div>

                    <div class="pt-6">
                        <dt class="text-lg">
                            <button
                                class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white"
                                aria-controls="faq-2" aria-expanded="false">
                                <span class="font-semibold">What framework do you use to develop web and mobile
                                    application?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-200 text-gray-400 dark:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd
                            class="mt-2 pr-12 max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                            <p class="text-base text-gray-600 dark:text-gray-400">
                                We actively use laravel breeze for web application and ionic angular for mobile
                                application
                            </p>
                        </dd>
                    </div>

                    <div class="pt-6">
                        <dt class="text-lg">
                            <button
                                class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white"
                                aria-controls="faq-3" aria-expanded="false">
                                <span class="font-semibold">Is this the place to provide cheapest price for PC
                                    component?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6 transform transition-transform duration-200 text-gray-400 dark:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd
                            class="mt-2 pr-12 max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                            <p class="text-base text-gray-600 dark:text-gray-400">
                                Maybe, we provide best offer price to the customers.
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 bg-[#FDF6EC] dark:bg-[#28221b]">
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
                            <input type="text"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-zinc-700 focus:ring-2 focus:ring-[#E09A53] focus:border-transparent transition">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                            <input type="email"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-zinc-700 focus:ring-2 focus:ring-[#E09A53] focus:border-transparent transition">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>
                            <textarea rows="4"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-zinc-700 focus:ring-2 focus:ring-[#E09A53] focus:border-transparent transition"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-[#E09A53] text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition">
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
                                    <svg class="w-5 h-5 text-[#E09A53]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:ta.fintech@gmail.com"
                                        class="hover:text-[#E09A53] transition-colors">ta.fintech@gmail.com</a>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#E09A53]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:ta.hanifasyraf@gmail.com"
                                        class="hover:text-[#E09A53] transition-colors">ta.hanifasyraf@gmail.com</a>
                                </div>
                            </div>
                        </div>

                        <!-- Map -->
                        <div class="w-full h-[300px] rounded-lg overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.535816278314!2d101.52256737423701!3d2.94868865435
                                    37354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdafaf7482a00f%3A0x28852cb83cf518dd!2sSORANOS%20RENTAL
                                    %20-%20KERETA%20SEWA!5e0!3m2!1sen!2smy!4v1738657458755!5m2!1sen!2smy"
                                class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
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
        anchor.addEventListener('click', function(e) {
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
    const title = document.querySelector('a.text-2xl.font-bold');

    window.addEventListener('scroll', () => {
        const servicesSection = document.getElementById('services');
        const scrollPosition = window.scrollY;

        // Check if we've scrolled past the services section
        if (servicesSection && scrollPosition >= servicesSection.offsetTop - 100) {
            title.classList.remove('text-[#E09A53]');
            title.classList.add('text-gray-900', 'dark:text-white');
        } else {
            title.classList.remove('text-gray-900', 'dark:text-white');
            title.classList.add('text-[#E09A53]');
        }
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= sectionTop - 150) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-[#E09A53]');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('text-[#E09A53]');
            }
        });
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
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
