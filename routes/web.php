<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'profil' => ['nama' => 'Achmad Fauzi', 'domisili' => 'Sleman, Yogyakarta', 'sebagai' => 'Web Developer'],
        'pendidikan' => ['nama' => 'Universitas Teknologi Yogyakarta', 'strata' => 'Sarjana', 'prodi' => 'Sistem Informasi', 'ipk' => '3.79', 'waktu' => 'September 2017 - Maret 2022'],
        'kerja' => ['nama' => 'CV. ATSOFT Teknologi', 'waktu' => 'Januari 2023 - Saat ini', 'sebagai' => 'Web Developer'],
        'keahlian' => ['PHP', 'Phalcon Framework', 'Bootstrap', 'Javascript', 'MariaDB', 'GitHub', 'Docker'],
    ];

    return view('about', $data);
});

Route::get('/project', function () {
    $data = [
        'projek' => [
            ['nama' => 'ASN Memayu', 'detail' => 'Sistem Informasi Kepegawaian Pemerintah Provinsi DIY', 'teknologi' => ['Phalcon Framework'], 'gambar' => [asset('appstack/img/project/asn_memayu.png')], 'situs' => 'https://asnmemayu.jogjaprov.go.id/fw/'],
            ['nama' => 'Sawiji Kabupaten Purworejo', 'detail' => 'Sistem Akuntabilitas Kinerja Instansi Pemerintah Kabupaten Purworejo', 'teknologi' => ['Phalcon Framework', 'Leaflet', 'ApexCharts'], 'gambar' => [asset('appstack/img/project/sawiji_1.png'), asset('appstack/img/project/sawiji_2.png')], 'situs' => 'https://sawiji.purworejokab.go.id/'],
            ['nama' => 'Semarak Kabupaten Kebumen', 'detail' => 'Sistem Evaluasi, Monitoring dan Pelaporan Kinerja Pembangunan Kabupaten Kebumen', 'teknologi' => ['Phalcon Framework', 'ApexCharts'], 'gambar' => [asset('appstack/img/project/semarak_1.png')], 'situs' => 'https://semarak.kebumenkab.go.id/'],
            ['nama' => 'Simonso', 'detail' => 'Sistem Informasi Monitoring Sungai Serayu Opak', 'teknologi' => ['Phalcon Framework', 'Leaflet'], 'gambar' => [asset('appstack/img/project/simonso_1.png'),asset('appstack/img/project/simonso_2.png')], 'situs' => 'https://simonso.atsoft.co.id/simonso-fw/']
        ],
    ];

    return view('project', $data);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
