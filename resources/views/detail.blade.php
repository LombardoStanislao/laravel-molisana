@extends('layout/app')

@section('page-title', 'La Molisana: pasta semole e farine di qualità')

@section('content')
  <div class="pasta-title">
    <div class="container ">
      <h2> {{ $pasta_selezionata['titolo'] }} </h2>
    </div>
  </div>

  <a class="prev-page" href="#">
    <i class="fas fa-long-arrow-alt-left"></i>
  </a>

  <a class="next-page" href="#">
    <i class="fas fa-long-arrow-alt-right"></i>
  </a>

  <div class="single-product-image">
    <img class="max-width" src="{{ $pasta_selezionata['src-h']}}" alt="">
  </div>
  <div class="product-packaging">
    <img class="max-width" src="{{ $pasta_selezionata['src-p']}}" alt="">
  </div>
  <div class="light-blue-background">

    <div class="container pasta-descriprion">
      <div class="clearfix">
        <div class="pasta-single-table border-bottom border-right">
          <img src="{{ asset('images/marchio-sito-test.png')}}" alt="La Molisana | Logo">
        </div>
        <div class="pasta-single-table border-bottom border-right">
          <p class="text-uppercase">grano decorticato a pietra trafilatura al bronzo</p>
        </div>
        <div class="pasta-single-table border-bottom">
          <img id="acqua-del-molise" src="https://www.lamolisana.it/wp-content/uploads/2017/05/marchio-matese-tab.png" alt="">
        </div>
      </div>
      <div class="pasta-table clearfix">
        <div class="pasta-single-table border-bottom border-right">
          <p>{{ $pasta_selezionata['titolo'] }}</p>
        </div>
        <div class="pasta-single-table border-bottom border-right">
          <p>
            <i class="far fa-clock"></i>
            <p class="text-uppercase" >tempi di cottura:</p>
            <span>{{$pasta_selezionata['cottura']}}</span>
          </p>
        </div>
        <div class="pasta-single-table border-bottom">
          <p>{{ $pasta_selezionata['peso']}}</p>
        </div>
      </div>
      <p>
          {!! $pasta_selezionata['descrizione'] !!}
      </p>
    </div>

  </div>





@endsection
