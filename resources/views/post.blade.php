@extends('layouts.app')

@section('content')
    <div class="post section-bg">
        <div class="section-tittle">
            <h3>{{ $title }}</h3>
        </div>
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
            {{ $post->links() }}
        </div>
    </div>
@endsection
