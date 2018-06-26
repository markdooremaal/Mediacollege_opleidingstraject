@extends('app')

@section('title')
    Fase 4
@endsection

@section('subtitle')
    Stage
@endsection

@section('previous')
    /fase/3
@endsection

@section('next')
    /fase/5
@endsection

@section('content')

    <h1 class="title is-pink">Periode 2.3 t/m 3.2</h1>

    <div class="box">
        <article class="media">
            <div class="media-content">
                <div class="content">
                    <strong>Over fase 4</strong>
                    <p>
                        Fase 4 loopt deels samen met fase 3. Je loopt in deze fase 4 dagen per week stage. In deze 4 dagen maak je 32 uur.
                        <br>Op vrijdag ben je op school om te werken aan de vakken van fase 3.
                    </p>

                </div>
                <nav class="level is-mobile">
                    <div class="level-left">
                        <a class="level-item is-pink" aria-label="reply">
                            <span class="icon is-small">
                              <i class="fas fa-arrow-left" aria-hidden="true"></i>
                            </span>
                            <a href="/fase/3">Bekijk hier de vakken van fase 3</a>
                        </a>
                    </div>
                </nav>
            </div>
        </article>
    </div>

@endsection