@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="" class="">
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
    </section><!-- End Hero -->

    <main id="main">

        <section id="features" class="services section-bg">
            <div class="section-tittle">
                <h3>Features</h3>
            </div>
            <div class="row-card">
                @foreach ($berita as $b)
                    <div class="cardpokersize">
                        <img src="{{ url('storage/berita/' . $b->foto) }}">
                        <h3>{{ $b->judul }}</h3>
                        <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah Daerah
                        </p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
