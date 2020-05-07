@php
    $prodotti = config("products");
    $prodotto = $prodotti[$id];
@endphp

@extends('layouts.layout')
@section('css')
    {{-- css prodotti --}}
@endsection

@section('titolo')
   La Molisana | {{$prodotto["titolo"]}}
@endsection

@section('mainContent')
<div class="container-prodotto">
    <div class="product">
        <h1>{{$prodotto["titolo"]}}</h1>
        <img src="{{$prodotto["src-h"]}}" alt="{{$prodotto["titolo"]}}">
        <img src="{{$prodotto["src-p"]}}" alt="">
        <p>{!!$prodotto["descrizione"]!!}</p>
    </div>
</div>

@endsection

@section('scripts')
    {{-- scripts.js --}}
@endsection
