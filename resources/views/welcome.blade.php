<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/isotipo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/isotipo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/isotipo.png') }}">
    <meta name="msapplication-TileImage" content="https://tudrenviajes.com/images/favicon.ico">

    <link rel="icon" href="https://tudrenviajes.com/images/favicon.ico" sizes="any">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">


    <meta name="msapplication-TileColor" content="#529471">
    <meta name="theme-color" content="#529471">

    <!-- SEO - Metatags básicos -->
    <meta name="description" content="@yield('meta_description', 'Protege tu viaje con nuestro seguro médico, cancelaciones, pérdida de equipaje y más. Asistencia global 24/7. Contrata tu seguro de viaje internacional con la mejor cobertura. Protege tu salud y equipaje en todo el mundo. ¡Cotiza ahora online!')">

    <meta name="keywords" content="seguro de viaje, asistencia médica, cobertura internacional, seguro médico, repatriación, viajero seguro">
    <meta name="author" content="Tu Dr En Viaje">
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="TuDrEnViajes" />


    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('og_title', 'Asistencia en Viaje | Seguro Médico Global')">
    <meta property="og:description" content="@yield('og_description', 'Cobertura integral para viajeros del mundo. Servicio 24/7, redes médicas globales y planes flexibles. Contrata tu seguro de viaje internacional con la mejor cobertura. Protege tu salud y equipaje en todo el mundo. ¡Cotiza ahora online!')">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/logo_3.png') }}">
    <meta property="og:site_name" content="Asistencia en Viaje">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="{{ asset('images/logo_3.png') }}">
    <meta name="twitter:title" content="@yield('og_title', 'Asistencia en Viaje | Seguro Médico Global')">
    <meta name="twitter:description" content="@yield('og_description', 'Cobertura integral para viajeros del mundo.')">
    <meta name="twitter:image" content="{{ asset('images/logo_3.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#052F60"
                        , alert: "#f97316"
                        , secondary: "#305B93"
                        , tertiary: "#5488AE"
                        , accent: "#4A8982"
                        , success: "#529471"
                        , light: "#E8EBEA"
                    }
                }
            }
        }

    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'); */


        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .hero-banner {
            /* background-image: linear-gradient(rgba(5, 47, 96, 0.7), rgba(48, 91, 147, 0.7)), url({{ asset('images/img2.jpg') }}); */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .hero-overlay {
            background: linear-gradient(135deg, rgba(0, 204, 255, 0.143), rgba(0, 0, 0, 0.438));
        }

        .service-card {
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-bottom: 3px solid #4A8982;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }

        .form-input:focus {
            outline: none;
            border-color: #5488AE;
            box-shadow: 0 0 0 3px rgba(84, 136, 174, 0.2);
        }


        .testimonial-section {
            background: linear-gradient(135deg, rgba(5, 47, 96, 0.03) 0%, rgba(232, 235, 234, 0.8) 100%);
            position: relative;
            overflow: hidden;
        }

        .testimonial-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="%23052F60" fill-opacity="0.05" d="M0,128L48,117.3C96,107,192,85,288,106.7C384,128,480,192,576,192C672,192,768,128,864,122.7C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>'); */
            background-size: cover;
            background-position: bottom;
            opacity: 0.15;
            z-index: 1;
        }


        .testimonial-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 30px rgba(5, 47, 96, 0.08);
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(232, 235, 234, 0.8);
        }

        .testimonial-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(5, 47, 96, 0.15);
        }

        .testimonial-card::before {
            content: "";
            position: absolute;
            top: 20px;
            left: 20px;
            font-family: Arial, sans-serif;
            font-size: 100px;
            color: #5488AE;
            opacity: 0.1;
            line-height: 1;
        }

        .quote-icon {
            color: #5488AE;
            font-size: 2.5rem;
            opacity: 0.3;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        .testimonial-avatar {
            width: 70px;
            height: 70px;
            border: 3px solid #E8EBEA;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .map-pin {
            width: 24px;
            height: 24px;
            background: #4A8982;
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
            position: relative;
        }

        .map-pin::after {
            content: "";
            position: absolute;
            top: 8px;
            left: 8px;
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
        }

        .glide__slide {
            padding: 20px 10px;
        }

        .stats-card {
            background: linear-gradient(135deg, #57cfff 0%, #305B93 100%);
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(5, 47, 96, 0.15);
        }

        .world-icon {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto;
        }

        .world-icon svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            fill: none;
            stroke: #5488AE;
            stroke-width: 2;
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 8s linear forwards infinite;
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-float-delay {
            animation: float 6s ease-in-out infinite 1.5s;
        }

        .animate-float-delay-2 {
            animation: float 6s ease-in-out infinite 3s;
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <!-- Glide.js para el carrusel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>

</head>
<body class="bg-light text-primary">

    <!-- Botón de WhatsApp flotante -->
    <a href="https://wa.me/584242271498?text=Hola ,%20me%20gustaría%20cotizar%20un%20seguro%20de%20viaje" target="_blank" class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-16 h-16 bg-green-500 rounded-full shadow-lg transition-transform hover:scale-110 focus:outline-none">
        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="w-8 h-8 text-white">
        <span class="sr-only">Chatea con nosotros por WhatsApp</span>
    </a>

    <!-- Banner Principal -->
    {{-- <section class="hero-banner min-h-screen flex items-center justify-center text-white">
        <div class="container mx-auto px-6 text-center">
            <img src="{{ asset('images/logo_3.png') }}" class="max-w-3xl mx-auto mb-10" alt="">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">Protege tu viaje con tranquilidad</h1>
    <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-10">Seguros de viaje diseñados para brindarte la máxima protección en cada destino</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#cotizar" class="bg-alert hover:bg-secondary text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">Cotizar ahora</a>
        <a href="#servicios" class="bg-transparent hover:bg-primary border-2 border-white text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">Nuestros servicios</a>
    </div>
    </div>
    </section> --}}
    <!-- Hero Banner con Video de fondo -->
    <section id="inicio" class="min-h-screen flex items-center relative overflow-hidden">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('images/85761-590014859_medium.mp4') }}" type="video/mp4">

        </video>

        <div class="hero-overlay absolute inset-0"></div>

        <div class="container mx-auto px-4 z-10">
            <div class="max-w-2xl animate-on-scroll">
                <img src="{{ asset('images/logo_3.png') }}" class="w-1/2 mb-10" alt="Viaja protegido con nuestro seguro médico global">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 font-heading tracking-tight">Tu tranquilidad en cada <span class="text-gold">viaje</span></h1>
                <p class="text-xl text-white mb-10 max-w-lg">Protección y asistencia premium 24/7 para que disfrutes tu aventura sin preocupaciones en cualquier parte del mundo.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="https://tudrenviajes.xyz/app/pages/login.php" class="px-8 py-4 bg-alert text-white rounded-full font-bold hover:bg-secondary transition transform hover:-translate-y-1 glow-on-hover">
                        Cotizar ahora
                    </a>
                    <button class="px-8 py-4 bg-white/20 text-white rounded-full font-bold backdrop-blur-sm hover:bg-white/30 transition" id="playBtn">
                        <i class="fas fa-play-circle mr-2"></i>Ver video
                    </button>
                </div>
            </div>
        </div>

        <!-- Flecha para indicar scroll -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#nosotros" class="text-white text-3xl">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>

        <!-- Estadísticas flotantes -->
        <div class="absolute bottom-10 right-20 hidden lg:flex gap-6">
            <div class="stats-card p-4 rounded-xl shadow-lg floating">
                <p class="text-3xl font-bold text-primary text-center">98%</p>
                <p class="text-dark">Clientes satisfechos</p>
            </div>
            <div class="stats-card p-4 rounded-xl shadow-lg floating" style="animation-delay: 0.5s">
                <p class="text-3xl font-bold text-primary text-center">24/7</p>
                <p class="text-dark">Asistencia global</p>
            </div>
        </div>
    </section>


    <!-- Barra de navegación -->
    <nav class="bg-primary sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    {{-- <div class="bg-white p-2 rounded-full mr-3">
                        <i class="fas fa-shield-alt text-primary text-2xl"></i>
                    </div>
                    <span class="text-white text-xl font-bold">Tu Dr. en Viajes </span> --}}
                    <img src="{{ asset('images/logo_3.png') }}" class="w-1/4 h-auto" alt="Viaja protegido con nuestro seguro médico global">
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="#inicio" class="uppercase text-light hover:text-tertiary transition">Inicio</a>
                    <a href="#nosotros" class="uppercase text-light hover:text-tertiary transition">Nosotros</a>
                    <a href="#servicios" class="uppercase text-light hover:text-tertiary transition">Servicios</a>
                    <a href="#testimonios" class="uppercase text-light hover:text-tertiary transition">Testimonios</a>
                    <a href="https://tudrenviajes.xyz/app/pages/login.php" class="uppercase text-alert hover:text-tertiary transition font-bold">Cotizar</a>
                </div>

                <div class="md:hidden">
                    <button id="menu-toggle" class="text-light focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Menú móvil -->
            <div id="mobile-menu" class="md:hidden hidden py-4">
                <div class="flex flex-col space-y-4">
                    <a href="#inicio" class="text-light hover:text-tertiary transition">Inicio</a>
                    <a href="#nosotros" class="text-light hover:text-tertiary transition">Nosotros</a>
                    <a href="#servicios" class="text-light hover:text-tertiary transition">Servicios</a>
                    <a href="#testimonios" class="text-light hover:text-tertiary transition">Testimonios</a>
                    <a href="#cotizar" class="text-light hover:text-tertiary transition">Cotizar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección Nosotros -->
    <section id="nosotros" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Sobre Nosotros</h2>
                <div class="w-20 h-1 bg-tertiary mx-auto"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/familia.webp') }}" alt="Equipo Tu Dr. en Viajes " class="rounded-xl shadow-lg w-full">

                </div>

                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-6">Tu seguridad es nuestra prioridad</h3>
                    <p class="text-lg mb-6">En Tu Dr. en Viajes llevamos más de 15 años brindando soluciones de protección para viajeros en todo el mundo. Nuestra misión es ofrecerte tranquilidad durante tus viajes, con coberturas adaptadas a tus necesidades específicas.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="bg-accent text-white p-3 rounded-full mr-4">
                                <i class="fas fa-globe-americas text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Cobertura Global</h4>
                                <p>Asistencia en más de 190 países</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-accent text-white p-3 rounded-full mr-4">
                                <i class="fas fa-headset text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Soporte 24/7</h4>
                                <p>Asistencia en tu idioma siempre que la necesites</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-accent text-white p-3 rounded-full mr-4">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Protección Integral</h4>
                                <p>Coberturas médicas, equipaje, cancelación y más</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-accent text-white p-3 rounded-full mr-4">
                                <i class="fas fa-award text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Certificados</h4>
                                <p>Reconocidos por las principales aseguradoras</p>
                            </div>
                        </div>
                    </div>

                    <a href="#cotizar" class="inline-block mt-8 bg-tertiary hover:bg-secondary text-white font-bold py-3 px-8 rounded-full transition duration-300">Contratar ahora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Servicios -->
    <section id="servicios" class="py-20 bg-light">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Nuestros Servicios</h2>
                <p class="text-xl max-w-3xl mx-auto mb-6">Ofrecemos soluciones de protección adaptadas a cada tipo de viajero</p>
                <div class="w-20 h-1 bg-tertiary mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="service-card bg-white p-8 rounded-xl shadow-sm">
                    <div class="bg-primary text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-plane text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Plan Local</h3>
                    <p class="mb-6">Protección esencial para viajes cortos con cobertura médica básica y asistencia en viaje.</p>
                    <ul class="mb-6 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Asistencia médica</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Pérdida de equipaje</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Asistencia legal</li>
                    </ul>
                    {{-- <div class="text-2xl font-bold text-secondary">Desde $25/día</div> --}}
                </div>

                <div class="service-card bg-white p-8 rounded-xl shadow-sm">
                    <div class="bg-primary text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-suitcase text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Plan Mundial</h3>
                    <p class="mb-6">Cobertura completa para viajes largos o familiares, con protección extendida y beneficios adicionales.</p>
                    <ul class="mb-6 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Todo el plan Básico +</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Cancelación de viaje</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Repatriación médica</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Cobertura deportiva</li>
                    </ul>
                    {{-- <div class="text-2xl font-bold text-secondary">Desde $40/día</div> --}}
                </div>

                <div class="service-card bg-white p-8 rounded-xl shadow-sm">
                    <div class="bg-primary text-white p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-globe-europe text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Europa Low Cost</h3>
                    <p class="mb-6">Protección para viajes internacionales con coberturas ampliadas y asistencia en múltiples idiomas.</p>
                    <ul class="mb-6 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Todo el plan Premium +</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Traslado sanitario</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Extensión de estancia</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-success mr-2"></i> Cobertura Schengen</li>
                    </ul>
                    {{-- <div class="text-2xl font-bold text-secondary">Desde $55/día</div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="pt-5 pb-28 bg-sand">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark font-serif">UPGRADES <span class="text-primary">VIP</span></h2>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600">Ofrecemos una amplia gama de servicios diseñados para protegerte en cada etapa de tu viaje.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8">

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">
                        <img src="{{ asset('images/pregnant.png') }}" alt="Materna VIP">

                    </div>
                    <h3 class="text-xl font-bold mb-4">Materna VIP</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial US$ 10.000. Hasta 32 semanas de gestación. Límite de edad de 19 a 45 años.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">

                        <img src="{{ asset('images/exercise.png') }}" alt="Sport VIP">


                    </div>
                    <h3 class="text-xl font-bold mb-4">Sport VIP</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial hasta el tope de asistencia médica por accidente sin exceder US$ 100.000. Prácticade deportes categoría 2,3 y 4. Límite de edad de 15 a 65 años.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 flex rounded-full bg-primary/10 p-3 items-center justify-center mb-6">

                        <img src="{{ asset('images/ask.png') }}" alt="Multi Causa">


                    </div>
                    <h3 class="text-xl font-bold mb-4">Multi Causa</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial desde US$ 1.000 hasta US$ 10.000 (Seguro de cancelación multi causa). Límite de edad 74 años.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">
                        <img src="{{ asset('images/travel.png') }}" alt="Objetos Personales">

                    </div>
                    <h3 class="text-xl font-bold mb-4">Objetos Personales</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial US$ 2.000. No acumulable con otras ofertas.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">

                        <img src="{{ asset('images/laptop.png') }}" alt="Tech Protection">

                    </div>
                    <h3 class="text-xl font-bold mb-4">Tech Protection</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial US$ 2.000. No acumulable con otras ofertas.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">
                        <img src="{{ asset('images/ferris-wheel.png') }}" alt="Parque Temático">


                    </div>
                    <h3 class="text-xl font-bold mb-4">Parque Temático</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial 70% del ticket hasta los 74 años.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">
                        <img src="{{ asset('images/alert.png') }}" alt="Gestión de Crisis">

                    </div>
                    <h3 class="text-xl font-bold mb-4">Gestión de Crisis</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial hasta el tope máximo establecido. Límite de edad 74 años.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">
                        <img src="{{ asset('images/people.png') }}" alt="Enfermedad Preexistente">


                    </div>
                    <h3 class="text-xl font-bold mb-4">Enfermedad Preexistente</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial 30% de la cobertura médica, sin exceder US$ 30.000. Límite de edad 74 años.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">
                        <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M19.8,18.4C19.8,18.4,19.8,18.4,19.8,18.4l-4-4c0,0,0,0,0,0l-2.1-2.1l0,0l-8-8c0,0,0,0,0,0L2.7,1.3c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4L5,6.4C3.9,7.7,3.2,9.3,3.1,11H2c-0.6,0-1,0.4-1,1s0.4,1,1,1h1.1c0.2,1.7,0.9,3.3,1.9,4.6l-0.8,0.8c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0L6.4,19c1.3,1.1,2.9,1.7,4.6,1.9V22c0,0.6,0.4,1,1,1s1-0.4,1-1v-1.1c1.7-0.2,3.3-0.9,4.6-1.9l3.7,3.7c0.2,0.2,0.4,0.3,0.7,0.3c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L19.8,18.4z M9,16c-0.6,0-1-0.4-1-1s0.4-1,1-1s1,0.4,1,1S9.6,16,9,16z M9.5,12C8.7,12,8,11.3,8,10.5c0-0.3,0.1-0.6,0.3-0.8l2.1,2.1C10.1,11.9,9.8,12,9.5,12z M20.9,13H22c0.6,0,1-0.4,1-1s-0.4-1-1-1h-1.1c-0.2-1.7-0.9-3.3-1.9-4.6l0.8-0.8c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0L17.6,5c-1.3-1.1-2.9-1.7-4.6-1.9V2c0-0.6-0.4-1-1-1s-1,0.4-1,1v1.1c-1,0.1-2,0.4-2.9,0.8l12,12C20.5,15,20.8,14,20.9,13z M15,10c-0.6,0-1-0.4-1-1s0.4-1,1-1s1,0.4,1,1S15.6,10,15,10z"></path>
                            </g>
                        </svg>

                    </div>
                    <h3 class="text-xl font-bold mb-4">Cancelación y Cuarentena</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial, hasta el tope máximo, establecido por beneficio (gastos de hotel, alimentación, traslado, penalidad o cancelación de viaje, telemedicina, telepsicología) Límite de edad 70 años.</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg service-card animate-on-scroll">
                    <div class="w-16 h-16 rounded-full bg-primary/10 p-3 flex items-center justify-center mb-6">
                        <svg height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48.839 48.839" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path style="fill:#030104;" d="M39.041,36.843c2.054,3.234,3.022,4.951,3.022,6.742c0,3.537-2.627,5.252-6.166,5.252 c-1.56,0-2.567-0.002-5.112-1.326c0,0-1.649-1.509-5.508-1.354c-3.895-0.154-5.545,1.373-5.545,1.373 c-2.545,1.323-3.516,1.309-5.074,1.309c-3.539,0-6.168-1.713-6.168-5.252c0-1.791,0.971-3.506,3.024-6.742 c0,0,3.881-6.445,7.244-9.477c2.43-2.188,5.973-2.18,5.973-2.18h1.093v-0.001c0,0,3.698-0.009,5.976,2.181 C35.059,30.51,39.041,36.844,39.041,36.843z M16.631,20.878c3.7,0,6.699-4.674,6.699-10.439S20.331,0,16.631,0 S9.932,4.674,9.932,10.439S12.931,20.878,16.631,20.878z M10.211,30.988c2.727-1.259,3.349-5.723,1.388-9.971 s-5.761-6.672-8.488-5.414s-3.348,5.723-1.388,9.971C3.684,29.822,7.484,32.245,10.211,30.988z M32.206,20.878 c3.7,0,6.7-4.674,6.7-10.439S35.906,0,32.206,0s-6.699,4.674-6.699,10.439C25.507,16.204,28.506,20.878,32.206,20.878z M45.727,15.602c-2.728-1.259-6.527,1.165-8.488,5.414s-1.339,8.713,1.389,9.972c2.728,1.258,6.527-1.166,8.488-5.414 S48.455,16.861,45.727,15.602z"></path>
                                </g>
                            </g>
                        </svg>

                    </div>
                    <h3 class="text-xl font-bold mb-4">Asistencia para Mascotas</h3>
                    <p class="text-gray-600 mb-4">Cobertura mundial de US$ 5.000 a US$ 10.000. Límite de edad de la mascota desde 4 meses hasta los 8 años. UPGRADE VIP (Beneficios que puede adicionar a su plan).</p>

                    {{-- <a href="#" class="text-primary font-medium flex items-center">
                        Ver detalles
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a> --}}
                </div>


            </div>
        </div>
    </section>


    <!-- Sección Testimonios -->
    {{-- <section id="testimonios" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Lo que dicen nuestros clientes</h2>
                <p class="text-xl max-w-3xl mx-auto mb-6">Experiencias reales de viajeros protegidos por Tu Dr. en Viajes </p>
                <div class="w-20 h-1 bg-tertiary mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card bg-light p-8 rounded-xl">
                    <div class="quote-icon mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="mb-6 italic">"Tuve un accidente en mi viaje a Italia y Tu Dr. en Viajes  gestionó todo de forma impecable. Desde la atención médica hasta mi repatriación, todo fue perfecto."</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16 mr-4"></div>
                        <div>
                            <h4 class="font-bold">María López</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card bg-light p-8 rounded-xl">
                    <div class="quote-icon mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="mb-6 italic">"Perdí mi equipaje en un vuelo a París. En menos de 24 horas, Tu Dr. en Viajes  me proporcionó un adelanto para comprar lo necesario. ¡Servicio excepcional!"</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16 mr-4"></div>
                        <div>
                            <h4 class="font-bold">Carlos Mendoza</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card bg-light p-8 rounded-xl">
                    <div class="quote-icon mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="mb-6 italic">"Contraté el seguro para mi viaje de estudios a Canadá. La cobertura médica fue fundamental cuando tuve apendicitis. Gracias a Tu Dr. en Viajes , todo fue más fácil."</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16 mr-4"></div>
                        <div>
                            <h4 class="font-bold">Ana Rodríguez</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Sección Testimonios Mejorada -->
    <section id="testimonios" class="py-24 testimonial-section parallax" style="background-image: url('https://images.unsplash.com/photo-1499678329028-101435549a4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')">


        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block p-3 rounded-full bg-tertiary bg-opacity-10 mb-6">
                    <i class="fas fa-comments text-tertiary text-3xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Experiencias que inspiran confianza</h2>
                <p class="text-xl max-w-3xl mx-auto mb-6 text-white">Viajeros como tú comparten sus historias de protección alrededor del mundo</p>

                <div class="w-20 h-1 bg-tertiary mx-auto"></div>
            </div>

            <!-- Elementos decorativos flotantes -->
            <div class="hidden md:block">
                <div class="absolute top-20 left-10 animate-float">
                    <div class="bg-accent rounded-full w-10 h-10 opacity-20"></div>
                </div>
                <div class="absolute top-1/3 right-20 animate-float-delay">
                    <div class="bg-tertiary rounded-full w-8 h-8 opacity-20"></div>
                </div>
                <div class="absolute bottom-40 left-1/4 animate-float-delay-2">
                    <div class="bg-secondary rounded-full w-6 h-6 opacity-20"></div>
                </div>
            </div>

            <!-- Carrusel de testimonios -->
            <div class="glide max-w-6xl mx-auto">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <!-- Testimonio 1 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="María López" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">María López</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Roma, Italia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Tuve un accidente durante mi viaje a Italia y Tu Dr. en Viajes gestionó todo de forma impecable. Desde la atención médica hasta mi repatriación, todo fue perfecto. ¡Increíble servicio en momentos difíciles!"</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-suitcase-rolling text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Problema con equipaje</div>
                                        <div class="text-gray-500">Resuelto en 24 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>

                        <!-- Testimonio 2 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Carlos Mendoza" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Carlos Mendoza</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>París, Francia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Perdí mi equipaje en un vuelo a París. En menos de 24 horas, Tu Dr. en Viajes me proporcionó un adelanto para comprar lo necesario. ¡Servicio excepcional y muy rápida respuesta en pleno viaje!"</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-stethoscope text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Emergencia médica</div>
                                        <div class="text-gray-500">Resuelto en 48 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>

                        <!-- Testimonio 3 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80" alt="Ana Rodríguez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Ana Rodríguez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Vancouver, Canadá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Contraté el seguro para mi viaje de estudios a Canadá. La cobertura médica fue fundamental cuando tuve apendicitis. Gracias a Tu Dr. en Viajes , todo fue más fácil y sin preocupaciones económicas."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-plane text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Vuelo cancelado</div>
                                        <div class="text-gray-500">Resuelto en 12 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>

                        <!-- Testimonio 4 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" alt="Juan Pérez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Juan Pérez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Nueva York, USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Mi vuelo fue cancelado por una tormenta y Tu Dr. en Viajes me cubrió los gastos de hotel y comida sin problemas. La app móvil es muy fácil de usar para gestionar todo directamente desde el teléfono."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-hotel text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Alojamiento alternativo</div>
                                        <div class="text-gray-500">Resuelto en 6 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>

                        <!-- Testimonio 5 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" alt="Juan Pérez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Juan Pérez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Nueva York, USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Mi vuelo fue cancelado por una tormenta y Tu Dr. en Viajes me cubrió los gastos de hotel y comida sin problemas. La app móvil es muy fácil de usar para gestionar todo directamente desde el teléfono."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-hotel text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Alojamiento alternativo</div>
                                        <div class="text-gray-500">Resuelto en 6 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>


                        <!-- Testimonio 5 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" alt="Juan Pérez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Juan Pérez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Nueva York, USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Mi vuelo fue cancelado por una tormenta y Tu Dr. en Viajes me cubrió los gastos de hotel y comida sin problemas. La app móvil es muy fácil de usar para gestionar todo directamente desde el teléfono."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-hotel text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Alojamiento alternativo</div>
                                        <div class="text-gray-500">Resuelto en 6 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>


                        <!-- Testimonio 7 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" alt="Juan Pérez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Juan Pérez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Nueva York, USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Mi vuelo fue cancelado por una tormenta y Tu Dr. en Viajes me cubrió los gastos de hotel y comida sin problemas. La app móvil es muy fácil de usar para gestionar todo directamente desde el teléfono."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-hotel text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Alojamiento alternativo</div>
                                        <div class="text-gray-500">Resuelto en 6 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>


                        <!-- Testimonio 8 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" alt="Juan Pérez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Juan Pérez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Nueva York, USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Mi vuelo fue cancelado por una tormenta y Tu Dr. en Viajes me cubrió los gastos de hotel y comida sin problemas. La app móvil es muy fácil de usar para gestionar todo directamente desde el teléfono."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-hotel text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Alojamiento alternativo</div>
                                        <div class="text-gray-500">Resuelto en 6 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>


                        <!-- Testimonio 9 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" alt="Juan Pérez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Juan Pérez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Nueva York, USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Mi vuelo fue cancelado por una tormenta y Tu Dr. en Viajes me cubrió los gastos de hotel y comida sin problemas. La app móvil es muy fácil de usar para gestionar todo directamente desde el teléfono."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-hotel text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Alojamiento alternativo</div>
                                        <div class="text-gray-500">Resuelto en 6 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>


                        <!-- Testimonio 10 -->
                        <li class="glide__slide">
                            <div class="testimonial-card p-8 h-full">
                                <div class="flex items-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" alt="Juan Pérez" class="testimonial-avatar rounded-full mr-5">
                                    <div>
                                        <h4 class="font-bold text-xl">Juan Pérez</h4>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400 mr-4">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <div class="map-pin mr-2"></div>
                                                <span>Nueva York, USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-8 text-lg italic relative">"Mi vuelo fue cancelado por una tormenta y Tu Dr. en Viajes me cubrió los gastos de hotel y comida sin problemas. La app móvil es muy fácil de usar para gestionar todo directamente desde el teléfono."</p>
                                <div class="flex items-center">
                                    <div class="bg-light p-3 rounded-lg mr-4">
                                        <i class="fas fa-hotel text-tertiary text-xl"></i>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-semibold">Alojamiento alternativo</div>
                                        <div class="text-gray-500">Resuelto en 6 horas</div>
                                    </div>
                                </div>
                                <i class="fas fa-quote-right quote-icon"></i>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:bg-light focus:outline-none z-20">
                        <i class="fas fa-chevron-left text-tertiary"></i>
                    </button>
                    <button class="glide__arrow glide__arrow--right absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow-lg hover:bg-light focus:outline-none z-20">
                        <i class="fas fa-chevron-right text-tertiary"></i>
                    </button>
                </div>
            </div>

            <!-- Estadísticas de confianza -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
                <div class="stats-card p-6 text-white text-center rounded-xl">
                    <div class="text-4xl font-bold mb-2">15K+</div>
                    <div>Viajeros protegidos</div>
                    <div class="mt-4 flex justify-center">
                        <i class="fas fa-users text-light text-opacity-70 text-2xl"></i>
                    </div>
                </div>

                <div class="stats-card p-6 text-white text-center rounded-xl">
                    <div class="text-4xl font-bold mb-2">98%</div>
                    <div>Clientes satisfechos</div>
                    <div class="mt-4 flex justify-center">
                        <i class="fas fa-smile text-light text-opacity-70 text-2xl"></i>
                    </div>
                </div>

                <div class="stats-card p-6 text-white text-center rounded-xl">
                    <div class="text-4xl font-bold mb-2">190+</div>
                    <div>Países cubiertos</div>
                    <div class="mt-4 flex justify-center">
                        <div class="world-icon">
                            <svg viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="45"></circle>
                                <circle cx="20" cy="30" r="2"></circle>
                                <circle cx="40" cy="25" r="2"></circle>
                                <circle cx="70" cy="20" r="2"></circle>
                                <circle cx="80" cy="40" r="2"></circle>
                                <circle cx="65" cy="60" r="2"></circle>
                                <circle cx="35" cy="70" r="2"></circle>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="stats-card p-6 text-white text-center rounded-xl">
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div>Asistencia mundial</div>
                    <div class="mt-4 flex justify-center">
                        <i class="fas fa-headset text-light text-opacity-70 text-2xl"></i>
                    </div>
                </div>
            </div> --}}

            <!-- Llamada a la acción -->
            {{-- <div class="text-center mt-16">
                <h3 class="text-2xl md:text-3xl font-bold mb-6">¿Listo para tu próxima aventura con tranquilidad?</h3>
                <a href="#cotizar" class="inline-block bg-alert hover:bg-secondary text-white font-bold py-4 px-10 rounded-full text-lg transition duration-300 shadow-lg">
                    Cotiza tu seguro ahora
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div> --}}
        </div>
    </section>


    <!-- Sección Cotizar -->
    <section id="cotizar" class="py-20 bg-gradient-to-r from-primary to-tertiary text-white">

        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Cotiza tu seguro de viaje</h2>
                    <p class="text-xl">Completa el formulario y recibe tu cotización personalizada en minutos</p>
                </div>

                <div class="bg-white text-primary rounded-xl shadow-xl p-8">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 font-medium">Tipo de seguro</label>
                                <select class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                                    <option>Selecciona un plan</option>
                                    <option>Local</option>
                                    <option>Mundial</option>
                                    <option>Europa Low Cost</option>
                                </select>
                            </div>

                            <div>
                                <label class="block mb-2 font-medium">Destino</label>
                                <select class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                                    <option>Selecciona destino</option>
                                    <option>América del Norte</option>
                                    <option>América del Sur</option>
                                    <option>Europa</option>
                                    <option>Asia</option>
                                    <option>África</option>
                                    <option>Oceanía</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 font-medium">Fecha de salida</label>
                                <input type="date" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                            </div>

                            <div>
                                <label class="block mb-2 font-medium">Fecha de regreso</label>
                                <input type="date" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block mb-2 font-medium">Adultos</label>
                                <select class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                                    <option>0</option>
                                    <option selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4+</option>
                                </select>
                            </div>

                            <div>
                                <label class="block mb-2 font-medium">Menores (0-17)</label>
                                <select class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                                    <option selected>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4+</option>
                                </select>
                            </div>

                            <div>
                                <label class="block mb-2 font-medium">Mayores (65+)</label>
                                <select class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                                    <option selected>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 font-medium">Nombre completo</label>
                                <input type="text" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                            </div>

                            <div>
                                <label class="block mb-2 font-medium">Correo electrónico</label>
                                <input type="email" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-tertiary focus:ring-tertiary">
                                <span class="ml-2">Acepto recibir información sobre promociones y servicios</span>
                            </label>
                        </div>

                        <button type="submit" class="w-full bg-tertiary hover:bg-secondary text-white font-bold py-4 px-6 rounded-lg text-lg transition duration-300">Solicitar cotización</button>
                    </form>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-light">¿Prefieres atención personalizada? <a href="#" class="text-tertiary font-bold hover:underline">Contáctanos</a></p>
                    <div class="flex justify-center mt-6 space-x-4">
                        <div class="bg-white p-3 rounded-full">
                            <i class="fas fa-phone text-primary text-xl"></i>
                        </div>
                        <div class="bg-white p-3 rounded-full">
                            <i class="fab fa-whatsapp text-primary text-xl"></i>
                        </div>
                        <div class="bg-white p-3 rounded-full">
                            <i class="fas fa-envelope text-primary text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-primary to-secondary">

        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">¿Listo para tu próximo viaje?</h2>
                <p class="text-white/90 text-xl mb-8">Protege tu aventura con nuestro seguro de viaje y disfruta con tranquilidad.</p>
                <a href="https://tudrenviajes.xyz/app/pages/login.php" class="px-8 py-4 bg-alert text-white rounded-full font-bold hover:bg-warm transition shadow-lg">
                    Cotiza tu seguro ahora
                </a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-primary text-light py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-6">
                        {{-- <div class="bg-white p-2 rounded-full mr-3">
                            <i class="fas fa-shield-alt text-primary text-xl"></i>
                        </div>
                        <span class="text-white text-xl font-bold">Tu Dr. en Viajes </span> --}}
                        <img src="{{ asset('images/logo_3.png') }}" class="w-28" alt="Viaja protegido con nuestro seguro médico global">
                    </div>
                    <p class="mb-6">Protegiendo tus viajes desde 2008 con soluciones de seguro adaptadas a cada viajero.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-light hover:text-tertiary"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light hover:text-tertiary"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light hover:text-tertiary"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light hover:text-tertiary"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Enlaces rápidos</h4>
                    <ul class="space-y-3">
                        <li><a href="#inicio" class="hover:text-tertiary transition">Inicio</a></li>
                        <li><a href="#nosotros" class="hover:text-tertiary transition">Sobre Nosotros</a></li>
                        <li><a href="#servicios" class="hover:text-tertiary transition">Servicios</a></li>
                        <li><a href="#testimonios" class="hover:text-tertiary transition">Testimonios</a></li>
                        <li><a href="#cotizar" class="hover:text-tertiary transition">Cotizar Seguro</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Nuestros Servicios</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-tertiary transition">Plan Local</a></li>
                        <li><a href="#" class="hover:text-tertiary transition">Plan Mundial</a></li>
                        <li><a href="#" class="hover:text-tertiary transition">Europa Low Cost</a></li>
                        <li><a href="#" class="hover:text-tertiary transition">UPGRADES VIP</a></li>
                        {{-- <li><a href="#" class="hover:text-tertiary transition">Seguro de Negocios</a></li> --}}
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Contacto</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-tertiary"></i>
                            <span>Av. Principal de Chacao, Caracas, Venezuela</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3 text-tertiary"></i>
                            <span>+58 424 2271498</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-tertiary"></i>
                            <span>info@tudrenviajes.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fab fa-whatsapp mt-1 mr-3 text-tertiary"></i>
                            <span>+58 424 2271498</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-secondary mt-12 pt-8 text-center">
                <p>&copy; 2023 TuDrEnViajes.com Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle del menú móvil
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Cerrar menú al hacer clic en un enlace
        const menuLinks = document.querySelectorAll('#mobile-menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Animación para los testimonios al aparecer en pantalla
        const testimonialCards = document.querySelectorAll('.testimonial-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        testimonialCards.forEach(card => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });

    </script>

    <script>
        // Inicialización del carrusel
        new Glide('.glide', {
            type: 'carousel'
            , perView: 1
            , gap: 30
            , autoplay: 4000
            , breakpoints: {
                768: {
                    perView: 1
                }
                , 1024: {
                    perView: 2
                }
            }
        }).mount();

    </script>

    <!-- Schema.org para SEO -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org "
            , "@type": "Organization"
            , "name": "Tu Doctor en Viajes"
            , "alternateName": "Asistencia en Viaje"
            , "description": "Seguro médico y asistencia medica en viaje con cobertura mundial."
            , "url": "{{ url('/') }}"
            , "logo": "{{ asset('images/logo_3.png') }}"
            , "sameAs": [
                "https://instagram.com/tudrenviajes "
            ]
            , "contactPoint": {
                "@type": "ContactPoint"
                , "telephone": "+58 424 2271498"
                , "contactType": "departamento comercial"
            }
        }

    </script>


</body>
</html>
