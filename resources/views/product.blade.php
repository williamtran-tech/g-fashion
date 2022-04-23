@extends('product_layout')

@section('content')
    <h1>
        {!!$product->name!!}
    </h1>    
    <p>
        {{$product->category->name}}
    </p>
    <h2>
        {{$product->price}}
    </h2>

    <a href="/">Go back</a>
@endsection