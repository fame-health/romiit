<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Halaman SEO-friendly
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/layanan-unggulan', [PageController::class, 'services'])->name('services');
Route::get('/galeri-kegiatan', [PageController::class, 'gallery'])->name('gallery');
Route::get('/hubungi-kami', [PageController::class, 'contact'])->name('contact');

// Sitemap
Route::get('/sitemap.xml', [PageController::class, 'sitemap']);
