@extends('layout/app')

@section('content')

    <div class="container">

            <h3>Le Lunghe</h3>

            <div class="card-wrapper">

                @foreach($pasta as $tipologia)

                    @if($tipologia['tipo'] == 'lunga')
                            <div class="card">
                                <img src="{{ $tipologia['src']}}" alt="{{ $tipologia['titolo'] }}">
                                <div class="overlay">
                                    <a href="#">
                                        {{ $tipologia['titolo']}}
                                    </a>
                                </div>
                            </div>
                    @endif
                @endforeach

            </div>

            <h3>Le corte</h3>

            <div class="card-wrapper">

                @foreach($pasta as $tipologia)

                    @if($tipologia['tipo'] == 'corta')
                            <div class="card">
                                <img src="{{ $tipologia['src']}}" alt="{{ $tipologia['titolo'] }}">
                                <div class="overlay">
                                    <a href="#">
                                        {{ $tipologia['titolo']}}
                                    </a>
                                </div>
                            </div>
                    @endif
                @endforeach

            </div>
            <h3>Le cortissime</h3>

            <div class="card-wrapper">

                @foreach($pasta as $tipologia)

                    @if($tipologia['tipo'] == 'cortissima')
                            <div class="card">
                                <img src="{{ $tipologia['src']}}" alt="{{ $tipologia['titolo'] }}">
                                <div class="overlay">
                                    <a href="#">
                                        {{ $tipologia['titolo']}}
                                    </a>
                                </div>
                            </div>
                    @endif
                @endforeach

            </div>





    </div>


@endsection
