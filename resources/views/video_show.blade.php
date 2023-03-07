@extends('layouts.app')

@section('content')
    <div class="section-content">
        <div class="container-f mb-30">
            <div class="text-center margin-bottom-50">
                <h2 class="title-v2 title-center">Judul Album</h2>
            </div>
            <div class="row  margin-bottom-30">
                <div class="col-sm-3 sm-margin-bottom-30">
                    <div class="hidden">
                        {{ preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video->url, $video_link) }}
                    </div>
                    <iframe src="https://www.youtube.com/embed/{{ $video_link[1] }}" allowfullscreen
                        class="absolute top-0 left-0 w-full h-full rounded-xl" title="Video Profil"></iframe>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
