@extends('master_layout')
@extends('product_layout')

@section('content')
    @foreach ($products as $product)
        <article>
            <h1>
                <a href="/products/{{$product->slug}}">
                    {!! $product->name !!}
                </a>
            </h1>
            <p>{{$product->price}}</p>
        </article>
    @endforeach
@endsection