<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Beranda';
    return view('profile.beranda', compact('title'));
})->name('beranda');

Route::get('/sambutan', function () {
    $title = 'Sambutan';
    return view('profile.sambutan', compact('title'));
})->name('sambutan');

Route::get('/visi-misi', function () {
    $title = 'Visi & Misi';
    return view('profile.visi-misi', compact('title'));
})->name('visi-misi');

Route::get('/struktur-organisasi', function () {
    $title = 'Struktur Organisasi';
    return view('profile.struktur-organisasi', compact('title'));
})->name('struktur-organisasi');

Route::get('/kader', function () {
    $title = 'Kader PMII';
    return view('profile.kader', compact('title'));
})->name('kader');

Route::get('/alumni', function () {
    $title = 'Alumni PMII';
    return view('profile.alumni', compact('title'));
})->name('alumni');

Route::get('/galeri', function () {
    $title = 'Galeri PMII';
    return view('profile.galeri', compact('title'));
})->name('galeri');

Route::get('/hotline', function () {
    $title = 'Hotline PMII';
    return view('profile.hotline', compact('title'));
})->name('hotline');

Route::get('/berita', function () {
    $title = 'Berita PMII';
    return view('profile.berita', compact('title'));
})->name('berita');

Route::get('/detail-berita', function () {
    $title = 'Berita PMII';
    return view('profile.detail-berita', compact('title'));
})->name('detail-berita');
