<!-- resources/views/profil/visi-misi.blade.php -->
<!-- @extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Akreditasi : B</h2>

        </p>
    </div> -->
<!-- @endsection -->

@extends('layouts.app')

@section('content')
<div class="section margin-top_50">
    <div class="container">
        <div class="row">
            <div class="col-lg layout_padding_2">
                <div class="full">
                    <div class="heading_main text_align_right">
                        <h2><span>Akreditasi</span> SDN 2 Krebet</h2>
                    </div>
                    <div class="full">
                        <p>
                            <strong>SD Negeri 2 Krebet</strong> telah terakreditasi dengan <strong>peringkat B</strong> 
                            berdasarkan penilaian dari Badan Akreditasi Nasional Sekolah/Madrasah (BAN-S/M). 
                            Peringkat ini menunjukkan bahwa sekolah telah memenuhi sebagian besar standar nasional pendidikan, 
                            baik dari segi manajemen, proses pembelajaran, sarana prasarana, maupun mutu tenaga pendidik.
                        </p>
                        <p>
                            Akreditasi ini menjadi bukti komitmen SD Negeri 2 Krebet dalam memberikan layanan pendidikan 
                            yang berkualitas dan terus berupaya untuk meningkatkan mutu pendidikan demi keberhasilan peserta didik.
                        </p>
                    </div>

                    {{-- Gambar sertifikat akreditasi jika ada --}}
                    <div class="full margin-top_30">
                        <img class="img-fluid" src="{{ asset('images/sertifikatakreditasi.jpg') }}" alt="Sertifikat Akreditasi SDN 2 Krebet">
                    </div>

                    <div class="full margin-top_30">
                        <a class="hvr-radial-out button-theme" href="#">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

