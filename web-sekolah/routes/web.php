<?php

use Illuminate\Support\Facades\Route;

Route::get('/profil/tentang', function () {
    return view('profil.tentang');
});
Route::get('/profil/visi-misi', function () {
    return view('profil.visi-misi');
});
Route::get('/profil/visimisi', function () {
    return view('profil/visimisi');
});

Route::get('/profil/struktur', function () {
    return view('profil.struktur');
});
Route::get('/profil/akreditasi', function () {
    return view('profil.akreditasi');
});

Route::get('/direktori/tenagapendidik', function () {
    return view('direktori.tenagapendidik');
});
Route::get('/direktori/siswa', function () {
    return view('direktori.siswa');
});
Route::get('/direktori/alumni', function () {
    return view('direktori.alumni');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index'); // nama file index.blade.php
});

Route::get('/test', function () {
    return view('partials.header');
});

Route::get('/gallery/galleryy', function () {
    return view('gallery.galleryy');
});
