@extends('layouts.front')

@section('content')
    @foreach($products as $product)
        <div class="card">
            @if($product->photos->count())
                <img src="{{$product->photos->first()->image}}" alt="" class="card-img-top">
            @endif
            <div class="card-body">
                <h2 class="card-type">{{$product->name}}</h2>
                <p class="card-text">{{$product->description}}</p>
            </div>
        </div>
    @endforeach

@endsection
