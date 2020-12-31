@extends('layout/app')

@section('page-title', 'I Prodotti | La Molisana')

@section('content')

    <main>
        <div class="container">

                <h3>Le Lunghe</h3>

                <div class="card-wrapper">

                    @foreach($pasta as $key => $tipologia)

                        @if($tipologia['tipo'] == 'lunga')
                                <div class="card">
                                    <img src="{{ $tipologia['src']}}" alt="{{ $tipologia['titolo'] }}">

                                      <div class="overlay">
                                          <a class="product-chosen"  href="{{ route('pagina-dettaglio', ['id' => $key]) }}">
                                              {{ $tipologia['titolo']}}
                                          </a>
                                      </div>


                                </div>
                        @endif
                    @endforeach

                </div>

                <h3>Le corte</h3>

                <div class="card-wrapper">

                    @foreach($pasta as $key => $tipologia)

                        @if($tipologia['tipo'] == 'corta')
                                <div class="card">
                                    <img src="{{ $tipologia['src']}}" alt="{{ $tipologia['titolo'] }}">

                                      <div class="overlay">
                                          <a class="product-chosen" href="{{ route('pagina-dettaglio', ['id' => $key]) }}">
                                              {{ $tipologia['titolo']}}
                                          </a>
                                      </div>

                                </div>
                        @endif
                    @endforeach

                </div>
                <h3>Le cortissime</h3>

                <div class="card-wrapper">

                    @foreach($pasta as $key => $tipologia)

                        @if($tipologia['tipo'] == 'cortissima')
                                <div class="card">
                                    <img src="{{ $tipologia['src']}}" alt="{{ $tipologia['titolo'] }}">

                                      <div class="overlay">
                                          <a class="product-chosen" href="{{ route('pagina-dettaglio', ['id' => $key]) }}">
                                              {{ $tipologia['titolo']}}
                                          </a>
                                      </div>


                                </div>
                        @endif
                    @endforeach

                </div>

        </div>

    </main>



@endsection
