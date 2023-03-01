@extends('layouts.app')

@section('content')
    <section class="berita">
        <div class="container">
            <div class="row-news">
                <div class="row-card">
                    <div class="card-details">
                        {{-- <img src="{{ url('storage/berita/' . $b->foto) }}"> --}}
                        <img src="{{ url('front/img/2.jpeg') }}">
                        <h3>{{ $post->judul }}</h3>
                        <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                            Daerah
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                    <div class="box-shadow">
                        <div class="margin-bottom-50">
                            <h4> Recent News</h4>

                            <div class="blog-thumb blog-thumb-circle mb-10">
                                <div class="blog-thumb-hover">
                                    <img class="rounded-x" src="{{ url('front/img/2.jpeg') }}" alt="">
                                    <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="blog_single.html">Misused words and how to use them correctly</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>Mar 6, 2015</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb blog-thumb-circle mb-10">
                                <div class="blog-thumb-hover">
                                    <img class="rounded-x" src="assets/img/blog/img22.jpg" alt="">
                                    <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="blog_single.html">8 health benefits and drawbacks of coffee</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>Mar 6, 2015</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb blog-thumb-circle mb-10">
                                <div class="blog-thumb-hover">
                                    <img class="rounded-x" src="assets/img/blog/img2.jpg" alt="">
                                    <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="blog_single.html">What are the top five books you must read?</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>Mar 6, 2015</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-thumb blog-thumb-circle">
                                <div class="blog-thumb-hover">
                                    <img class="rounded-x" src="assets/img/blog/img21.jpg" alt="">
                                    <a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="blog-thumb-desc">
                                    <h3><a href="blog_single.html">Stylish things to do, see and buy this week</a></h3>
                                    <ul class="blog-thumb-info">
                                        <li>Mar 6, 2015</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
