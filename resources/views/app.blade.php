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
            <h2 class="subtitle">@yield('subtitle')</h2>
        </div>
    </section>

    <section class="hero is-black has-text-centered-mobile">
        <div class="hero-body">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth">
                <div class="container">
                    <ul>
                        <li class="prevnex prev">
                            <a href="@yield('previous')">
                            @if(Request::is('fase/1'))
                                Terug naar overzicht
                            @else
                                Vorige fase
                            @endif
                            </a>
                        </li>
                            @if(Request::is('fase/1') or Request::is('fase/5'))
                            @else
                                <li class="prevnex home">
                                    <a href="/"><strong>Terug naar overzicht</strong></a>
                                </li>
                            @endif
                        <li class="prevnex nex">
                            <a href="@yield('next')">
                            @if(Request::is('fase/5'))
                                Terug naar overzicht
                            @else
                                Volgende fase
                            @endif
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

@endif

@include('partials.footer')

</body>

</html>
