@extends('layouts.app')

@section('content')
    <div class="section-content">
        <div class="section-tittle">
            <h3>{{ $title2 }}</h3>
        </div>
        <div class="container-card">
            <div class="row-card">
                @foreach ($post as $all)
                    <div class="cardpokersize">
                        <img src="{{ url('storage/berita/' . $all->foto) }}">
                        <h3><a href="{{ route('post.show', $all->slug) }}">{{ $all->judul }}</a></h3>
                        <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                            Daerah
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-center mb-30">
                {{ $post->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
