@extends('layouts.app')

@section('content')
    <h1>Order Details</h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart->products as $product)
                <tr>
                    <td>
                        <img src="{{ asset($product->images->first()->path) }}" width="100">
                        {{ $product->title }}
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>
                        <strong>
                            {{ $product->pivot->quantity * $product->price }}
                        </strong>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
