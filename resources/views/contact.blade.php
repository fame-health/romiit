<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Kontak Kami - RomIT | Pengembang Aplikasi & Website Profesional</title>
    <meta name="description" content="RomIT - Hubungi tim developer profesional kami untuk konsultasi pengembangan aplikasi dan website. Solusi digital terpercaya untuk transformasi bisnis Anda.">
    <meta name="keywords" content="kontak romit, konsultasi IT, jasa pembuatan website, developer aplikasi, hubungi developer, software house jakarta, konsultan IT Indonesia">
    <meta name="author" content="RomIT - Digital Solutions">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Kontak Kami - RomIT | Pengembang Aplikasi & Website">
    <meta property="og:description" content="Konsultasikan proyek digital Anda dengan tim RomIT. Respons cepat, solusi teknologi tepat guna untuk bisnis Anda.">
    <meta property="og:image" content="img/romit-contact.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kontak Kami - RomIT Digital Solutions">
    <meta name="twitter:description" content="Hubungi tim developer profesional untuk konsultasi gratis pengembangan aplikasi dan website.">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://romit-digital.com/kontak">

    <!-- Additional Meta Tags -->
    <meta name="format-detection" content="telephone=yes">

    <!-- Scripts & Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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

    .pulse-shadow {
        box-shadow: 0 0 0 0 rgba(56, 189, 248, 0.7);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(56, 189, 248, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(56, 189, 248, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(56, 189, 248, 0);
        }
    }
</style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-md shadow-lg fixed w-full top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-3">
                <div class="flex items-center space-x-3 group">
                    <div class="rounded-lg p-2 shadow-lg group-hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('img/image.png') }}" alt="I.CO Logo" class="w-10 h-10 object-contain">
                    </div>
                    <div>
                        <span class="text-lg font-bold text-primary">RomIT</span>
                        <div class="text-xs text-gray-600 font-semibold">Pengembang Aplikasi dan Website di Indonesia</div>
                    </div>
                </div>

                <div class="hidden lg:flex items-center space-x-6">
                    <a href="/" class="text-gray-700 text-sm hover:text-accent transition-colors">Beranda</a>
                    <a href="layanan-unggulan" class="text-gray-700 text-sm hover:text-accent transition-colors">Layanan</a>
                    <a href="tentang-kami" class="text-gray-700 text-sm hover:text-accent transition-colors">Tentang</a>
                    <a href="hubungi-kami" class="text-primary text-sm font-semibold hover:text-accent transition-colors relative">
                        Kontak
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent"></span>
                    </a>
                    <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="gradient-accent text-white text-sm font-bold px-5 py-2 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <i class="fab fa-whatsapp mr-1.5"></i>
                        Konsultasi Gratis
                    </a>
                </div>

                <button id="mobile-menu-btn" class="lg:hidden text-primary focus:outline-none" aria-label="Toggle menu">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <div id="mobile-menu" class="hidden lg:hidden pb-4 space-y-1">
                <a href="/" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Beranda</a>
                <a href="layanan-unggulan" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Layanan</a>
                <a href="tentang-kami" class="block py-2 text-sm text-gray-700 hover:bg-accent/10 px-3 rounded-lg transition">Tentang</a>
                <a href="hubungi-kami" class="block py-2 text-sm text-primary font-semibold bg-accent/10 px-3 rounded-lg">Kontak</a>
                <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="block w-full gradient-accent text-sm text-white font-bold py-2 px-3 rounded-lg mt-2 text-center">
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
                    <i class="fas fa-headset mr-2"></i>Hubungi Tim Kami
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                Mari Diskusikan <span class="gradient-accent bg-clip-text text-transparent">Proyek Digital Anda</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Konsultasikan ide dan kebutuhan digital bisnis Anda dengan tim developer profesional kami. Respons cepat, solusi tepat.
            </p>
        </div>
    </section>

    <!-- Contact Cards Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 -mt-24 relative z-10 mb-16">
                <!-- WhatsApp Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-green-500">
                    <div class="bg-green-100 text-green-600 p-4 rounded-xl inline-block mb-4">
                        <i class="fab fa-whatsapp text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">WhatsApp</h3>
                    <p class="text-sm text-gray-600 mb-4">Konsultasi cepat via WhatsApp</p>
                    <p class="font-bold text-gray-800 mb-4">+62 812-6812-3180</p>
                    <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="block w-full bg-green-500 text-white text-center py-3 rounded-lg font-semibold hover:bg-green-600 transition">
                        <i class="fab fa-whatsapp mr-2"></i>Chat Sekarang
                    </a>
                </div>

                <!-- Email Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-accent">
                    <div class="bg-blue-100 text-accent p-4 rounded-xl inline-block mb-4">
                        <i class="fas fa-envelope text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">Email</h3>
                    <p class="text-sm text-gray-600 mb-4">Kirim detail proyek via email</p>
                    <p class="font-bold text-gray-800 mb-4 text-sm">hello@romit-digital.com</p>
                    <a href="mailto:hello@romit-digital.com" class="block w-full bg-accent text-white text-center py-3 rounded-lg font-semibold hover:bg-accent-dark transition">
                        <i class="fas fa-envelope mr-2"></i>Kirim Email
                    </a>
                </div>

                <!-- Office Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-primary">
                    <div class="bg-primary/10 text-primary p-4 rounded-xl inline-block mb-4">
                        <i class="fas fa-map-marker-alt text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">Kunjungi Kantor</h3>
                    <p class="text-sm text-gray-600 mb-4">Meeting langsung di kantor</p>
                    <p class="font-semibold text-gray-800 mb-4 text-xs leading-relaxed">Jl.  Tanjung Duren
Grogol petamburan, Jakarta</p>
                    <a href="#map" class="block w-full bg-primary text-white text-center py-3 rounded-lg font-semibold hover:bg-primary-dark transition">
                        <i class="fas fa-map-marked-alt mr-2"></i>Lihat Peta
                    </a>
                </div>

                <!-- Video Call Card -->
                <div class="bg-white p-6 rounded-2xl shadow-2xl hover-lift border-t-4 border-purple-500">
                    <div class="bg-purple-100 text-purple-600 p-4 rounded-xl inline-block mb-4">
                        <i class="fas fa-video text-3xl"></i>
                    </div>
                    <h3 class="font-bold text-primary text-lg mb-2">Video Call</h3>
                    <p class="text-sm text-gray-600 mb-4">Konsultasi online via Zoom/Meet</p>
                    <p class="font-bold text-gray-800 mb-4">Schedule Meeting</p>
                    <a href="#form" class="block w-full bg-purple-500 text-white text-center py-3 rounded-lg font-semibold hover:bg-purple-600 transition">
                        <i class="fas fa-calendar-alt mr-2"></i>Jadwalkan
                    </a>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl">
                        <div class="mb-8">
                            <h2 class="text-3xl font-bold text-primary mb-2">Formulir Konsultasi Proyek</h2>
                            <p class="text-gray-600">Isi formulir di bawah ini dan kami akan menghubungi Anda untuk diskusi lebih lanjut</p>
                        </div>

                        <form id="contactForm" class="space-y-6">
                            <!-- Nama & Email -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="nama" class="text-sm font-semibold text-gray-700">Nama Perusahaan <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-building"></i>
                                        </span>
                                        <input type="text" id="company" name="company" required placeholder="Nama perusahaan Anda" class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-semibold text-gray-700">Email PIC <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="email" id="email" name="email" required placeholder="contoh@perusahaan.com" class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    </div>
                                </div>
                            </div>

                            <!-- WhatsApp & Layanan -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="whatsapp" class="text-sm font-semibold text-gray-700">Nomor WhatsApp <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fab fa-whatsapp"></i>
                                        </span>
                                        <input type="tel" id="whatsapp" name="whatsapp" required placeholder="0812..." class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="service" class="text-sm font-semibold text-gray-700">Jenis Layanan <span class="text-accent">*</span></label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-laptop-code"></i>
                                        </span>
                                        <select id="service" name="service" required class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all appearance-none">
                                            <option value="">Pilih layanan yang dibutuhkan</option>
                                            <option value="web">Web Development</option>
                                            <option value="mobile">Mobile Apps</option>
                                            <option value="uiux">UI/UX Design</option>
                                            <option value="integration">System Integration</option>
                                            <option value="marketing">Digital Marketing</option>
                                            <option value="support">Maintenance & Support</option>
                                            <option value="consultation">IT Consultation</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Budget & Timeline -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="budget" class="text-sm font-semibold text-gray-700">Budget Proyek</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-dollar-sign"></i>
                                        </span>
                                        <select id="budget" name="budget" class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                            <option value="">Pilih rentang budget</option>
                                            <option value="5-10">Rp 5 - 10 juta</option>
                                            <option value="10-25">Rp 10 - 25 juta</option>
                                            <option value="25-50">Rp 25 - 50 juta</option>
                                            <option value="50-100">Rp 50 - 100 juta</option>
                                            <option value="100+">Rp 100 juta+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label for="timeline" class="text-sm font-semibold text-gray-700">Timeline</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                                            <i class="fas fa-calendar-alt"></i>
                                        </span>
                                        <select id="timeline" name="timeline" class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all">
                                            <option value="">Pilih timeline proyek</option>
                                            <option value="1-2">1-2 bulan</option>
                                            <option value="3-4">3-4 bulan</option>
                                            <option value="4-6">4-6 bulan</option>
                                            <option value="6+">6+ bulan</option>
                                            <option value="flexible">Fleksibel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Deskripsi Proyek -->
                            <div class="space-y-2">
                                <label for="description" class="text-sm font-semibold text-gray-700">Deskripsi Proyek <span class="text-accent">*</span></label>
                                <textarea id="description" name="description" required rows="5" placeholder="Jelaskan kebutuhan proyek digital Anda secara detail (tujuan, fitur, target pengguna, dll)..." class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all resize-none"></textarea>
                                <p class="text-xs text-gray-500">*Semakin detail deskripsi proyek, semakin akurat estimasi yang kami berikan</p>
                            </div>

                            <!-- Attachment (Optional) -->
                            <div class="space-y-2">
                                <label for="attachment" class="text-sm font-semibold text-gray-700">Lampiran (Optional)</label>
                                <div class="relative">
                                    <input type="file" id="attachment" name="attachment" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                                </div>
                                <p class="text-xs text-gray-500">*Upload dokumen referensi seperti wireframe, mockup, atau dokumen requirement (max 10MB)</p>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="w-full gradient-dark text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-primary/30 transition-all hover:-translate-y-1 flex items-center justify-center space-x-2">
                                <i class="fas fa-paper-plane"></i>
                                <span>Kirim Proposal Request</span>
                            </button>

                            <p class="text-xs text-center text-gray-500 mt-4">
                                <i class="fas fa-lock mr-1"></i>Data dan ide proyek Anda akan kami jaga kerahasiaannya
                            </p>
                        </form>
                    </div>

                    <!-- FAQ Section -->
                    <div class="mt-8 bg-gradient-to-br from-primary/5 to-accent/5 p-8 rounded-3xl border border-primary/10">
                        <h3 class="text-2xl font-bold text-primary mb-6">Pertanyaan Umum</h3>
                        <div class="space-y-4">
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Berapa biaya konsultasi pertama?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Konsultasi pertama GRATIS! Anda dapat mendiskusikan ide proyek dengan tim kami tanpa biaya.</p>
                            </details>
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Berapa lama waktu respons konsultasi?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Kami merespons dalam 1-2 jam kerja. Untuk proyek mendesak, hubungi langsung via WhatsApp.</p>
                            </details>
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Apakah ada biaya tersembunyi?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Tidak. Semua biaya akan dijelaskan secara transparan dalam proposal yang kami berikan.</p>
                            </details>
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Bagaimana proses pengembangan proyek?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Kami menggunakan agile methodology: Discovery → Design → Development → Testing → Deployment → Maintenance.</p>
                            </details>
                            <details class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                                <summary class="font-semibold text-gray-800 cursor-pointer">Apakah bisa request revisi selama development?</summary>
                                <p class="mt-3 text-sm text-gray-600 pl-4 border-l-2 border-accent">Ya, kami fleksibel dengan revisi selama dalam batas yang disepakati dalam kontrak proyek.</p>
                            </details>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Office Info -->
                    <div class="bg-gradient-to-br from-primary to-primary-dark text-white p-8 rounded-3xl shadow-2xl pulse-shadow">
                        <div class="text-center mb-6">
                            <div class="inline-block bg-white/20 p-4 rounded-2xl mb-4">
                                <i class="fas fa-laptop-house text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold">Kantor RomIT</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-map-marker-alt text-accent-light mt-1"></i>
                                <div>
                                    <p class="font-semibold mb-1">Alamat</p>
                                    <p class="text-sm opacity-90 leading-relaxed">Jl.  Tanjung Duren
Grogol petamburan, Kelurahan Digital, Kecamatan Cyber, Kota Jakarta, Indonesia</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <i class="fas fa-phone-alt text-accent-light mt-1"></i>
                                <div>
                                    <p class="font-semibold mb-1">Telepon</p>
                                    <p class="text-sm opacity-90">+62 812-6812-3180</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <i class="fas fa-envelope text-accent-light mt-1"></i>
                                <div>
                                    <p class="font-semibold mb-1">Email</p>
                                    <p class="text-sm opacity-90 break-words">hello@romit-digital.com</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <i class="fas fa-globe text-accent-light mt-1"></i>
                                <div>
                                    <p class="font-semibold mb-1">Website</p>
                                    <p class="text-sm opacity-90">www.romit-digital.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white p-6 rounded-3xl shadow-xl border border-gray-100">
                        <h4 class="font-bold text-primary text-lg mb-4 flex items-center">
                            <i class="fas fa-clock mr-2 text-accent"></i> Jam Operasional
                        </h4>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-sm text-gray-700">Senin - Jumat</span>
                                <span class="text-sm font-semibold text-primary">08:00 - 17:00</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-sm text-gray-700">Sabtu</span>
                                <span class="text-sm font-semibold text-primary">09:00 - 13:00</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-sm text-gray-700">Minggu</span>
                                <span class="text-sm font-semibold text-accent">Support Online</span>
                            </div>
                        </div>
                        <div class="mt-4 p-3 bg-accent/10 rounded-lg">
                            <p class="text-xs text-gray-700"><i class="fas fa-info-circle text-accent mr-2"></i>Untuk konsultasi mendesak, hubungi kami via WhatsApp 24/7</p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-gradient-to-br from-accent/5 to-accent/10 p-6 rounded-3xl border border-accent/20">
                        <h4 class="font-bold text-primary text-lg mb-4">Ikuti Kami</h4>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="flex-1 min-w-[100px] bg-green-500 text-white py-3 px-4 rounded-xl hover:bg-green-600 transition text-center font-semibold">
                                <i class="fab fa-whatsapp text-xl"></i>
                                <div class="text-xs mt-1">WhatsApp</div>
                            </a>
                            <a href="https://www.instagram.com/romit_digital/" target="_blank" rel="noopener noreferrer" class="flex-1 min-w-[100px] bg-gradient-to-br from-purple-500 to-pink-500 text-white py-3 px-4 rounded-xl hover:from-purple-600 hover:to-pink-600 transition text-center font-semibold">
                                <i class="fab fa-instagram text-xl"></i>
                                <div class="text-xs mt-1">Instagram</div>
                            </a>
                            <a href="https://www.linkedin.com/company/romit-digital" target="_blank" rel="noopener noreferrer" class="flex-1 min-w-[100px] bg-blue-700 text-white py-3 px-4 rounded-xl hover:bg-blue-800 transition text-center font-semibold">
                                <i class="fab fa-linkedin text-xl"></i>
                                <div class="text-xs mt-1">LinkedIn</div>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Consultation -->
                    <div class="bg-accent text-white p-6 rounded-3xl shadow-2xl floating">
                        <div class="text-center">
                            <i class="fas fa-headset text-5xl mb-3"></i>
                            <h4 class="font-bold text-lg mb-2">Butuh Bantuan Teknis?</h4>
                            <p class="text-sm opacity-90 mb-4">Tim support kami siap membantu</p>
                            <a href="https://wa.me/6281268123180" target="_blank" rel="noopener noreferrer" class="block bg-white text-accent font-bold py-3 px-6 rounded-xl hover:bg-gray-100 transition">
                                Chat Technical Support
                            </a>
                        </div>
                    </div>

                    <!-- Technologies -->
                    <div class="bg-white p-6 rounded-3xl shadow-xl border border-gray-100">
                        <h4 class="font-bold text-primary text-lg mb-4">Teknologi yang Kami Gunakan</h4>
                        <div class="grid grid-cols-4 gap-3">
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fab fa-react text-2xl text-blue-500 mb-2"></i>
                                <div class="text-xs">React.js</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fab fa-vuejs text-2xl text-green-500 mb-2"></i>
                                <div class="text-xs">Vue.js</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fab fa-laravel text-2xl text-red-500 mb-2"></i>
                                <div class="text-xs">Laravel</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fab fa-node-js text-2xl text-green-600 mb-2"></i>
                                <div class="text-xs">Node.js</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fab fa-python text-2xl text-yellow-500 mb-2"></i>
                                <div class="text-xs">Python</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fab fa-aws text-2xl text-orange-500 mb-2"></i>
                                <div class="text-xs">AWS</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fas fa-database text-2xl text-blue-400 mb-2"></i>
                                <div class="text-xs">MySQL</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <i class="fas fa-mobile-alt text-2xl text-purple-500 mb-2"></i>
                                <div class="text-xs">Flutter</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="map" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-primary mb-2">Lokasi Kantor Kami</h2>
                <p class="text-gray-600">Silakan kunjungi kantor kami untuk meeting langsung</p>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-xl">
                <div class="h-96 rounded-2xl overflow-hidden">
                    <!-- Google Maps Embed -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666795134073!2d106.817019!3d-6.175394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12f%3A0x3d2ad6e1e0e9bcc8!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1647853652788!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="mt-6 grid md:grid-cols-2 gap-6">
                    <div class="bg-primary/5 p-6 rounded-2xl">
                        <h4 class="font-bold text-primary mb-3"><i class="fas fa-car mr-2"></i>Parkir</h4>
                        <p class="text-sm text-gray-600">Tersedia area parkir yang luas di dalam gedung dan sekitar kantor kami.</p>
                    </div>
                    <div class="bg-accent/5 p-6 rounded-2xl">
                        <h4 class="font-bold text-primary mb-3"><i class="fas fa-subway mr-2"></i>Akses Transportasi</h4>
                        <p class="text-sm text-gray-600">Mudah diakses via MRT, bus Transjakarta, dan taksi online.</p>
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

        // ==================
        // 4. Form Submission Handler
        // ==================
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Show success message
                alert('Terima kasih! Proposal request Anda telah berhasil dikirim. Tim kami akan menghubungi Anda dalam 1-2 jam kerja.');

                // Reset form
                this.reset();
            });
        }
    });
    </script>
</body>
</html>
