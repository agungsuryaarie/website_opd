@extends('layouts.app')

@section('content')
    <section id="gallery" class="galeri">
        <div class="container-f">
            <div class="row">
                @foreach ($img as $i)
                    <div class="col-lg-12">
                        <div class="gallery">
                            <div class="gallery__column">
                                <a href="https://unsplash.com/@jeka_fe" target="_blank" class="gallery__link">
                                    <figure class="gallery__thumb">
                                        <img src="{{ url('storage/foto' . $i->foto) }}" alt="Portrait by Jessica Felicio"
                                            class="gallery__image">
                                        <figcaption class="gallery__caption"></figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
