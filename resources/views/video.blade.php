@extends('layouts.app')
@section('content')
    <div class="section-content">
        <div class="container-f">
            <div class="row-image">
                @foreach ($video as $vid)
                    <div class="card-image">
                        {{ preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $vid->link, $match) }}
                        {{-- Video old {{ preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $vid->link, $matches) }} --}}
                        <iframe src="https://www.youtube.com/embed/{{ $match[1] }}" allowfullscreen
                            class="absolute top-0 left-0 w-full h-full rounded-xl" title="Video"></iframe>
                        <a href="">
                            <h3>{{ $vid->judul }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
