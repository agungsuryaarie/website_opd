@extends('layouts.app')
@section('content')
    <div class="section-content">
        <div class="container-f">
            <div class="row-image">
                @foreach ($video as $vid)
                    <div class="card-image">
                        {{ preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $vid->link, $matches) }}
                        <img src="">
                        <a href="">
                            <h3>{{ $vid->judul }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
