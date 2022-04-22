@extends('product_layout')

@section('content')
    <h1>
        {!!$product->name!!}
    </h1>    
    <h2>
        {{$product->category}}
    </h2>
    <h2>
        {{$product->price}}
    </h2>

    <a href="/">Go back</a>
@endsection