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
                    <img class="img-fluid" src="{{ asset('images/img1.png') }}" alt="Technology" />
                    <h4>Technology</h4>
                    <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/img2.png') }}" alt="Education" />
                    <h4>Education</h4>
                    <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/img3.png') }}" alt="Library" />
                    <h4>Library</h4>
                    <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/img4.png') }}" alt="Sport" />
                    <h4>Sport</h4>
                    <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/img5.png') }}" alt="Music" />
                    <h4>Music</h4>
                    <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="gallery-item">
                    <img class="img-fluid" src="{{ asset('images/img6.png') }}" alt="Art" />
                    <h4>Art</h4>
                    <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Gallery Section -->

@endsection


