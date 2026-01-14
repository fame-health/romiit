<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami - RomIT | Pengembang Aplikasi & Website Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Meta Tags yang Diperbarui -->
    <meta name="description" content="RomIT - Layanan lengkap pengembangan aplikasi dan website terpercaya di Indonesia. Web Development, Mobile Apps, System Integration, UI/UX Design, dan Digital Marketing.">
    <meta name="keywords" content="layanan IT, jasa pembuatan website, developer aplikasi mobile, web development, software house Indonesia, sistem ERP, digital agency, jasa IT murah, konsultan IT">
    <meta name="author" content="RomIT - Digital Solutions">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="general">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://romitweb.com/layanan">
    <meta property="og:title" content="Layanan Lengkap - RomIT | Pengembang Aplikasi & Website">
    <meta property="og:description" content="Solusi digital komprehensif untuk bisnis Anda. Web Development, Mobile Apps, UI/UX Design, System Integration, dan Digital Marketing.">
    <meta property="og:image" content="{{ asset('img/image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="RomIT Digital Solutions">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@romit_digital">
    <meta name="twitter:creator" content="@romit_digital">
    <meta name="twitter:title" content="Layanan Lengkap - RomIT Digital Solutions">
    <meta name="twitter:description" content="Transformasi digital bisnis Anda dengan layanan IT terpercaya. Konsultasi gratis via WhatsApp.">
    <meta name="twitter:image" content="{{ asset('img/image.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://romitweb.com/layanan">

    <!-- Additional Meta Tags -->
    <meta name="geo.region" content="ID">
    <meta name="geo.placename" content="Indonesia">
    <meta name="distribution" content="global">
    <meta name="target" content="all">
    <meta name="apple-mobile-web-app-title" content="RomIT Services">
    <meta name="application-name" content="RomIT">
    <meta name="msapplication-TileColor" content="#1e3a8a">
    <meta name="theme-color" content="#1e3a8a">

    <!-- Viewport tambahan untuk mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="format-detection" content="telephone=yes">

    <!-- Dublin Core Metadata -->
    <meta name="DC.title" content="Layanan - RomIT Digital Solutions">
    <meta name="DC.creator" content="RomIT Digital Team">
    <meta name="DC.subject" content="IT Services, Software Development, Web Development, Mobile Apps">
    <meta name="DC.description" content="Layanan pengembangan aplikasi dan website profesional di Indonesia">
    <meta name="DC.publisher" content="RomIT">
    <meta name="DC.date" content="2026-01-14">

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#1e3a8a',
                    'primary-light': '#3b82f6',
                    'primary-dark': '#1e40af',
                    accent: '#38bdf8',          /* sky-400 */
                    'accent-light': '#7dd3fc',  /* sky-300 */
                    'accent-dark': '#0284c7'    /* sky-600 */
                },
                fontFamily: {
                    poppins: ['Poppins', 'sans-serif']
                }
            }
        }
    }
</script>

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    /* GRADIENT ACCENT → BIRU MUDA */
    .gradient-accent {
        background: linear-gradient(135deg, #38bdf8 0%, #0284c7 100%);
    }

    .gradient-dark {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .hover-lift {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .shine-effect {
        position: relative;
        overflow: hidden;
    }

    .shine-effect::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.3),
            transparent
        );
        transition: left 0.5s;
    }

    .shine-effect:hover::before {
        left: 100%;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    .floating {
        animation: float 3s ease-in-out infinite;
    }

    .code-bg {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    }

    .tech-icon {
        transition: all 0.3s ease;
    }

    .tech-icon:hover {
        transform: scale(1.2);
        filter: drop-shadow(0 0 8px rgba(56, 189, 248, 0.5));
    }

    .service-card {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, transparent, #38bdf8, transparent);
        transition: left 0.5s;
    }

    .service-card:hover::before {
        left: 100%;
    }
</style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-md shadow-lg fixed w-full top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-3">
                <div class="flex items-center space-x-4 group">
                    <div class="rounded-lg p-2 shadow-lg group-hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('img/image.png') }}" alt="I.CO Logo" class="w-10 h-10 object-contain">
                    </div>
                    <div>
                        <span class="text-xl font-bold text-primary">RomIT</span>
                        <div class="text-xs text-gray-600 -mt-1 ">Pengembang Aplikasi dan Website di Indonesia</div>
                    </div>
                </div>

                <div class="hidden lg:flex items-center space-x-6">
                    <a href="/" class="text-gray-700 text-sm hover:text-accent transition-colors">Beranda</a>
                    <a href="layanan-unggulan" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative">
                        Layanan
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
                    <a href="tentang-kami" class="text-gray-700 text-sm hover:text-accent transition-colors">Tentang</a>
                    <a href="hubungi-kami" class="text-gray-700 text-sm hover:text-accent transition-colors">Kontak</a>
                    <a href="https://wa.me/62895614008787" target="_blank" class="gradient-accent text-white text-sm font-bold px-5 py-2 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fab fa-whatsapp mr-1.5"></i>
                        Konsultasi Gratis
                    </a>
                </div>

                <button id="mobile-menu-btn" class="lg:hidden text-primary focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <div id="mobile-menu" class="hidden lg:hidden pb-4 space-y-1">
                <a href="/" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Beranda</a>
                <a href="layanan-unggulan" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Layanan</a>
                <a href="tentang-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Tentang</a>
                <a href="hubungi-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Kontak</a>
                <a href="https://wa.me/62895614008787" target="_blank" class="block w-full gradient-accent text-sm text-white font-bold py-2 px-3 rounded-lg mt-2 text-center">
                    <i class="fab fa-whatsapp mr-1.5"></i>
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 gradient-dark text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-48 h-48 bg-accent rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-accent rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-block mb-4">
                <span class="bg-accent/20 text-accent px-4 py-2 rounded-full text-sm font-semibold backdrop-blur-sm border border-accent/30">
                    <i class="fas fa-laptop-code mr-2"></i>Layanan Digital Kami
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                Solusi <span class="gradient-accent bg-clip-text text-transparent">Digital Lengkap</span> untuk Bisnis Anda
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Dari ide hingga eksekusi, kami menyediakan layanan IT komprehensif untuk mengakselerasi transformasi digital bisnis Anda
            </p>
        </div>
    </section>

    <!-- Main Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Layanan Unggulan</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Paket Layanan Digital
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Development -->
                <div class="service-card bg-gradient-to-br from-primary/5 to-primary/10 p-8 rounded-2xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-laptop-code text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Web Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Pembuatan website responsive, e-commerce, sistem informasi, dan aplikasi web custom dengan teknologi terbaru.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Website Company Profile</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">E-commerce & Marketplace</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Sistem Informasi & ERP</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">API Integration</span>
                        </div>
                    </div>

                    <a href="https://wa.me/62895614008787" target="_blank" class="block w-full bg-primary text-white text-center py-3 rounded-xl font-semibold hover:bg-primary-dark transition">
                        <i class="fab fa-whatsapp mr-2"></i> Konsultasi Sekarang
                    </a>
                </div>

                <!-- Mobile Apps Development -->
                <div class="service-card bg-gradient-to-br from-accent/5 to-accent/10 p-8 rounded-2xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-mobile-alt text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Mobile Apps Development</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Pengembangan aplikasi Android & iOS native/hybrid untuk berbagai kebutuhan bisnis dan startup.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Aplikasi Android & iOS Native</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Hybrid Apps (React Native/Flutter)</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">App Publishing ke Play Store/App Store</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Maintenance & Update</span>
                        </div>
                    </div>

                    <a href="https://wa.me/62895614008787" target="_blank" class="block w-full gradient-accent text-white text-center py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        <i class="fab fa-whatsapp mr-2"></i> Konsultasi Sekarang
                    </a>
                </div>

                <!-- UI/UX Design -->
                <div class="service-card bg-gradient-to-br from-primary/5 to-primary/10 p-8 rounded-2xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-palette text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">UI/UX Design</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Desain antarmuka yang user-friendly dengan pengalaman pengguna optimal untuk website dan aplikasi mobile.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">User Interface Design</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">User Experience Research</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Prototyping & Wireframing</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Design System</span>
                        </div>
                    </div>

                    <a href="https://wa.me/62895614008787" target="_blank" class="block w-full bg-primary text-white text-center py-3 rounded-xl font-semibold hover:bg-primary-dark transition">
                        <i class="fab fa-whatsapp mr-2"></i> Konsultasi Sekarang
                    </a>
                </div>

                <!-- System Integration -->
                <div class="service-card bg-gradient-to-br from-accent/5 to-accent/10 p-8 rounded-2xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-cogs text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">System Integration</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Integrasi sistem lama dengan teknologi baru, pengembangan API, dan sistem terdistribusi untuk bisnis.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">API Development & Integration</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Legacy System Modernization</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Microservices Architecture</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Third-Party Integration</span>
                        </div>
                    </div>

                    <a href="https://wa.me/62895614008787" target="_blank" class="block w-full gradient-accent text-white text-center py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        <i class="fab fa-whatsapp mr-2"></i> Konsultasi Sekarang
                    </a>
                </div>

                <!-- Digital Marketing -->
                <div class="service-card bg-gradient-to-br from-primary/5 to-primary/10 p-8 rounded-2xl hover-lift border border-primary/10">
                    <div class="bg-primary text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-chart-line text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Digital Marketing</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Strategi pemasaran digital, SEO, social media management, dan kampanye iklan online untuk meningkatkan bisnis.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Search Engine Optimization (SEO)</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Social Media Marketing</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Google Ads & Facebook Ads</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Content Marketing</span>
                        </div>
                    </div>

                    <a href="https://wa.me/62895614008787" target="_blank" class="block w-full bg-primary text-white text-center py-3 rounded-xl font-semibold hover:bg-primary-dark transition">
                        <i class="fab fa-whatsapp mr-2"></i> Konsultasi Sekarang
                    </a>
                </div>

                <!-- Maintenance & Support -->
                <div class="service-card bg-gradient-to-br from-accent/5 to-accent/10 p-8 rounded-2xl hover-lift border border-accent/10">
                    <div class="gradient-accent text-white p-5 rounded-2xl inline-block mb-6 shadow-lg">
                        <i class="fas fa-headset text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-2xl mb-3">Maintenance & Support</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Layanan maintenance, update, dan dukungan teknis 24/7 untuk menjaga aplikasi dan website tetap optimal.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Technical Support 24/7</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Regular Updates & Security Patch</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Server Management & Monitoring</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-sm text-gray-600">Backup & Disaster Recovery</span>
                        </div>
                    </div>

                    <a href="https://wa.me/62895614008787" target="_blank" class="block w-full gradient-accent text-white text-center py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        <i class="fab fa-whatsapp mr-2"></i> Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Workflow</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Proses Pengembangan Digital Kami
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-primary/10 text-primary p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-lightbulb text-4xl"></i>
                        </div>
                        <div class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">1</div>
                        <h4 class="font-bold text-primary text-lg">Discovery</h4>
                    </div>
                    <p class="text-sm text-gray-600">Analisis kebutuhan dan tujuan proyek digital Anda</p>
                </div>

                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-accent/10 text-accent p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-pencil-ruler text-4xl"></i>
                        </div>
                        <div class="gradient-accent text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">2</div>
                        <h4 class="font-bold text-primary text-lg">Design</h4>
                    </div>
                    <p class="text-sm text-gray-600">Wireframing, UI/UX design, dan prototyping</p>
                </div>

                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-primary/10 text-primary p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-code text-4xl"></i>
                        </div>
                        <div class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">3</div>
                        <h4 class="font-bold text-primary text-lg">Development</h4>
                    </div>
                    <p class="text-sm text-gray-600">Pengembangan dengan teknologi terbaru dan best practices</p>
                </div>

                <div class="text-center">
                    <div class="bg-white p-6 rounded-2xl shadow-xl hover-lift mb-4">
                        <div class="bg-accent/10 text-accent p-5 rounded-2xl inline-block mb-4">
                            <i class="fas fa-rocket text-4xl"></i>
                        </div>
                        <div class="gradient-accent text-white w-10 h-10 rounded-full flex items-center justify-center font-bold mx-auto mb-3">4</div>
                        <h4 class="font-bold text-primary text-lg">Launch & Support</h4>
                    </div>
                    <p class="text-sm text-gray-600">Deployment, testing, dan dukungan pasca-launch</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Keunggulan</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Mengapa Memilih RomIT?
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl hover-lift border-l-4 border-primary">
                    <div class="bg-primary/10 text-primary p-4 rounded-xl inline-block mb-6">
                        <i class="fas fa-user-tie text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Tim Professional</h4>
                    <p class="text-gray-600 leading-relaxed">Tim developer dan designer berpengalaman dengan sertifikasi di bidang teknologi terkini.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl hover-lift border-l-4 border-accent">
                    <div class="bg-accent/10 text-accent p-4 rounded-xl inline-block mb-6">
                        <i class="fas fa-clock text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Tepat Waktu</h4>
                    <p class="text-gray-600 leading-relaxed">Komitmen terhadap deadline dengan sistem agile development yang terstruktur.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl hover-lift border-l-4 border-primary">
                    <div class="bg-primary/10 text-primary p-4 rounded-xl inline-block mb-6">
                        <i class="fas fa-dollar-sign text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Harga Kompetitif</h4>
                    <p class="text-gray-600 leading-relaxed">Paket layanan dengan harga transparan dan fleksibel sesuai kebutuhan dan budget Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 gradient-dark text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Siap Mengembangkan Proyek Digital Anda?</h2>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                Diskusikan ide dan kebutuhan digital bisnis Anda dengan tim expert kami. Konsultasi GRATIS tanpa biaya.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/62895614008787" target="_blank" class="gradient-accent text-white font-bold px-8 py-4 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-2"></i> Hubungi via WhatsApp
                </a>
                <a href="hubungi-kami" class="glass-effect text-white font-bold px-8 py-4 rounded-xl hover:bg-white/20 transition">
                    <i class="fas fa-envelope mr-2"></i> Kirim Email
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="gradient-dark text-white pt-16 pb-8 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-20 w-64 h-64 bg-accent rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-20 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-4 gap-12">
                <!-- Brand & Deskripsi -->
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                    <div class="rounded-lg p-2 shadow-lg group-hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('img/image.png') }}" alt="I.CO Logo" class="w-10 h-10 object-contain">
                    </div>
                    <div>
                            <span class="text-lg font-bold">RomIT</span>
                            <div class="text-xs text-gray-300 -mt-1">Pengembang Aplikasi dan Website di Indonesia</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm mb-6">
                        Partner terpercaya untuk transformasi digital bisnis Anda melalui pengembangan aplikasi dan website yang inovatif.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/62895614008787" target="_blank" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/romit.web/" target="_blank" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://github.com/romit-digital" target="_blank" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/romit-digital" target="_blank" class="text-gray-400 hover:text-accent transition">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Menu Utama</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="#home" class="hover:text-accent transition">Beranda</a></li>
                        <li><a href="#layanan" class="hover:text-accent transition">Layanan</a></li>
                        <li><a href="#teknologi" class="hover:text-accent transition">Teknologi</a></li>
                        <li><a href="#kontak" class="hover:text-accent transition">Kontak</a></li>
                    </ul>
                </div>

                <!-- Layanan -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Layanan Kami</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li>Web Development</li>
                        <li>Mobile Apps</li>
                        <li>System Integration</li>
                        <li>UI/UX Design</li>
                        <li>Digital Marketing</li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-accent mt-1 mr-3"></i>
                            Jl.  Tanjung Duren
Grogol petamburan, Jakarta, Indonesia
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-accent mr-3"></i>
                            +62 895-6140-08787
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-accent mr-3"></i>
                            romit.web@gmail.com
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-500 text-sm">
                © 2026 RomIT - Digital Solutions. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // ==================
        // 1. Mobile Menu Toggle
        // ==================
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileBtn && mobileMenu) {
            mobileBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');

                // Toggle icon hamburger ↔ times
                const icon = mobileBtn.querySelector('i');
                if (icon.classList.contains('fa-bars')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // Auto close menu ketika link diklik (mobile)
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    // Reset icon ke hamburger
                    const icon = mobileBtn.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                });
            });
        }

        // ==================
        // 2. Smooth Scroll dengan offset navbar
        // ==================
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (!targetId || targetId === '#') return;

                const target = document.querySelector(targetId);
                if (!target) return;

                // Sesuaikan nilai ini dengan tinggi navbar Anda (termasuk shadow/margin)
                const navbarOffset = 90; // ±90px biasanya cukup untuk navbar fixed + shadow

                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navbarOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });

        // ==================
        // 3. Optional: Tutup mobile menu saat klik di luar area menu (extra UX)
        // ==================
        document.addEventListener('click', (e) => {
            if (!mobileMenu || !mobileBtn) return;

            const isClickInsideMenu = mobileMenu.contains(e.target);
            const isClickOnButton = mobileBtn.contains(e.target);

            if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                const icon = mobileBtn.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });
    </script>
</body>
</html>
