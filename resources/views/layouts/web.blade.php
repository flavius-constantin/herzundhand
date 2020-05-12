<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KKCNWSZ');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }} &bull; @yield('title', 'Startseite')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO -->
    @include('includes/_seo')
    @include('includes/_favicon')

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        hr {
            border: 0;
            height: 1px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            background-image: linear-gradient(to right, rgba(8, 197, 70, 0), rgba(8, 197, 70, 0.75), rgba(8, 197, 70, 0));
        }
    </style>
    @stack('styles')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <livewire:styles />
</head>

<body class="relative min-h-screen text-gray-800 font-sans antialiased">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKCNWSZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <div x-data="{ open: false }" class="relative bg-white overflow-hidden">
            <div class="max-w-screen-xl mx-auto ">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <div class="pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                                <div class="flex items-center justify-between w-full md:w-auto">
                                    <a href="{{ route('home') }}">
                                        <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo.jpg') }}" alt="{{ config('app.name') }} " />
                                    </a>
                                    <div class="-mr-2 flex items-center md:hidden">
                                        <button @click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-green-600 hover:text-green-700 hover:bg-green-200 focus:outline-none focus:bg-green-200 focus:text-green-700 transition duration-150 ease-in-out">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden md:block md:ml-10 md:pr-4">
                                <a href="#modell" class=" font-medium text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Das Modell</a>
                                <a href="#vielfalt" class=" ml-8 font-medium text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Vielfältigkeit</a>
                                <a href="{{ route('contact') }}" class="ml-8 font-medium text-green-600 hover:text-green-700 focus:outline-none focus:text-green-700 transition duration-150 ease-in-out">Kontakt</a>
                            </div>
                        </nav>
                    </div>

                    <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div class="rounded-lg shadow-md">
                            <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="px-5 pt-4 flex items-center justify-between">
                                    <div>
                                        <img class="h-8 w-auto" src="{{ asset('img/logo.jpg') }}" alt="{{ config('app.name') }} " />
                                    </div>
                                    <div class="-mr-2">
                                        <button @click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-red-400 hover:text-red-500 hover:bg-red-100 focus:outline-none focus:bg-red-100 focus:text-red-500 transition duration-150 ease-in-out">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="px-2 pt-2 pb-3">
                                    <a href="#modell" class=" block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-100 transition duration-150 ease-in-out">Das Modell</a>
                                    <a href="#vielfalt" class=" mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-100 transition duration-150 ease-in-out">Vielfältigkeit</a>
                                    <a href="{{ route('contact') }}" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-green-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:text-gray-900 focus:bg-gray-100 transition duration-150 ease-in-out">Kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="text-center sm:text-left sm:max-w-xl sm:mx-auto">
                            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                                Herzlich
                                <br class="xl:hidden" />
                                <span class="text-green-600">Willkommen!</span>
                            </h2>
                            <p class="mt-3 text-lg leading-relaxed text-gray-600 sm:mt-5 sm:max-w-xl sm:mx-auto md:mt-5 lg:mx-0">
                                <span class="font-bold">24 Stunden Betreuung: </span>
                                Wenn Pflegebedürftige Menschen rund um die Uhr im eigenen Zuhause
                                betreut werden, nennt man dies „24 Stunden Betreuung“
                            </p>
                            <!-- <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white hover:text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                        Get started
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-green-700 bg-green-200 hover:text-green-600 hover:bg-green-100 focus:outline-none focus:shadow-outline focus:border-green-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                        Live demo
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('img/header.jpg') }}" alt="" />
            </div>
        </div>

        <div class="py-1 shadow-md mb-10" style="background: linear-gradient(90deg, #C2F6D3 0%, #08C546 100%)">
            <!--<div class="container mx-auto px-6">
                <p class="text-3xl font-bold font-light text-white">
                    Wichtig? - Dann hier rein
                </p>
            </div>-->
        </div>
    </header>

    <main role="main">

        @yield('content')

        @if(!request()->routeIs('contact'))
        <section class="bg-gray-100">
            <div class="container">
                <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex md:items-center lg:justify-between">
                    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10 text-center md:text-left">
                        <span id="contact-title"></span>
                        <br />
                        <span class="text-green-600">Schreiben Sie uns an!</span>
                    </h2>
                    <div class="flex lg:flex-shrink-0 lg:mt-0 justify-center">
                        <div class="inline-flex">
                            <a href="{{ route('contact') }}" class="group py-3 px-8 border border-transparent text-base leading-6 font-semibold uppercase rounded-full text-green-600 hover:text-white bg-green-200 hover:bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                <span class="hidden group-hover:inline-block">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 inline-flex -mt-1">
                                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </span>
                                Kontaktformular
                            </a>
                            <!-- <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-green-700 bg-green-200 hover:text-green-600 hover:bg-green-100 focus:outline-none focus:shadow-outline focus:border-green-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Kontaktformular
                            </a> -->
                            <!--
                            <a href="#" class="bg-gray-900 text-white hover:text-green-500 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none transition duration-150 ease-in-out">
                                Kontaktformular
                            </a>
                            <a href="#" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white hover:text-white bg-valencia-600 hover:bg-valencia-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Zum Kontaktformular
                            </a>-->
                        </div>

                    </div>
                </div>
            </div>
        </section>
        @endif
    </main>

    <footer class="bg-gray-900 text-center text-gray-400 text-sm py-2" role="contentinfo">
        <div id="kontakt" class="flex justify-between">
            <p class="w-1/2">
                &copy; <a href="{{ config('app.url') }}" title="{{ config('app.name') }} Website" class="text-gray-400 hover:text-green-600">{{ config('app.name') }}</a> {{ date('Y') }}
            </p>

            <p class="w-1/2">
                <a href="{{ route('imprint') }}" title="Impressum" class="text-gray-400 hover:text-green-600">Impressum</a>
                &bull;
                <a href="{{ route('disclaimer') }}" title="Datenschutz" class="text-gray-400 hover:text-green-600">Datenschutz</a>
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
    @if(!request()->routeIs('contact'))
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script>
        var typed = new Typed('#contact-title', {
            strings: ["Fragen?", "Interessiert?", "Überzeugt?"],
            typeSpeed: 70,
            backSpeed: 20,
            backDelay: 1500,
            startDelay: 0,
            loop: true
        });
    </script>
    @endif
    <livewire:scripts />
    @include('cookieConsent::index')
</body>

</html>