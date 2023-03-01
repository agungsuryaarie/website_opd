@extends('layouts.app')

@section('content')
    <section id="features" class="services section-bg">
        <div class="section-tittle">
            <h3>Features</h3>
        </div>
        <div class="row-card">
            @foreach ($post_pemerintahan as $pp)
                <div class="cardpokersize">
                    <img src="{{ url('storage/berita/' . $pp->foto) }}">
                    <h3><a href="{{ route('post.show', $pp->slug) }}">{{ $pp->judul }}</a></h3>
                    <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                        Daerah
                    </p>
                </div>
            @endforeach
            {{ $post_pemerintahan->links() }}
        </div>
    </section>
@endsection
