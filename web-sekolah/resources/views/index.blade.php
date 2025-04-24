                @extends('layouts.app')

                @section('content')
                <style>
                html {
                    scroll-behavior: smooth;
                }
                </style>

                <!-- Pogo Slider -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pogo-slider@1.0.0/pogo-slider.min.css">

                <div class="ulockd-home-slider">
                    <div class="pogoSlider" id="js-main-slider">
                        <!-- Slide 1 -->
                        

                        <div class="pogoSlider-slide" style="background-image:url({{ asset('images/banner_img.png') }});">
                            <div class="container">
                                <div class="slide_text">
                                    <h3><span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                    <h4>Free Educations</h4>
                                    <a class="contact_bt" href="#">Start a Course</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="pogoSlider-slide" style="background-image:url({{ asset('images/banner_img.png') }});">
                            <div class="container">
                                <div class="slide_text">
                                    <h3><span class="theme_color">Second Slide Title</span><br>More learning</h3>
                                    <h4>More Education</h4>
                                    <a class="contact_bt" href="#">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section tabbar_menu">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="tab_menu">
                    <ul>
                       <li><a href="#"><span class="icon"><img src="{{ asset('assets/images/i1.png') }}" alt="#" /></span><span>Beranda</span></a></li>
                       <li><a href="#"><span class="icon"><img src="{{ asset('assets/images/i2.png') }}" alt="#" /></span><span>Profil</span></a></li>
                       <li><a href="#directory"><span class="icon"><img src="{{ asset('assets/images/i3.png') }}" alt="#" /></span><span>Direktori</span></a></li>
                       <li><a href="#"><span class="icon"><img src="{{ asset('assets/images/i4.png') }}" alt="#" /></span><span>Galeri</span></a></li>
                       <li><a href="#"><span class="icon"><img src="{{ asset('assets/images/i5.png') }}" alt="#" /></span><span>Lokasi</span></a></li>
                       <li><a href="#"><span class="icon"><img src="{{ asset('assets/images/i6.png') }}" alt="#" /></span><span>Kontak</span></a></li>
                       <li><a href="#"><span class="icon"><img src="{{ asset('assets/images/i7.png') }}" alt="#" /></span><span>Email</span></a></li>
                    </ul>
                 </div>
              </div>
          </div>
       </div>
    </div>

        <!-- end section -->

        <!-- section -->
        <div class="section margin-top_50">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                    <div class="full">
                        <img src="{{ asset('assets/images/img2.png') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_right">
                            <h2><span>Tentang</span> SDN 2 Krebet</h2>
                        </div>
                        <div class="full">
                            <p>SD Negeri 2 Krebet sebagai salah satu lembaga pembelajaran tingkat sekolah dasar berlamat di Jalan Watu Gong No. 17 
                                Ds Krebet Kecamatan Jambon Kabupaten Ponorogo Propinsi Jawa Timur. Secara geografis berada di selatan kecamatan  Jambon  
                                kurang lebih jarak 3 kilo meter. Lokasi SD Negeri 2 Krebet yang berada di Desa Krebet Kec. Jambon,  
                                lingkungan sekitarnya masih banyak persawahan  dan jauh dari kebisingan sehingga nyaman untuk belajar.
                            </p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme" href="#">About more</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Profil</span> SDN 2 Krebet</h2>
                        </div>
                        <div class="full">
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Nama</span>
                            <span>: SD NEGERI 2 KREBET</span>
                        </div>    
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">NPSN</span>
                            <span>: 20509942</span>
                        </div>
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Alamat</span>
                            <span>: Jl Watu Gong No. 17</span>
                        </div>    
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Desa/Kelurahan</span>
                            <span>: KREBET</span>
                        </div>
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Kecamatan</span>
                            <span>: JAMBON</span>
                        </div>    
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Kabupaten</span>
                            <span>: PONOROGO</span>
                        </div>
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Provinsi</span>
                            <span>: JAWA TIMUR</span>
                        </div>    
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Status Sekolah</span>
                            <span>: NEGERI</span>
                        </div>
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Bentuk Pendidikan</span>
                            <span>: SD</span>
                        </div>    
                        <div style="display: flex; margin-bottom: 5px;">
                            <span style="width: 200px; font-weight: bold;">Jenjang Pendidikan</span>
                            <span>: DIKDAS</span>
                        </div>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme" href="#">About more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->



    <!-- section -->
    <div id="directory" class="section layout_padding" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Directory</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{ asset('assets/images/p1.png') }}" alt="#" /> 
                        <h4>Tenaga Pendidik</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{ asset('assets/images/p2.png') }}" alt="#" />
                        <h4>Siswa</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{ asset('assets/images/p3.png') }}" alt="#" />
                        <h4>Alumni</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Gallery</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="{{ asset('images/img9.png') }}" alt="#" />
                                            <h4>Technology</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="{{ asset('images/img8.png') }}" alt="#" />
                                            <h4>Education</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="{{ asset('images/img9.png') }}" alt="#" />
                                            <h4>Technology</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="{{ asset('images/img8.png') }}" alt="#" />
                                            <h4>Education</h4>
                                            <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full float-right_img">
                        <img src="{{ asset('images/img6.png') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Location</span></h2>
                        </div>
                        <div class="full">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                                sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme" href="#">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Contact</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->




    <!-- section -->
    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="full float-right_img">
                        <img src="{{ asset('images/img10.png') }}" alt="#">
                    </div>
                </div>
                <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
                    <div class="contact_form">
                        <form action="{{ url('contact') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="full field">
                                    <input type="text" name="name" placeholder="Your Name" required />
                                </div>
                                <div class="full field">
                                    <input type="email" name="email" placeholder="Email Address" required />
                                </div>
                                <div class="full field">
                                    <input type="text" name="phone" placeholder="Phone Number" required />
                                </div>
                                <div class="full field">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="full field">
                                    <div class="center">
                                        <button type="submit">Send</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

