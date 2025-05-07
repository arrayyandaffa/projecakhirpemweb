<!-- resources/views/profil/visi-misi.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Gallery Section -->
     <br><br>
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
                <div class="gallery-card">
                    <img class="gallery-img" src="{{ asset('images/pramuka.jpg') }}" alt="Pramuka">
                    <div class="gallery-content">
                    <h5>PRAMUKA</h5>
                    <p>
                        Kegiatan lomba Pramuka diikuti oleh siswa-siswi SD Negeri 2 Krebet sebagai ajang untuk menumbuhkan kemandirian, kedisiplinan, serta keterampilan kerja sama tim. Melalui lomba ini, siswa belajar nilai-nilai kepemimpinan dan tanggung jawab dalam suasana kompetitif yang positif.
                    </p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-card">
                    <img class="gallery-img" src="{{ asset('images/ngaji.jpg') }}" alt="Ngaji" />
                    <div class="gallery-content">
                        <h5>Mengaji</h5>
                    <p>Kegiatan mengaji bersama diikuti oleh siswa-siswi SD Negeri 2 Krebet sebagai bagian dari pembinaan karakter religius. Melalui momen ini, siswa diajak untuk mencintai Al-Qur'an serta memperkuat akhlak dan nilai-nilai keagamaan dalam suasana yang khidmat dan penuh makna</p>
                </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-card">
                    <img class="gallery-img" src="{{ asset('images/icebreaking.jpg') }}" alt="Pramuka">
                    <div class="gallery-content">
                    <h5>IceBreaking</h5>
                    <p>
                    Kegiatan icebreaking di kelas dilakukan sebagai upaya menciptakan suasana belajar yang menyenangkan dan interaktif. Melalui permainan ringan dan aktivitas penyegar suasana, siswa menjadi lebih semangat, fokus, serta siap menerima materi pembelajaran dengan lebih baik
                    </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-card">
                    <img class="gallery-img" src="{{ asset('images/drumband.jpg') }}" alt="Pramuka">
                    <div class="gallery-content">
                    <h5>Drumband</h5>
                    <p>
                    Kegiatan drumband yang diikuti oleh siswa-siswi SD Negeri 2 Krebet menjadi ajang untuk menumbuhkan semangat, keceriaan, serta meningkatkan keterampilan ritmis dan koordinasi motorik. Melalui latihan dan penampilan bersama, siswa belajar tentang kerja sama tim, kedisiplinan dalam berlatih, serta mengekspresikan kreativitas secara musikal. 
                    </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-card">
                    <img class="gallery-img" src="{{ asset('images/voly.jpg') }}" alt="Pramuka">
                    <div class="gallery-content">
                    <h5>Voli</h5>
                    <p>
                    Siswa SD Negeri 2 Krebet menunjukkan semangat sportivitas yang luar biasa dalam lomba voli antar kelas. Kegiatan ini tidak hanya menjadi ajang kompetisi yang menyenangkan, tetapi juga memiliki nilai pendidikan yang tinggi. Melalui lomba voli, para siswa diajak untuk mengembangkan kekompakan dalam tim, disiplin dalam mengikuti aturan permainan.
                    </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-card">
                    <img class="gallery-img" src="{{ asset('images/karawitan.jpg') }}" alt="Pramuka">
                    <div class="gallery-content">
                    <h5>Karawitan</h5>
                    <p>
                    Kegiatan karawitan di SDN 2 Krebet melatih siswa untuk memainkan gamelan Jawa sebagai upaya melestarikan budaya daerah. Latihan rutin ini tidak hanya memperkenalkan siswa pada kekayaan seni tradisional, tetapi juga membentuk kedisiplinan, kerja sama, dan kecintaan terhadap budaya lokal serta untuk melestarikan budaya nusantara.
                    </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-card">
                    <img class="gallery-img" src="{{ asset('images/upacara.jpg') }}" alt="Upacara">
                    <div class="gallery-content">
                    <h5>Upacara Bendera</h5>
                    <p>
                    Suasana khidmat upacara bendera di halaman sekolah yang diikuti oleh siswa-siswi dengan seragam lengkap serta para guru pembina. Kegiatan ini melatih kedisiplinan, rasa hormat, dan cinta tanah air sejak dini.
                    </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Gallery Section -->

@endsection


