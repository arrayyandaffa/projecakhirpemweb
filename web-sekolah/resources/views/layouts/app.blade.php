<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SDN 2 KRAJAN</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('images/loader.gif') }}" alt="#" />
        </div>
    </div>

    <!-- HEADER -->
     
    @include('partials.header')



    <!-- MAIN CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    @include('partials.footer')

    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ asset('js/slider-index.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/images-loded.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/pogo-slider.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#js-main-slider').pogoSlider({
                autoplay: true,
                autoplayTimeout: 5000,
                displayProgess: true,
                preserveTargetSize: true,
                targetWidth: 1000,
                targetHeight: 300,
            }).data('plugin_pogoSlider');
        });
    </script>


    <!-- jQuery dulu -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Bootstrap 5 JS Bundle (sudah termasuk Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function(){
    var link = document.querySelector('.tab_menu a[href="#directory"]');
    var target = document.getElementById('directory');
    if (!link || !target) return;

    link.addEventListener('click', function(e){
        // Hentikan handler bawaan & handler plugin lain
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        // Hitung posisi absolut elemen target
        var top = target.getBoundingClientRect().top + window.pageYOffset;

        // Scroll manual dengan smooth behavior
        window.scrollTo({
        top: top,
        behavior: 'smooth'
        });
    }, /* useCapture */ true);
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function(){
    // Pilih hanya link menu Direktori
    var link = document.querySelector('.tab_menu a[href="#directory"]');
    var target = document.getElementById('directory');
    if (!link || !target) return;

    // Jika plugin lain sudah attach click listener, hapus dulu
    // Dengan cara cloneNode, semua listener lama ikut hilang
    var cleanLink = link.cloneNode(true);
    link.parentNode.replaceChild(cleanLink, link);

    // Pasang listener baru
    cleanLink.addEventListener('click', function(e){
        e.preventDefault();
        // Hitung jarak top absolut
        var top = target.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
        top: top,
        behavior: 'smooth'
        });
    });
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const link = document.querySelector('a[href="#directory"]');
        const target = document.querySelector('#directory');

        if (link && target) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const top = target.getBoundingClientRect().top + window.pageYOffset;

                window.scrollTo({
                    top: top,
                    behavior: 'smooth'
                });
            });
        }
    });
    </script>

    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({
            behavior: 'smooth'
            });
        }
        });
    });
    </script>

</body>
</html>
