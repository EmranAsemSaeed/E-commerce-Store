@extends('layouts.master')

@section('title', 'Products')

@section('content')
<h1>Products</h1>

@unless(count($products))
    <p>No products currently available.</p>
@else
    <ul>
        @foreach($products as $product)
            <li>
                <strong>#{{ $loop->index }} - {{ $product['name'] }}</strong>
                @if($loop->first)
                    <span>(Featured)</span>
                @endif

                @if($product['on_sale'])
                    <span class="badge">Sale</span>
                @else
                    <span class="badge muted">Regular</span>
                @endif

                <p>{{ $product['description'] }}</p>
                <p>Price: ${{ number_format($product['price'], 2) }}</p>
                <a href="{{ route('shop.productDetails', ['id' => $loop->index]) }}">View</a>
            </li>
        @endforeach
    </ul>
@endunless
@endsection
