@extends('layouts.app')

@section('content')
    <section id="gallery" class="galeri">
        <div class="container-image">
            <div class="row-image">
                @foreach ($foto as $img)
                    <div class="card-image">
                        <img src="{{ url('storage/galeri/' . $img->cover) }}">
                        <a href="{{ route('media.show', $img->slug) }}">
                            <h3>{{ $img->judul }} </h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
