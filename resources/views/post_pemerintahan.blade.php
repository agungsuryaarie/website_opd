@extends('layouts.app')

@section('content')
    <div class="post section-bg">
        <div class="section-tittle">
            <h3>{{ $title }}</h3>
        </div>
        <div class="row-card">
            @foreach ($post_pemerintahan as $pp)
                <div class="cardpokersize">
                    <img src="{{ url('storage/berita/' . $pp->foto) }}">
                    <ul class="blog-info">
                        <li><i class="bi bi-calendar"></i> {{ $pp->tanggal }}</li>
                        <li><i class="bi bi-clock"></i> {{ $pp->jam }} WIB</li>
                    </ul>
                    <h3><a href="{{ route('post.show', $pp->slug) }}">{{ $pp->judul }}</a></h3>
                    <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                        Daerah
                    </p>
                </div>
            @endforeach
            {{ $post_pemerintahan->links() }}
        </div>
    </div>
@endsection
