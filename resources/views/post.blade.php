@extends('layouts.app')

@section('content')
    <section id="features" class="services section-bg">
        <div class="section-tittle">
            <h3>Features</h3>
        </div>
        <div class="row-card">
            @foreach ($post as $all)
                <div class="cardpokersize">
                    {{-- <img src="{{ url('storage/berita/' . $b->foto) }}"> --}}
                    <img src="{{ url('front/img/2.jpeg') }}">
                    <h3><a href="{{ route('post.show', $all->slug) }}">{{ $all->judul }}</a></h3>
                    <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                        Daerah
                    </p>
                </div>
            @endforeach
            {{ $post->links() }}
        </div>
    </section>
@endsection
