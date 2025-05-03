<!-- resources/views/profil/visi-misi.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Gallery Section -->
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full text_align_center">
                    <div class="heading_main">
                        <h2><span>Gallery</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gallery-grid">

            <!-- Item 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/pramuka.jpg') }}" alt="Pramuka" />
                    <h4>Pramuka</h4>
                    <p>Kegiatan lomba Pramuka diikuti oleh siswa-siswi SD Negeri 2 Krebet sebagai ajang untuk menumbuhkan kemandirian, kedisiplinan, serta keterampilan kerja sama tim. Melalui lomba ini, siswa belajar nilai-nilai kepemimpinan dan tanggung jawab dalam suasana kompetitif yang positif</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/ngaji.jpg') }}" alt="Ngaji" />
                    <h4>Mengaji</h4>
                    <p>Kegiatan mengaji bersama diikuti oleh siswa-siswi SD Negeri 2 Krebet sebagai bagian dari pembinaan karakter religius. Melalui momen ini, siswa diajak untuk mencintai Al-Qur'an serta memperkuat akhlak dan nilai-nilai keagamaan dalam suasana yang khidmat dan penuh makna</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/icebreaking.jpg') }}" alt="IceBreaking" />
                    <h4>IceBreaking</h4>
                    <p>Kegiatan icebreaking di kelas dilakukan sebagai upaya menciptakan suasana belajar yang menyenangkan dan interaktif. Melalui permainan ringan dan aktivitas penyegar suasana, siswa menjadi lebih semangat, fokus, serta siap menerima materi pembelajaran dengan lebih baik.</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/drumband.jpg') }}" alt="Drumband" />
                    <h4>Drumband SD Negeri 2 Krebet</h4>
                    <p>Semangat dan keceriaan anak-anak dalam kegiatan drumband mencerminkan kerja sama, disiplin, dan kreativitas sejak dini.</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/voly.jpg') }}" alt="Voly" />
                    <h4>Voly</h4>
                    <p>Siswa SD Negeri 2 Krebet menunjukkan semangat sportivitas dalam lomba voli antar kelas. Kegiatan ini melatih kekompakan, disiplin, dan semangat juang sejak dini</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/karawitan.jpg') }}" alt="Karawitan" />
                    <h4>Karawitan</h4>
                    <p>Kegiatan karawitan di SDN 2 Krebet melatih siswa memainkan gamelan Jawa sebagai upaya melestarikan budaya daerah. Latihan rutin ini juga membentuk kedisiplinan, kerja sama, dan kecintaan terhadap seni tradisional.</p>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/upacara.jpg') }}" alt="Upacara" />
                    <h4>Upacara Bendera SD</h4>
                    <p>Suasana khidmat upacara bendera di halaman sekolah yang diikuti oleh siswa-siswi dengan seragam lengkap serta para guru pembina. Kegiatan ini melatih kedisiplinan, rasa hormat, dan cinta tanah air sejak dini.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Gallery Section -->

@endsection


