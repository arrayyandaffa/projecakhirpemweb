                @extends('layouts.app')

                @section('content')
                <style>
                html {
                    scroll-behavior: smooth;
                }
                </style>

<!-- Custom Simple Slider -->
<div class="simple-slider" id="simpleSlider">
    <div class="simple-slider-wrapper">
        
        <!-- Slide 1 -->
        <div class="simple-slide" style="background-image: url('{{ asset('images/sdn2krebet1.png') }}');">
            <div class="simple-slide-content">
                <h2>You only have to know one thing</h2>
                <p>You can learn anything</p>
                <a class="simple-button" href="#">Start a Course</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="simple-slide" style="background-image: url('{{ asset('images/banner_img.png') }}');">
            <div class="simple-slide-content">
                <h2>Second Slide Title</h2>
                <p>More learning</p>
                <a class="simple-button" href="#">Join Now</a>
            </div>
        </div>

    </div>
</div>

<!-- Simple Slider Script -->
<script>
let currentSlide = 0;
const slidesWrapper = document.querySelector('#simpleSlider .simple-slider-wrapper');
const totalSlides = slidesWrapper.children.length;

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    slidesWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
}

setInterval(nextSlide, 4000); // Ganti slide tiap 4 detik
</script>




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
                        <img class="img-responsive" src="{{ asset('assets/images/guru.jpg') }}" alt="#" /> 
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
                        <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="full blog_img_popular" onclick="goToGallery()">
            <img id="leftImage" class="img-responsive" src="{{ asset('images/drumband.jpg') }}" alt="#" />
            <h4 id="leftTitle">Drumband</h4>
            <p id="leftDesc">Semangat dan keceriaan anak-anak dalam kegiatan drumband mencerminkan kerja sama, disiplin, dan kreativitas sejak dini.</p>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="full blog_img_popular">
            <img id="rightImage" class="img-responsive" src="{{ asset('images/pramuka.jpg') }}" alt="#" />
            <h4 id="rightTitle">Pramuka</h4>
            <p id="rightDesc">Lomba Pramuka sebagai ajang untuk menumbuhkan kemandirian, kedisiplinan, serta keterampilan kerja sama tim.</p>
        </div>
    </div>
</div>


<!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon" onclick="prevSlide()"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon" onclick="nextSlide()"></span>
                        </a>

<!-- Tombol 
<div class="text-center mt-3">
    <button onclick="prevSlide()">⟵ Sebelumnya</button>
    <button onclick="nextSlide()">Berikutnya ⟶</button>
</div>-->

<script>
// Data slide
const slides = [
    {
        left: {
            img: "{{ asset('images/drumband.jpg') }}",
            title: "Drumband",
            desc: "Semangat dan keceriaan anak-anak dalam kegiatan drumband mencerminkan kerja sama, disiplin, dan kreativitas sejak dini."
        },
        right: {
            img: "{{ asset('images/pramuka.jpg') }}",
            title: "Pramuka",
            desc: "Lomba Pramuka sebagai ajang untuk menumbuhkan kemandirian, kedisiplinan, serta keterampilan kerja sama tim."
        }
    },
    {
        left: {
            img: "{{ asset('images/pramuka.jpg') }}",
            title: "Pramuka",
            desc: "Lomba Pramuka sebagai ajang untuk menumbuhkan kemandirian, kedisiplinan, serta keterampilan kerja sama tim."
        },
        right: {
            img: "{{ asset('images/sholat.jpg') }}",
            title: "Sholat Berjamaah",
            desc: "Kegiatan sholat berjamaah menanamkan kebiasaan ibadah, mempererat kebersamaan, serta membentuk karakter spiritual sejak dini."
        }
    },
    {
        left: {
            img: "{{ asset('images/sholat.jpg') }}",
            title: "Sholat Berjamaah",
            desc: "Kegiatan sholat berjamaah menanamkan kebiasaan ibadah, mempererat kebersamaan, serta membentuk karakter spiritual sejak dini."
        },
        right: {
            img: "{{ asset('images/ngaji.jpg') }}",
            title: "Ngaji",
            desc: "Kegiatan mengaji bersama diikuti oleh siswa-siswi SD Negeri 2 Krebet sebagai bagian dari pembinaan karakter religius."
        }
    },
    {
        left: {
            img: "{{ asset('images/ngaji.jpg') }}",
            title: "Ngaji",
            desc: "Kegiatan mengaji bersama diikuti oleh siswa-siswi SD Negeri 2 Krebet sebagai bagian dari pembinaan karakter religius."
        },
        right: {
            img: "{{ asset('images/icebreaking.jpg') }}",
            title: "Icebreaking",
            desc: "Kegiatan icebreaking di kelas dilakukan sebagai upaya menciptakan suasana belajar yang menyenangkan dan interaktif."
        }
    },
    {
        left: {
            img: "{{ asset('images/icebreaking.jpg') }}",
            title: "Icebreaking",
            desc: "Kegiatan icebreaking di kelas dilakukan sebagai upaya menciptakan suasana belajar yang menyenangkan dan interaktif."
        },
        right: {
            img: "{{ asset('images/drumband.jpg') }}",
            title: "Drumband",
            desc: "Semangat dan keceriaan anak-anak dalam kegiatan drumband mencerminkan kerja sama, disiplin, dan kreativitas sejak dini."
        }
    }
];

let currentIndex = 0;

function showSlide(index) {
    const slide = slides[index];

    // Update gambar kiri
    document.getElementById('leftImage').src = slide.left.img;
    document.getElementById('leftTitle').innerText = slide.left.title;
    document.getElementById('leftDesc').innerText = slide.left.desc;

    // Update gambar kanan
    document.getElementById('rightImage').src = slide.right.img;
    document.getElementById('rightTitle').innerText = slide.right.title;
    document.getElementById('rightDesc').innerText = slide.right.desc;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
}

function goToGallery() {
    window.location.href = "{{ url('/gallery/galleryy') }}";
}
</script>

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
                <div class="map-container">
                    <div class="map-card">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.88183542223!2d111.36799477575175!3d-7.90741137869691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e799df86428cc8f%3A0x10bb0d92beeb0a48!2sSDN%202%20Krebet!5e0!3m2!1sid!2sid!4v1746029234972!5m2!1sid!2sid" 
                            allowfullscreen 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Location</span></h2>
                        </div>
                        <div class="full">
                            <p>
                                SD Negeri 2 Krebet terletak di Dusun Krajan, Desa Krebet, Kecamatan Jambon, Kabupaten Ponorogo, Jawa Timur. 
                                Sekolah ini berada di lingkungan yang strategis dan mudah diakses dari berbagai arah, baik oleh peserta didik 
                                maupun masyarakat sekitar. Dengan suasana yang tenang dan kondusif, lokasi SDN 2 Krebet mendukung proses 
                                belajar-mengajar yang nyaman serta mendekatkan sekolah dengan komunitas lokal.
                            </p>
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
    <div class="section contact_section" style="background:#84C2F6;">
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

