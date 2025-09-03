@extends('layouts.master')

@section('title', $product['name'] ?? 'Product Details')

@section('content')
<h1>{{ $product['name'] }}</h1>
@if($product['on_sale'])
    <p><strong>On Sale!</strong></p>
@endif
<p>{{ $product['description'] }}</p>
<p>Price: ${{ number_format($product['price'], 2) }}</p>
<a href="{{ route('shop.cart') }}">Add to cart</a>
@endsection
