@extends('layout/app')

@section('page-title', 'I Prodotti | La Molisana')

@section('content')

    <main>
        <div class="container">

          @foreach ($formati_pasta as $tipo => $pasta)

                <h3>{{ $tipo }}</h3>

                <div class="card-wrapper">

                    @foreach($pasta as $key => $tipologia)
                                <div class="card">
                                    <img src="{{ $tipologia['src']}}" alt="{{ $tipologia['titolo'] }}">

                                      <div class="overlay">
                                          <a class="product-chosen"  href="{{ route('pagina-dettaglio', ['id' => $key]) }}">
                                              {{ $tipologia['titolo']}}
                                          </a>
                                      </div>
                                </div>
                    @endforeach

                </div>

          @endforeach

        </div>

    </main>



@endsection
