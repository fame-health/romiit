<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Response;

class PageController extends Controller
{
    // Halaman Beranda
    public function home()
    {
        return view('home'); // resources/views/home.blade.php
    }

    // Halaman Tentang Kami
    public function about()
    {
        return view('about'); // resources/views/about.blade.php
    }

    // Halaman Layanan Unggulan
    public function services()
    {
        return view('services'); // resources/views/services.blade.php
    }

    // Halaman Galeri Kegiatan
    public function gallery()
    {
        return view('gallery'); // resources/views/gallery.blade.php
    }

    // Halaman Hubungi Kami
    public function contact()
    {
        return view('contact'); // resources/views/contact.blade.php
    }

    // Generate sitemap.xml otomatis
    public function sitemap()
    {
        $urls = [
            URL::route('home'),
            URL::route('about'),
            URL::route('services'),
            URL::route('gallery'),
            URL::route('contact'),
        ];

        $xml = view('sitemap', compact('urls')); // resources/views/sitemap.blade.php

        return Response::make($xml, 200, ['Content-Type' => 'text/xml']);
    }
}
