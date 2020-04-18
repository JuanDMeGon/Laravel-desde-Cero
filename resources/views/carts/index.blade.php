@extends('layouts.app')

@section('content')
    <h1>Your cart</h1>
    @if (!isset($cart) || $cart->products->isEmpty())
        <div class="alert alert-warning">
            Your cart is empty.
        </div>
    @else
        <a class="btn btn-success mb-3" href="{{ route('orders.create') }}">
            Start Order
        </a>
        <div class="row">
            @foreach ($cart->products as $product)
                <div class="col-3">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endempty
@endsection
