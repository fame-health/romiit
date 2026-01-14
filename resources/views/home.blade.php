<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomIT - Pengembang Aplikasi & Website Profesional Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Meta Tags -->
    <meta name="description" content="RomIT - Perusahaan pengembangan aplikasi dan website terpercaya di Indonesia. Layanan pembuatan aplikasi mobile, website, sistem ERP, dan solusi digital untuk bisnis Anda.">
    <meta name="keywords" content="pengembang aplikasi, pembuatan website, jasa IT Indonesia, developer aplikasi mobile, web development, software house, sistem ERP, digital agency, romit">
    <meta name="author" content="RomIT - Digital Solutions">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="general">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://romit-digital.com">
    <meta property="og:title" content="RomIT - Pengembang Aplikasi & Website Profesional Indonesia">
    <meta property="og:description" content="Transformasi digital bisnis Anda dengan solusi aplikasi dan website custom. Tim developer berpengalaman siap membantu pertumbuhan bisnis Anda.">
    <meta property="og:image" content="{{ asset('img/romit-hero.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="RomIT Digital Solutions">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@romit_digital">
    <meta name="twitter:creator" content="@romit_digital">
    <meta name="twitter:title" content="RomIT - Pengembang Aplikasi & Website">
    <meta name="twitter:description" content="Solusi digital terpercaya untuk transformasi bisnis Anda. Konsultasi gratis via WhatsApp.">
    <meta name="twitter:image" content="{{ asset('img/romit-hero.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://romit-digital.com">

    <!-- Additional Meta Tags -->
    <meta name="geo.region" content="ID">
    <meta name="geo.placename" content="Indonesia">
    <meta name="distribution" content="global">
    <meta name="target" content="all">
    <meta name="apple-mobile-web-app-title" content="RomIT Digital">
    <meta name="application-name" content="RomIT">
    <meta name="msapplication-TileColor" content="#1e3a8a">
    <meta name="theme-color" content="#1e3a8a">

    <!-- Viewport tambahan untuk mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="format-detection" content="telephone=yes">

    <!-- Dublin Core Metadata -->
    <meta name="DC.title" content="RomIT - Pengembang Aplikasi & Website">
    <meta name="DC.creator" content="RomIT Digital Solutions">
    <meta name="DC.subject" content="IT, Software Development, Web Development, Mobile Apps">
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
</style>

</head>
<body class="bg-gray-50 text-gray-800 overflow-x-hidden">
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
                    <a href="/" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative group">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
                    <a href="layanan-unggulan" class="text-gray-700 text-sm hover:text-accent transition-colors relative group">
                        Layanan
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="tentang-kami" class="text-gray-700 text-sm hover:text-accent transition-colors relative group">
                        Tentang
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="hubungi-kami" class="text-gray-700 text-sm hover:text-accent transition-colors relative group">
                        Kontak
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent group-hover:w-full transition-all duration-300"></span>
                    </a>
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
                <a href="/" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Beranda</a>
                <a href="layanan-unggulan" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Layanan</a>
                <a href="tentang-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Tentang</a>
                <a href="hubungi-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Kontak</a>
                <a href="https://wa.me/62895614008787" target="_blank" class="block w-full gradient-accent text-sm text-white font-bold py-2 px-3 rounded-lg mt-2 text-center">
                    <i class="fab fa-whatsapp mr-1.5"></i>
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </nav>
<section id="home" class="pt-16 gradient-dark text-white relative overflow-hidden w-full">
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-10 -left-10 w-48 h-48 bg-accent rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 -right-10 w-64 h-64 bg-accent rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 relative z-10">
        <div class="grid lg:grid-cols-2 gap-10 items-center">

            <div class="space-y-6">
                <div class="inline-block">
                    <span class="bg-accent/20 text-accent px-3 py-1.5 rounded-full text-[10px] sm:text-xs font-semibold backdrop-blur-sm border border-accent/30">
                        🚀 Transformasi Digital Bisnis Anda
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight">
                    Solusi <span class="gradient-accent bg-clip-text text-transparent">Digital Terbaik</span> untuk Bisnis
                </h1>
                <p class="text-sm sm:text-base text-gray-300 leading-relaxed max-w-xl">
                    RomIT menyediakan layanan pengembangan aplikasi dan website custom untuk membantu bisnis Anda berkembang di era digital. Kami menghadirkan solusi teknologi yang inovatif, scalable, dan sesuai dengan kebutuhan bisnis Anda.
                </p>

                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="https://wa.me/62895614008787" target="_blank" class="gradient-accent shine-effect text-white text-sm font-bold px-6 py-3 rounded-xl shadow-2xl hover:shadow-accent/50 transform hover:scale-105 transition-all duration-300 text-center">
                        <i class="fab fa-whatsapp mr-1.5"></i>
                        Konsultasi Gratis
                    </a>
                    <a href="#layanan" class="glass-effect text-white text-sm font-bold px-6 py-3 rounded-xl hover:bg-white/20 transition-all duration-300 text-center">
                        <i class="fas fa-laptop-code mr-1.5"></i>
                        Lihat Layanan
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-2 sm:gap-5 pt-4">
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl font-bold gradient-accent bg-clip-text text-transparent">50+</div>
                        <div class="text-[10px] sm:text-xs text-gray-400 mt-0.5">Projek Selesai</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl font-bold gradient-accent bg-clip-text text-transparent">5+</div>
                        <div class="text-[10px] sm:text-xs text-gray-400 mt-0.5">Tahun Pengalaman</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl sm:text-3xl font-bold gradient-accent bg-clip-text text-transparent">98%</div>
                        <div class="text-[10px] sm:text-xs text-gray-400 mt-0.5">Kepuasan Klien</div>
                    </div>
                </div>
            </div>

            <div class="relative floating max-w-full lg:max-w-md mx-auto w-full">
                <div class="glass-effect rounded-2xl p-4 sm:p-6 shadow-2xl">
                    <div class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-2xl p-4 sm:p-6">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full"></div>
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full"></div>
                            <div class="text-gray-400 text-[10px] sm:text-sm ml-2">code.js</div>
                        </div>
 <pre class="text-sm text-gray-300 overflow-x-auto">

<span class="text-green-400">const</span> <span class="text-blue-400">RomIT</span> = {
<span class="text-yellow-400">layanan</span>: [
<span class="text-green-300">"Web Development"</span>,
<span class="text-green-300">"Mobile Apps"</span>,
<span class="text-green-300">"System Integration"</span>,
<span class="text-green-300">"Digital Marketing"</span>
],

<span class="text-yellow-400">teknologi</span>: [
<span class="text-green-300">"React.js"</span>,
<span class="text-green-300">"Vue.js"</span>,
<span class="text-green-300">"Laravel"</span>,
<span class="text-green-300">"Flutter"</span>,
<span class="text-green-300">"Node.js"</span>

],
<span class="text-yellow-400">hasil</span>: <span class="text-green-300">"Transformasi Digital Sukses"</span>
};</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 h-12 rounded-t-[40px] relative z-20"></div>
</section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <span class="text-accent font-semibold text-xs uppercase tracking-wider">Tentang Kami</span>
                    <h2 class="text-3xl font-bold text-primary mb-4 mt-1">
                        <span class="gradient-accent bg-clip-text text-transparent">RomIT</span> - Partner Digital Bisnis Anda
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        RomIT adalah perusahaan pengembangan aplikasi dan website yang berfokus pada penyediaan solusi digital inovatif untuk bisnis di Indonesia. Kami percaya bahwa teknologi yang tepat dapat mengubah cara bisnis beroperasi dan bersaing.
                    </p>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        Dengan tim developer berpengalaman dan passion terhadap teknologi terkini, kami siap membantu mewujudkan ide-ide digital Anda menjadi kenyataan yang memberikan nilai tambah bagi bisnis Anda.
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-white p-4 rounded-xl hover-lift border border-primary/10 shadow-sm">
                            <div class="bg-primary text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-code text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Clean Code</h4>
                            <p class="text-xs text-gray-600">Kode yang bersih, terstruktur, dan mudah dikembangkan</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl hover-lift border border-accent/10 shadow-sm">
                            <div class="gradient-accent text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-mobile-alt text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Responsive Design</h4>
                            <p class="text-xs text-gray-600">Tampilan optimal di semua device dan platform</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl hover-lift border border-accent/10 shadow-sm">
                            <div class="gradient-accent text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Keamanan Data</h4>
                            <p class="text-xs text-gray-600">Prioritas keamanan dalam setiap pengembangan</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl hover-lift border border-primary/10 shadow-sm">
                            <div class="bg-primary text-white p-3 rounded-lg inline-block mb-3">
                                <i class="fas fa-headset text-xl"></i>
                            </div>
                            <h4 class="font-bold text-primary text-sm mb-1">Support 24/7</h4>
                            <p class="text-xs text-gray-600">Dukungan teknis kapanpun Anda butuhkan</p>
                        </div>
                    </div>
                </div>

                <div class="relative order-1 lg:order-2">
                    <div class="absolute -inset-4 gradient-accent opacity-20 blur-3xl rounded-full"></div>

                    <div class="relative z-10">
                        <img
                            src="{{ asset('img/image.png') }}"
                            alt="Tim RomIT"
                            class="w-full max-w-md mx-auto rounded-2xl shadow-2xl hover:scale-[1.02] transition-transform duration-500"
                        >
                    </div>

                    <div class="absolute -bottom-8 -left-8 gradient-dark text-white p-6 rounded-2xl shadow-2xl z-20 hover:scale-105 transition-transform duration-300">
                        <div class="text-base mt-1">TEAM PROFESSIONAL</div>
                        <div class="text-xs text-gray-400 mt-0.5">Fullstack Developer & UI/UX Designer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-xs uppercase tracking-wider">Layanan Kami</span>
                <h2 class="text-3xl font-bold text-primary mb-4 mt-1">
                    Solusi <span class="gradient-accent bg-clip-text text-transparent">Digital Lengkap</span>
                </h2>
                <p class="text-gray-600 text-sm max-w-2xl mx-auto">
                    Kami menyediakan berbagai layanan pengembangan digital untuk mendukung transformasi bisnis Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Development -->
                <div class="group bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-xl hover-lift border border-primary/10 transition-all duration-300 hover:shadow-lg">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <div class="relative h-48 w-full overflow-hidden rounded-lg">
                            <div class="w-full h-full bg-gradient-to-br from-primary to-accent flex items-center justify-center">
                                <i class="fas fa-laptop-code text-white text-6xl"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Web Development</h4>
                    <p class="text-gray-600">Pembuatan website company profile, e-commerce, sistem informasi, dan web aplikasi custom dengan teknologi terkini.</p>
                </div>

                <!-- Mobile Apps -->
                <div class="group bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-xl hover-lift border border-accent/10 transition-all duration-300 hover:shadow-lg">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <div class="relative h-48 w-full overflow-hidden rounded-lg">
                            <div class="w-full h-full bg-gradient-to-br from-accent to-primary flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-white text-6xl"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Mobile Apps</h4>
                    <p class="text-gray-600">Pengembangan aplikasi Android & iOS native atau hybrid untuk berbagai kebutuhan bisnis dan startup.</p>
                </div>

                <!-- System Integration -->
                <div class="group bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-xl hover-lift border border-primary/10 transition-all duration-300 hover:shadow-lg">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <div class="relative h-48 w-full overflow-hidden rounded-lg">
                            <div class="w-full h-full bg-gradient-to-br from-primary to-accent flex items-center justify-center">
                                <i class="fas fa-cogs text-white text-6xl"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">System Integration</h4>
                    <p class="text-gray-600">Integrasi sistem lama dengan teknologi baru, pengembangan API, dan sistem terdistribusi.</p>
                </div>

                <!-- UI/UX Design -->
                <div class="group bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-xl hover-lift border border-accent/10 transition-all duration-300 hover:shadow-lg">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <div class="relative h-48 w-full overflow-hidden rounded-lg">
                            <div class="w-full h-full bg-gradient-to-br from-accent to-primary flex items-center justify-center">
                                <i class="fas fa-palette text-white text-6xl"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">UI/UX Design</h4>
                    <p class="text-gray-600">Desain antarmuka yang user-friendly dengan pengalaman pengguna yang optimal untuk aplikasi dan website.</p>
                </div>

                <!-- Digital Marketing -->
                <div class="group bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-xl hover-lift border border-primary/10 transition-all duration-300 hover:shadow-lg">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <div class="relative h-48 w-full overflow-hidden rounded-lg">
                            <div class="w-full h-full bg-gradient-to-br from-primary to-accent flex items-center justify-center">
                                <i class="fas fa-chart-line text-white text-6xl"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Digital Marketing</h4>
                    <p class="text-gray-600">Strategi pemasaran digital, SEO, social media management, dan kampanye iklan online.</p>
                </div>

                <!-- Maintenance & Support -->
                <div class="group bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-xl hover-lift border border-accent/10 transition-all duration-300 hover:shadow-lg">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <div class="relative h-48 w-full overflow-hidden rounded-lg">
                            <div class="w-full h-full bg-gradient-to-br from-accent to-primary flex items-center justify-center">
                                <i class="fas fa-tools text-white text-6xl"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-3">Maintenance & Support</h4>
                    <p class="text-gray-600">Layanan maintenance, update, dan dukungan teknis untuk menjaga aplikasi tetap optimal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Teknologi Section -->
    <section id="teknologi" class="py-16 code-bg text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-xs uppercase tracking-wider">Teknologi</span>
                <h2 class="text-3xl font-bold text-white mb-4 mt-1">
                    Teknologi <span class="gradient-accent bg-clip-text text-transparent">Terbaru</span> yang Kami Gunakan
                </h2>
                <p class="text-gray-300 text-sm max-w-2xl mx-auto">
                    Kami selalu update dengan teknologi terkini untuk memberikan solusi terbaik kepada klien
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-react text-4xl text-blue-400 mb-3"></i>
                    <div class="text-sm font-semibold">React.js</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-vuejs text-4xl text-green-400 mb-3"></i>
                    <div class="text-sm font-semibold">Vue.js</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-laravel text-4xl text-red-400 mb-3"></i>
                    <div class="text-sm font-semibold">Laravel</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-node-js text-4xl text-green-500 mb-3"></i>
                    <div class="text-sm font-semibold">Node.js</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-flutter text-4xl text-blue-300 mb-3"></i>
                    <div class="text-sm font-semibold">Flutter</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-python text-4xl text-yellow-400 mb-3"></i>
                    <div class="text-sm font-semibold">Python</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fas fa-database text-4xl text-orange-400 mb-3"></i>
                    <div class="text-sm font-semibold">MySQL</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fas fa-fire text-4xl text-yellow-500 mb-3"></i>
                    <div class="text-sm font-semibold">Firebase</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-aws text-4xl text-orange-300 mb-3"></i>
                    <div class="text-sm font-semibold">AWS</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-docker text-4xl text-blue-500 mb-3"></i>
                    <div class="text-sm font-semibold">Docker</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fab fa-git-alt text-4xl text-red-500 mb-3"></i>
                    <div class="text-sm font-semibold">Git</div>
                </div>
                <div class="tech-icon bg-white/5 p-6 rounded-2xl text-center hover:bg-white/10 transition-all">
                    <i class="fas fa-server text-4xl text-gray-300 mb-3"></i>
                    <div class="text-sm font-semibold">REST API</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-12 md:py-20 bg-white overflow-hidden w-full">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 w-full">
            <div class="text-center mb-10 w-full">
                <span class="text-accent font-semibold text-xs uppercase tracking-wider">Hubungi Kami</span>
                <h2 class="text-2xl md:text-4xl font-bold text-primary mt-2">Konsultasikan Proyek Digital Anda</h2>
                <div class="w-16 h-1 gradient-accent mx-auto mt-3 rounded-full"></div>
                <p class="text-gray-600 mt-4 text-sm md:text-base max-w-2xl mx-auto">Kami siap membantu mewujudkan ide digital Anda. Diskusikan kebutuhan Anda dengan tim kami.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full">
                <div class="space-y-4 w-full order-2 lg:order-1">

                    <div class="bg-gray-50 p-5 rounded-2xl border-l-4 border-accent shadow-sm w-full">
                        <div class="flex items-start">
                            <div class="bg-accent/10 p-3 rounded-lg text-accent mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-lg"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-primary mb-1 text-sm">Kantor Kami</h4>
                                <p class="text-xs text-gray-600 leading-relaxed">Jl.  Tanjung Duren
Grogol petamburan, Kelurahan Digital, Kecamatan Cyber, Kota Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-5 rounded-2xl border-l-4 border-primary shadow-sm w-full">
                        <div class="flex items-start">
                            <div class="bg-primary/10 p-3 rounded-lg text-primary mr-4 flex-shrink-0">
                                <i class="fab fa-whatsapp text-lg"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-primary mb-1 text-sm">WhatsApp</h4>
                                <p class="text-sm text-gray-700 font-medium">+62 895-6140-08787</p>
                                <a href="https://wa.me/62895614008787" target="_blank" class="text-xs text-accent font-semibold hover:underline mt-1 inline-block">Konsultasi Gratis →</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-5 rounded-2xl border-l-4 border-accent shadow-sm w-full">
                        <div class="flex items-start">
                            <div class="bg-accent/10 p-3 rounded-lg text-accent mr-4 flex-shrink-0">
                                <i class="fas fa-envelope text-lg"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="font-bold text-primary mb-1 text-sm">Email</h4>
                                <p class="text-xs text-gray-600 break-all">romit.web@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary text-white p-6 rounded-2xl shadow-lg w-full">
                        <h4 class="font-bold mb-4 flex items-center text-sm">
                            <i class="fas fa-clock mr-2 text-accent-light"></i> Jam Operasional
                        </h4>
                        <div class="space-y-3 text-xs opacity-90">
                            <div class="flex justify-between border-b border-white/10 pb-2">
                                <span>Senin - Jumat</span>
                                <span class="font-semibold">08:00 - 17:00</span>
                            </div>
                            <div class="flex justify-between border-b border-white/10 pb-2">
                                <span>Sabtu</span>
                                <span class="font-semibold">09:00 - 13:00</span>
                            </div>
                            <div class="flex justify-between text-orange-300">
                                <span>Minggu</span>
                                <span class="font-semibold">Support Online</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 w-full order-1 lg:order-2">
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-100 shadow-xl w-full">
                        <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-gray-700 ml-1">Nama Perusahaan</label>
                                <input type="text" name="company" placeholder="Nama perusahaan Anda" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/10 outline-none text-sm" required>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-gray-700 ml-1">Nama PIC</label>
                                <input type="text" name="pic" placeholder="Nama penanggung jawab" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/10 outline-none text-sm" required>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-gray-700 ml-1">Email</label>
                                <input type="email" name="email" placeholder="contoh@perusahaan.com" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/10 outline-none text-sm" required>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-gray-700 ml-1">Nomor WhatsApp</label>
                                <input type="tel" name="phone" placeholder="0812..." class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/10 outline-none text-sm" required>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-gray-700 ml-1">Jenis Layanan</label>
                                <select name="service" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/10 outline-none text-sm">
                                    <option>Web Development</option>
                                    <option>Mobile Apps</option>
                                    <option>System Integration</option>
                                    <option>UI/UX Design</option>
                                    <option>Digital Marketing</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-bold text-gray-700 ml-1">Budget Proyek</label>
                                <select name="budget" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/10 outline-none text-sm">
                                    <option>Rp 5 - 10 juta</option>
                                    <option>Rp 10 - 25 juta</option>
                                    <option>Rp 25 - 50 juta</option>
                                    <option>Rp 50 - 100 juta</option>
                                    <option>Rp 100 juta+</option>
                                </select>
                            </div>

                            <div class="md:col-span-2 space-y-1.5">
                                <label class="text-xs font-bold text-gray-700 ml-1">Deskripsi Proyek</label>
                                <textarea name="project" rows="4" placeholder="Jelaskan kebutuhan proyek Anda..." class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/10 outline-none text-sm" required></textarea>
                            </div>

                            <div class="md:col-span-2 pt-2">
                                <button type="submit" class="w-full bg-primary text-white font-bold py-4 rounded-xl shadow-lg active:scale-95 transition-all flex items-center justify-center space-x-2 hover:bg-opacity-90">
                                    <i class="fas fa-paper-plane text-xs"></i>
                                    <span>Kirim Proposal Request</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            // Mobile Menu Toggle
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    const icon = mobileBtn.querySelector('i');
                    if (icon.classList.contains('fa-bars')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });

                const mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        const icon = mobileBtn.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    });
                });
            }

            // Smooth Scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (!targetId || targetId === '#') return;

                    const target = document.querySelector(targetId);
                    if (!target) return;

                    const navbarOffset = 90;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - navbarOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>
