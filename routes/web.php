<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Models\Anggota;

Route::get('/test-accessor-scope', function () {

    $html = <<<HTML

    <html>
    <head>
        <title>Testing Accessor & Scope</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="container mt-4">

    <h1>Testing Accessor & Scope</h1>

HTML;

    // =========================
    // DATA BUKU
    // =========================

    $html .= '<h2>Data Buku</h2>';

    $buku = Buku::all();

    foreach ($buku as $item) {

        $html .= "
        <div class='mb-3'>
            <strong>{$item->judul}</strong><br>
            Stok: {$item->stok}<br>
            Status: {$item->status_stok_badge}<br>
            Tahun: {$item->tahun_label}
        </div>
        <hr>
        ";
    }

    // =========================
    // BUKU TERBARU
    // =========================

    $html .= '<h2>Buku Terbaru</h2>';

    $terbaru = Buku::terbaru()->get();

    foreach ($terbaru as $item) {

        $html .= "
        <p>{$item->judul}</p>
        ";
    }

    // =========================
    // STOK MENIPIS
    // =========================

    $html .= '<h2>Buku Stok Menipis</h2>';

    $menipis = Buku::stokMenipis()->get();

    foreach ($menipis as $item) {

        $html .= "
        <p>{$item->judul} - Stok: {$item->stok}</p>
        ";
    }

    // =========================
    // DATA ANGGOTA
    // =========================

    $html .= '<h2>Data Anggota</h2>';

    $anggota = Anggota::all();

    foreach ($anggota as $a) {

        $html .= "
        <div class='mb-3'>
            <strong>{$a->nama}</strong><br>
            Status: {$a->status_badge}<br>
            Kategori Usia: {$a->kategori_usia}
        </div>
        <hr>
        ";
    }

    // =========================
    // BULAN INI
    // =========================

    $html .= '<h2>Anggota Terdaftar Bulan Ini</h2>';

    $bulanIni = Anggota::terdaftarBulanIni()->get();

    foreach ($bulanIni as $a) {

        $html .= "
        <p>{$a->nama}</p>
        ";
    }

    $html .= "
    </body>
    </html>
    ";

    return $html;
});