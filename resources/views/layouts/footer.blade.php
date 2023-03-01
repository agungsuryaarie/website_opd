<!-- ======= Footer ======= -->
{{-- <footer id="footer">

    <div class="footer-top">
        <div class="container-footer">
            <div class="row-footer">
                <div class="col-lg-4 col-md-6 footer-contact">
                    <div class="d-flex align-items-center justify-content-between">
                        <img src="{{ url('front/img/logo-sipenaku-white.png') }}"class="img-fluid mb-3" style="width:45%"
                            alt="">
                    </div>
                    <p></p>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Pemerintah Kabupaten Batu bara</h4>
                    <p>Jl. Perintis Kemerdekaan, Lima Puluh Kota, Kec. Lima Puluh, Kabupaten Batu Bara, Sumatera Utara
                        21255</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container-footer">
        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    Copyright &copy; {{ date('Y') }} Bagian Keuangan Sekretariat Daerah Kabupaten Batu Bara. All
                    rights
                    reserved.
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer --> --}}
<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">

                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Kontak Kami</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Techie</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ url('front/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ url('front/vendor/aos/aos.js') }}"></script>
{{-- <script src="{{ url('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="{{ url('front/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ url('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('front/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ url('front/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ url('front/js/main.js') }}"></script>
<script src="https:://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>


@yield('script')
</body>

</html>
