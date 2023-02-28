@include('layouts.head')

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-header d-flex align-items-center justify-content-between">
            <div class="logo"><img src="" alt="" class="img-fluid"></div>

            @include('layouts.menu')

        </div>
    </header>

    {{-- Content --}}
    @yield('content')

    @include('layouts.footer')
