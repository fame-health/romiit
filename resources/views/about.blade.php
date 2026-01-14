<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - RomIT | Pengembang Aplikasi & Website Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Meta Tags yang Diperbarui -->
    <meta name="description" content="RomIT - Perusahaan pengembangan aplikasi dan website terpercaya di Indonesia. Tim developer profesional dengan pengalaman 5+ tahun dalam transformasi digital bisnis.">
    <meta name="keywords" content="tentang romit, profil perusahaan IT, tim developer Indonesia, software house jakarta, perusahaan pengembang aplikasi, sejarah romit, visi misi perusahaan IT">
    <meta name="author" content="RomIT - Digital Solutions">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="general">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://romit-digital.com/tentang">
    <meta property="og:title" content="Tentang Kami - RomIT | Pengembang Aplikasi & Website">
    <meta property="og:description" content="Kenali lebih dekat RomIT - Partner digital terpercaya untuk transformasi bisnis Anda dengan solusi aplikasi dan website custom.">
    <meta property="og:image" content="{{ asset('img/romit-about.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="RomIT Digital Solutions">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@romit_digital">
    <meta name="twitter:creator" content="@romit_digital">
    <meta name="twitter:title" content="Tentang Kami - RomIT Digital Solutions">
    <meta name="twitter:description" content="Tim developer profesional siap membantu transformasi digital bisnis Anda. Kenali visi, misi, dan nilai-nilai RomIT.">
    <meta name="twitter:image" content="{{ asset('img/romit-about.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://romit-digital.com/tentang">

    <!-- Additional Meta Tags -->
    <meta name="geo.region" content="ID">
    <meta name="geo.placename" content="Indonesia">
    <meta name="distribution" content="global">
    <meta name="target" content="all">
    <meta name="apple-mobile-web-app-title" content="RomIT About">
    <meta name="application-name" content="RomIT">
    <meta name="msapplication-TileColor" content="#1e3a8a">
    <meta name="theme-color" content="#1e3a8a">

    <!-- Viewport tambahan untuk mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="format-detection" content="telephone=yes">

    <!-- Dublin Core Metadata -->
    <meta name="DC.title" content="Tentang Kami - RomIT Digital Solutions">
    <meta name="DC.creator" content="RomIT Digital Team">
    <meta name="DC.subject" content="IT Company, Software Development, About Us">
    <meta name="DC.description" content="Profil perusahaan pengembangan aplikasi dan website RomIT di Indonesia">
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

    .timeline-line::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, #38bdf8, #1e3a8a);
        transform: translateX(-50%);
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
                    <a href="layanan-unggulan" class="text-gray-700 text-sm hover:text-accent transition-colors">Layanan</a>
                    <a href="tentang-kami" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative">
                        Tentang
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
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
                <a href="layanan-unggulan" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Layanan</a>
                <a href="tentang-kami" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Tentang</a>
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
                    <i class="fas fa-users mr-2"></i>Tentang RomIT
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                Partner <span class="gradient-accent bg-clip-text text-transparent">Digital Terpercaya</span> Anda
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Transformasi ide digital Anda menjadi solusi teknologi yang memberikan nilai tambah bagi bisnis
            </p>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative order-2 lg:order-1">
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

                <div class="order-1 lg:order-2">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Tentang Kami</span>
                    <h2 class="text-3xl font-bold text-primary mb-4 mt-2">
                        RomIT - Digital Solutions
                    </h2>
                    <div class="w-20 h-1 gradient-accent rounded-full mb-6"></div>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        RomIT adalah perusahaan pengembangan aplikasi dan website yang berfokus pada penyediaan solusi digital inovatif untuk bisnis di Indonesia. Berdiri sejak 2020, kami telah membantu berbagai perusahaan dalam melakukan transformasi digital mereka.
                    </p>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        Dengan tim yang terdiri dari developer berpengalaman, UI/UX designer kreatif, dan digital marketer handal, kami siap mengubah ide-ide digital Anda menjadi kenyataan yang memberikan dampak positif bagi pertumbuhan bisnis.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-4 rounded-xl border border-primary/20">
                            <i class="fas fa-laptop-code text-2xl text-primary mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Expertise</h4>
                            <p class="text-xs text-gray-600">Web Development, Mobile Apps, UI/UX Design, System Integration</p>
                        </div>
                        <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-4 rounded-xl border border-accent/20">
                            <i class="fas fa-certificate text-2xl text-accent mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Sertifikasi</h4>
                            <p class="text-xs text-gray-600">Certified Developers, Google Cloud, AWS, Microsoft Azure</p>
                        </div>
                        <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-4 rounded-xl border border-accent/20">
                            <i class="fas fa-cogs text-2xl text-accent mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Teknologi</h4>
                            <p class="text-xs text-gray-600">React.js, Vue.js, Laravel, Flutter, Node.js, Python</p>
                        </div>
                        <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-4 rounded-xl border border-primary/20">
                            <i class="fas fa-award text-2xl text-primary mb-2"></i>
                            <h4 class="font-bold text-primary text-sm mb-1">Prestasi</h4>
                            <p class="text-xs text-gray-600">50+ Projek Sukses, 98% Kepuasan Klien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 gradient-dark text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Pencapaian Kami dalam Angka</h2>
                <p class="text-gray-300">Dedikasi kami dalam mengakselerasi transformasi digital bisnis</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-calendar-check text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">5+</div>
                    <div class="text-sm text-gray-300">Tahun Pengalaman</div>
                </div>

                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-code-branch text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">50+</div>
                    <div class="text-sm text-gray-300">Projek Sukses</div>
                </div>

                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-user-check text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">98%</div>
                    <div class="text-sm text-gray-300">Kepuasan Klien</div>
                </div>

                <div class="text-center bg-white/10 backdrop-blur-sm p-8 rounded-2xl hover-lift">
                    <div class="inline-block bg-accent/20 p-4 rounded-2xl mb-4">
                        <i class="fas fa-users text-4xl text-accent"></i>
                    </div>
                    <div class="text-4xl font-bold gradient-accent bg-clip-text text-transparent mb-2">15+</div>
                    <div class="text-sm text-gray-300">Tim Professional</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-xl hover-lift">
                    <div class="bg-primary/10 text-primary p-4 rounded-2xl inline-block mb-6">
                        <i class="fas fa-eye text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4">Visi Kami</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Menjadi perusahaan pengembangan digital terdepan di Indonesia yang dikenal karena inovasi, kualitas, dan dampak positif yang diberikan dalam transformasi digital bisnis klien.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Kami berkomitmen untuk terus berinovasi dalam teknologi dan memberikan solusi digital yang tidak hanya memenuhi kebutuhan saat ini, tetapi juga mempersiapkan bisnis untuk masa depan yang semakin digital.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-xl hover-lift">
                    <div class="gradient-accent text-white p-4 rounded-2xl inline-block mb-6">
                        <i class="fas fa-bullseye text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4">Misi Kami</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Menyediakan solusi digital yang inovatif dan berkualitas tinggi untuk bisnis</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Mengutamakan kepuasan klien dengan layanan yang responsif dan profesional</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Mengembangkan talenta digital dan terus meningkatkan kompetensi tim</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                            <span class="text-gray-600">Berkontribusi dalam percepatan transformasi digital Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Nilai-Nilai Kami</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Prinsip yang Membangun RomIT
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-2xl border border-primary/20 hover-lift text-center">
                    <div class="bg-primary text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-lightbulb text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Inovasi</h4>
                    <p class="text-sm text-gray-600">Selalu mencari solusi kreatif dan teknologi terbaru untuk memecahkan masalah</p>
                </div>

                <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-2xl border border-accent/20 hover-lift text-center">
                    <div class="gradient-accent text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-star text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Kualitas</h4>
                    <p class="text-sm text-gray-600">Menjaga standar kualitas tinggi dalam setiap kode dan desain yang dibuat</p>
                </div>

                <div class="bg-gradient-to-br from-primary/5 to-primary/10 p-6 rounded-2xl border border-primary/20 hover-lift text-center">
                    <div class="bg-primary text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Kolaborasi</h4>
                    <p class="text-sm text-gray-600">Bekerja sama dengan klien sebagai partner untuk mencapai tujuan bersama</p>
                </div>

                <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-2xl border border-accent/20 hover-lift text-center">
                    <div class="gradient-accent text-white p-4 rounded-2xl inline-block mb-4">
                        <i class="fas fa-clock text-3xl"></i>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-2">Tepat Waktu</h4>
                    <p class="text-sm text-gray-600">Menghargai waktu klien dengan konsisten memenuhi deadline yang disepakati</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Perjalanan Kami</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Timeline Perjalanan RomIT
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="timeline-line relative py-8">
                <!-- Timeline Item 1 -->
                <div class="grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="text-right md:pr-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2020</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Pendirian RomIT</h4>
                            <p class="text-sm text-gray-600">RomIT didirikan dengan fokus awal pada pengembangan website company profile dan e-commerce sederhana</p>
                        </div>
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-primary rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg md:hidden"></div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="hidden md:block"></div>
                    <div class="md:pl-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2021</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Ekspansi Layanan</h4>
                            <p class="text-sm text-gray-600">Menambah layanan mobile apps development dan UI/UX design dengan tim developer yang lebih besar</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-accent rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-lg md:hidden"></div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="grid md:grid-cols-2 gap-8 mb-12 relative">
                    <div class="text-right md:pr-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2023</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Pencapaian 50 Projek</h4>
                            <p class="text-sm text-gray-600">Mencapai milestone 50+ projek sukses dengan tingkat kepuasan klien 98% dari berbagai industri</p>
                        </div>
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-primary rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg md:hidden"></div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="grid md:grid-cols-2 gap-8 relative">
                    <div class="hidden md:block"></div>
                    <div class="md:pl-12">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover-lift">
                            <span class="text-accent font-bold text-sm">2025</span>
                            <h4 class="font-bold text-primary text-lg mt-2 mb-2">Transformasi Lengkap</h4>
                            <p class="text-sm text-gray-600">Menghadirkan layanan lengkap termasuk system integration, digital marketing, dan managed IT services</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-8 w-4 h-4 bg-accent rounded-full -translate-x-1/2 border-4 border-white shadow-lg md:block hidden"></div>
                    <div class="absolute left-5 top-8 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-lg md:hidden"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Tim Kami</span>
                <h2 class="text-3xl font-bold text-primary mt-2 mb-4">
                    Bertemu dengan Tim Professional Kami
                </h2>
                <div class="w-20 h-1 gradient-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-primary to-accent p-1 rounded-2xl mb-4 mx-auto w-40 h-40 relative overflow-hidden">
                        <div class="bg-white rounded-2xl w-full h-full flex items-center justify-center">
                            <i class="fas fa-code text-5xl text-primary"></i>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-1">Romi Prasetya</h4>
                    <p class="text-sm text-gray-600 mb-2">Lead Fullstack Developer</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-accent to-primary p-1 rounded-2xl mb-4 mx-auto w-40 h-40 relative overflow-hidden">
                        <div class="bg-white rounded-2xl w-full h-full flex items-center justify-center">
                            <i class="fas fa-palette text-5xl text-accent"></i>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-1">Sarah Wijaya</h4>
                    <p class="text-sm text-gray-600 mb-2">UI/UX Designer</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-400 hover:text-accent"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="text-gray-400 hover:text-accent"><i class="fab fa-behance"></i></a>
                    </div>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-primary to-accent p-1 rounded-2xl mb-4 mx-auto w-40 h-40 relative overflow-hidden">
                        <div class="bg-white rounded-2xl w-full h-full flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-5xl text-primary"></i>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-1">Andi Setiawan</h4>
                    <p class="text-sm text-gray-600 mb-2">Mobile Developer</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-google-play"></i></a>
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-app-store"></i></a>
                    </div>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-accent to-primary p-1 rounded-2xl mb-4 mx-auto w-40 h-40 relative overflow-hidden">
                        <div class="bg-white rounded-2xl w-full h-full flex items-center justify-center">
                            <i class="fas fa-chart-line text-5xl text-accent"></i>
                        </div>
                    </div>
                    <h4 class="font-bold text-primary text-lg mb-1">Budi Santoso</h4>
                    <p class="text-sm text-gray-600 mb-2">Digital Marketing</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-400 hover:text-accent"><i class="fab fa-google"></i></a>
                        <a href="#" class="text-gray-400 hover:text-accent"><i class="fab fa-facebook"></i></a>
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
