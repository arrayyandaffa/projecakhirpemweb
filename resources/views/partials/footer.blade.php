<!-- Start Footer -->
<footer class="footer-box">
    <div class="container">
        <div class="row">

            <!-- Logo & Deskripsi -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog">
                    <div class="full margin-bottom_30">
                        <img src="{{ asset('images/sdn2krebetputih.png') }}" alt="#" />
                    </div>
                    <div class="full white_fonts">
                        <p> Salah satu lembaga pembelajaran tingkat sekolah dasar beralamat di Jalan Watu Gong No. 17 Ds Krebet Kecamatan Jambon Kabupaten Ponorogo Provinsi Jawa Timur</p>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog footer_menu white_fonts">
                        <h3>Quick links</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">> Beranda</a></li>
                            <li><a href="#">> Profil</a></li>
                            <li><a href="#">> Directory</a></li>
                            <li><a href="{{ url('/gallery/galleryy') }}">> Gallery</a></li>
                            <li><a href="{{ url('https://maps.app.goo.gl/uLX9SAZPZK9DVZbL7') }}">> Location</a></li>
                        </ul>
                    </div>
                </div> -->

            <!-- <-- Quick Links -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog footer_menu white_fonts">
                    <h3>Quick links</h3>
                    <ul class="quick-links">
                        <li><a href="{{ url('/') }}">› Beranda</a></li>

                        <li class="has-submenu">
                            <a href="#">› Profil</a>
                            <ul class="submenu">
                                <li><a href="{{ url('/profil/tentang') }}">Tentang Sekolah</a></li>
                                <li><a href="{{ url('/profil/visimisi') }}">Visi dan Misi</a></li>
                                <li><a href="{{ url('/profil/struktur') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ url('/profil/akreditasi') }}">Akreditasi Sekolah</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">› Direktori</a>
                            <ul class="submenu">
                                <li><a href="{{ url('/direktori/tenagapendidik') }}">Tenaga Pendidik</a></li>
                                <li><a href="{{ url('/direktori/siswa') }}">Siswa</a></li>
                                <li><a href="{{ url('/direktori/alumni') }}">Alumni</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ url('/gallery/galleryy') }}">› Galeri</a></li>
                        <li><a href="https://maps.app.goo.gl/uLX9SAZPZK9DVZbL7" target="_blank">› Lokasi</a></li>
                    </ul>

                </div>
            </div>



            <!-- Newsletter -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog full white_fonts">
                    <h3>Jam Kerja</h3>
                    <p>Senin - Kamis : 07:00 - 15:00</p>
                    <p>Jumat : 07:00 - 11:00</p>
                    <p>Sabtu - Minggu : Tutup</p>
                    <p>Cuti Bersama / Libur Nasional : Tutup</p>
                    <!-- <div class="newsletter_form">
                        <form action="{{ url('/') }}" method="POST">
                            @csrf
                            <input type="email" name="newsletter_email" placeholder="Your Email" required />
                            <button type="submit">Submit</button>
                        </form>
                    </div> -->
                </div>
            </div>

            <!-- Kontak -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog full white_fonts">
                    <h3>Contact us</h3>
                    <ul class="full">
                        <li><img src="{{ asset('images/i5.png') }}"><span>Jl. Watu Gong No. 17 Desa Krebet Kec. Jambon Kab. Ponorogo Prov. Jawa Timur</span></li>
                        <li><img src="{{ asset('images/i6.png') }}"><span>sdnkrebet2@gmail.com</span></li>
                        <li><img src="{{ asset('images/i7.png') }}"><span>+6281234241005</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Footer Bottom -->
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="crp">© Copyrights 2019 design by html.design </p>
            </div>
        </div>
    </div>
</div>

<!-- Scroll To Top -->
<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- ALL PLUGINS -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
<script src="{{ asset('js/slider-index.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/form-validator.min.js') }}"></script>
<script src="{{ asset('js/contact-form-script.js') }}"></script>
<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/images-loded.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Counter JS -->
<script>
    (function($) {
        $.fn.countTo = function(options) {
            options = options || {};

            return $(this).each(function() {
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;
                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,
            to: 0,
            speed: 1000,
            refreshInterval: 100,
            decimals: 0,
            formatter: formatter,
            onUpdate: null,
            onComplete: null
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function($) {
        $('.count-number').data('countToOptions', {
            formatter: function(value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
</body>

</html>