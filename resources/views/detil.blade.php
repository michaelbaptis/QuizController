@extends('head')
@section('title','Detail PokeList')
@section('description','Detail From Poke List')
@section('keywords','Detail Poke')
@section('content')

<ul class="nav nav-underline fixed-center" >
    <li class="nav-item">
      <a class="nav-link" href="/" style="color: rgb(54, 51, 51)"><b>Poke List</b></a>
    </li>
  </ul>
    <div class="container mt-5" >
        <div class="row" >
            @if($product['rarity']==1)
            <div class="card" style="background-color: #c0c0c0">
                <div class="card-body" style="background-color: #c0c0c0">
                  <h5 class="card-title">PokeName : {{$product['productName']}}</h5>
                  <p class="card-text" >Rarity : {{$product['productDesc']}}</p>
                </div>
                <ul class="list-group list-group-flush" >
                  <li class="list-group-item" style="background-color: #c0c0c0">Rarity : Rare</li>
                </ul>
              </div>
            @elseif($product['rarity']==2)
            <div class="card" style="background-color: gold">
                <div class="card-body" style="background-color: gold">
                  <h5 class="card-title">PokeName : {{$product['productName']}}</h5>
                  <p class="card-text" >Rarity : {{$product['productDesc']}}</p>
                </div>
                <ul class="list-group list-group-flush" >
                  <li class="list-group-item" style="background-color: gold">Rarity : Super Rare</li>
                </ul>
              </div>
            @else
            <div class="card" style="background-color: red">
                <div class="card-body" style="background-color: golredd">
                  <h5 class="card-title">PokeName : {{$product['productName']}}</h5>
                  <p class="card-text" >Rarity : {{$product['productDesc']}}</p>
                </div>
                <ul class="list-group list-group-flush" >
                  <li class="list-group-item" style="background-color: red">Rarity : Super Super Rare</li>
                </ul>
              </div>
            @endif
        </div>
        <br>
        <a href="/" class="btn btn-dark">Back To Poke List</a>
    </div>
@endsection
