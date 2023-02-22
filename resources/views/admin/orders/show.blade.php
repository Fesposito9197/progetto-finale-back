@extends('layouts.app')
@section('content')
    <div>{{$order->name}}</div>
    <div>{{$order->total_price}} totale</div>
    @foreach($order->products as $product)
        <div>{{$product->name}}</div>
        <div>{{$product->price}}</div>
        <div>{{$order->products()->where('product_id', $product->id)->first()->pivot->quantity}}</div>
    @endforeach
    
@endsection