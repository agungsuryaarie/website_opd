@extends('layouts.app')

@section('content')
    <div class="slideshow">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slideshow as $s)
                    <div class="carousel-item active">
                        <img src="{{ url('storage/slideshow/' . $s->gambar) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End Hero -->

    <main id="main">
        <section id="news" class="news section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Berita Terbaru</h2>
                </div>
                <div class="row-blog">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-sm-7">
                                <!-- Blog Grid -->
                                <div class="blog-grid sm-margin-bottom-40">
                                    <div class="blog-grid-grad">
                                        <img src="{{ url('front/img/2.jpeg') }}" style="width: 100%" alt="">
                                    </div>
                                    <h3><a href="blog_single.html">Paris-Nice: Gallopin wins stage 6 and takes race lead</a>
                                    </h3>
                                    <ul class="blog-grid-info">
                                        <li>Richard Garner</li>
                                        <li>Mar 6, 2015</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                    </ul>
                                    <p>Nulla gravida sit amet odio vel posuere. Proin maximus est diam, sed iaculis arcu
                                        ultrices sed.
                                        Quisque nisi diam, sodales sit amet diam ut, bibendum interdum metus.</p>
                                    <a class="r-more" href="blog_single.html">Read More</a>
                                </div>
                                <!-- End Blog Grid -->
                            </div>

                            <div class="col-sm-5">
                                <!-- Blog Thumb v2 -->
                                <div class="blog-thumb-v2 margin-bottom-20">
                                    <div class="blog-thumb-grad">
                                        <img src="{{ url('front/img/2.jpeg') }}" alt="">
                                    </div>
                                    <div class="blog-thumb-desc">
                                        <h3><a href="blog_single.html">Brady handed his place in history</a></h3>
                                        <ul class="blog-thumb-info">
                                            <li>Mar 6, 2015</li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog Thumb v2 -->

                                <!-- Blog Thumb v2 -->
                                <div class="blog-thumb-v2 margin-bottom-20">
                                    <div class="blog-thumb-grad">
                                        <img src="{{ url('front/img/2.jpeg') }}" alt="">
                                    </div>
                                    <div class="blog-thumb-desc">
                                        <h3><a href="blog_single.html">Jason is the best in the world</a></h3>
                                        <ul class="blog-thumb-info">
                                            <li>Mar 6, 2015</li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog Thumb v2 -->

                                <!-- Blog Thumb v2 -->
                                <div class="blog-thumb-v2 margin-bottom-20">
                                    <div class="blog-thumb-grad">
                                        <img src="{{ url('front/img/2.jpeg') }}" alt="">
                                    </div>
                                    <div class="blog-thumb-desc">
                                        <h3><a href="blog_single.html">This woman is the real winner of the Super Bowl</a>
                                        </h3>
                                        <ul class="blog-thumb-info">
                                            <li>Mar 6, 2015</li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog Thumb v2 -->

                                <!-- Blog Thumb v2 -->
                                <div class="blog-thumb-v2 margin-bottom-20">
                                    <div class="blog-thumb-grad">
                                        <img src="{{ url('front/img/2.jpeg') }}" alt="">
                                    </div>
                                    <div class="blog-thumb-desc">
                                        <h3><a href="blog_single.html">Who are the 10 greatest living athletes in the
                                                UK?</a></h3>
                                        <ul class="blog-thumb-info">
                                            <li>Mar 6, 2015</li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog Thumb v2 -->

                                <!-- Blog Thumb v2 -->
                                <div class="blog-thumb-v2">
                                    <div class="blog-thumb-grad">
                                        <img src="{{ url('front/img/2.jpeg') }}" alt="">
                                    </div>
                                    <div class="blog-thumb-desc">
                                        <h3><a href="blog_single.html">Contador confident before Tirreno-Adriatico showdown
                                                on
                                                Terminillo</a></h3>
                                        <ul class="blog-thumb-info">
                                            <li>Mar 6, 2015</li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog Thumb v2 -->
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3">
                        <div class="blog-grid-grad">
                            <img src="{{ url('front/img/2.jpeg') }}" style="width: 100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="services section-bg">
            <div class="section-tittle">
                <h3>Features</h3>
            </div>
            <div class="row-card">
                @foreach ($berita as $b)
                    <div class="cardpokersize">
                        <img src="{{ url('storage/berita/' . $b->foto) }}">
                        {{-- <img src="{{ url('front/img/2.jpeg') }}"> --}}
                        <h3>{{ $b->judul }}</h3>
                        <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                            Daerah
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('front/img/logo-bpbd.png') }}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('front/img/logo-bpbd.png') }}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('front/img/logo-bpbd.png') }}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('front/img/logo-bpbd.png') }}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
    </main>
@endsection
