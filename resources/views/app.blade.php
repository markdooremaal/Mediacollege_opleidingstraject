@include('partials.head')

<body>

@include('partials.header')

@if(Request::is('/'))

    <section class="hero is-medium is-black has-text-centered-mobile">
        <div class="hero-body">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </section>

@else

    <section class="section has-text-centered is-black">
        <div class="container">
            <h1 class="title">@yield('title')</h1>
            <h2 class="subtitle">Orientatie</h2>
        </div>
    </section>

@endif



@include('partials.footer')

</body>

</html>
