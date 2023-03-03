@extends('layouts.app')

@section('content')
    <section class="berita">
        <div class="container">
            <div class="row-news">
                <div class="card-details">
                    <img src="{{ url('storage/berita/' . $post->foto) }}">
                    <ul class="blog-grid-info">
                        <li><i class="bi bi-calendar"></i> {{ $post->tanggal }}</li>
                        <li><i class="bi bi-clock"></i> {{ $post->jam }} WIB</li>
                    </ul>
                    <h3>{{ $post->judul }}</h3>
                    <p>{!! $post->isi !!}</p>
                </div>


                <div class="col-lg-4 col-md-3">
                    <div class="box-shadow">
                        <div class="margin-bottom-50">
                            <h4 class="mb-20">Berita Lainnya</h4>
                            @foreach ($recent_post as $rpost)
                                <div class="blog-thumb blog-thumb-circle mb-10">
                                    <div class="blog-thumb-hover">
                                        <img class="rounded-x" src="{{ url('storage/berita/' . $rpost->foto) }}"
                                            alt="">
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
