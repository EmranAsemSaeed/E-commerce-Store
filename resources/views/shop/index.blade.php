@extends('layouts.master')

@section('title', 'Welcome to My Store')

@section('content')
<section class="hero">
    <h1>Welcome to My Store</h1>
    <p>Shop the best items — template-based homepage content here.</p>
    <a href="{{ route('shop.products') }}" class="btn">Browse Products</a>
</section>
@endsection
