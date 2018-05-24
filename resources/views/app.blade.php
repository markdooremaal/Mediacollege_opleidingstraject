@include('partials.head')

<body>

@include('partials.header')

<section class="hero is-medium is-black">
    <div class="hero-body">
        <div class="container">
            @yield('content')
        </div>
    </div>
</section>

@include('partials.footer')

</body>

</html>