@extends('layouts.app')

@section('content')
    <div class="post section-bg">
        <div class="section-tittle">
            <h3>{{ $title }}</h3>
        </div>
        <div class="row-card">
            @foreach ($post_dinas as $pd)
                <div class="cardpokersize">
                    <img src="{{ url('storage/berita/' . $pd->foto) }}">
                    <ul class="blog-info">
                        <li><i class="bi bi-calendar"></i> {{ $pd->tanggal }}</li>
                        <li><i class="bi bi-clock"></i> {{ $pd->jam }} WIB</li>
                    </ul>
                    <h3><a href="{{ route('post.show', $pd->slug) }}">{{ $pd->judul }}</a></h3>
                    <p>Input data perencanaan lima tahunan yang dilakukan oleh fungsi perencana pada Pemerintah
                        Daerah
                    </p>
                </div>
            @endforeach
            {{ $post_dinas->links() }}
        </div>
        </=>
    @endsection
