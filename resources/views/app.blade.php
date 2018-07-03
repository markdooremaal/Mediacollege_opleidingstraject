@include('partials.head')

<body>

@include('partials.header')

@if(Request::is('/'))

    <section class="section is-black no-bottom-padding">
        <div class="container">
            <div class="content paragraph">
                <h2 class="subtitle">Over deze website</h2>
                <p>
                    De opleiding <a class="underline is-white-pink" href="https://www.ma-web.nl/opleidingen/opleidingsoverzicht/mediadeveloper/" target="_blank">Mediadevelopment</a></span> op het Mediacollege Amsterdam is in verschillende fases
                    opgesplitst.<br>
                    Op deze site hebben we de fases gesorteerd bij het juiste jaar. We hopen u op deze manier beter te
                    kunnen informeren over het opleidingstraject.<br>
                    Klik om te beginnen op een van de fases om te zien welke vakken er bij desbetreffende fase horen.
                </p>
            </div>
        </div>
    </section>

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
            <h2 class="title">@yield('title')</h2>
            <h3 class="subtitle">@yield('subtitle')</h3>
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
