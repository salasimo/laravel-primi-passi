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
<div class="container">
    <div class="product">
    <img src="{{$prodotto["src"]}}" alt="{{$prodotto["titolo"]}}">
    <h1>{{$prodotto["titolo"]}}</h1>
    <p>{{$prodotto["descrizione"]}}</p>
    </div>
</div>

@endsection

@section('scripts')
    {{-- scripts.js --}}
@endsection
