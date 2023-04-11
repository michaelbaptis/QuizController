@extends('head')

@section('title','Poke List')

@section('description','Page Product')
@section('keyword','All Product')
@section('content')
    <div class="container">
        <h1 class="text-center mt-5">
            <b>Choose Your Pokemon!</b>
        </h1>
        <div class="row mt-5 mb-5">
        @foreach ($products as $prod)
            @if($prod['rarity']==1)
            <div class="card" style="width: 35rem;">
                <div class="card-body"align='center'>
                    <div style="background-color: #746666" class="m-2 p-4 rounded">
                        <a href="detil/{{$prod['id']}}" class="text-decoration-none">
                            <h5 class="card-title" style="color: antiquewhite" >{{$prod['productName']}}</h5>
                            <p style="color: antiquewhite">

                                {{$prod['productDesc']}}
                            </p>
                            <p class="card-text" style="color: antiquewhite">
                                <b>Poke Level: R!</b>
                            </p>
                        </a>
                    </div>
                </div>
              </div>
            @elseif($prod['rarity']==2)
              <div class="card" style="width: 35rem;">
                <div class="card-body" align='center'>
                    <div style="background-color: rgb(170, 148, 22)" class="mt-2 p-4 rounded">
                        <a href="detil/{{$prod['id']}}" class="text-decoration-none">
                            <h5 class="card-title" style="color: antiquewhite">{{$prod['productName']}}</h5>
                            <p style="color: antiquewhite">
                                {{$prod['productDesc']}}
                            </p>
                            <p class="card-text" style="color: antiquewhite">
                                <b>Poke Level: SR!</b>
                            </p>
                        </a>
                    </div>
                </div>
              </div>
            @else
            <div class="card" style="width: 35rem;">
                <div class="card-body" align='center'>
                    <div style="background-color: rgb(141, 35, 35)" class="mt-2 p-4 rounded">
                        <a href="detil/{{$prod['id']}}" class="text-decoration-none">
                            <h5 class="card-title" style="color: antiquewhite">{{$prod['productName']}}</h5>
                            <p style="color: antiquewhite">
                                {{$prod['productDesc']}}
                            </p>
                            <p class="card-text" style="color: antiquewhite">
                                <b>Poke Level: SSR!!!</b>
                            </p>
                        </a>
                    </div>
                </div>
              </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection

