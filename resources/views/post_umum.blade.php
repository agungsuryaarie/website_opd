@extends('layouts.app')

@section('content')
    <section id="features" class="services section-bg">
        <div class="section-tittle">
            <h3>Features</h3>
        </div>
        <div class="row-card">
            @foreach ($post_umum as $post)
                <div class="cardpokersize">
                    <img src="{{ url('storage/berita/' . $post->foto) }}">
                    <h3><a href="{{ route('post.show', $post->slug) }}">{{ $post->judul }}</a></h3>
                    <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                        Daerah
                    </p>
                </div>
            @endforeach
            {{ $post_umum->links() }}
        </div>
    </section>
@endsection
