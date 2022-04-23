@extends('product_layout')

@section('content')
    <h1>
        {!!$product->name!!}
    </h1>    
    <p>
        <a href="/categories/{{$product->category->slug}}">{{$product->category->name}}</a>
    </p>
    <h2>
        {{$product->price}}
    </h2>

    <a href="/">Go back</a>
@endsection