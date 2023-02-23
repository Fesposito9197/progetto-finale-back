@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <h1 class="m-3">{{$order->id}}</h1>
            <div class="row align-items-center">
                <div class="col m-3 py-3">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Nome:</th>
                                <td>{{$order->name}}</td>
                            </tr>  
                            <tr>
                                <th scope="row">Telefono:</th>
                                <td>{{$order->telephone}}</td>
                            </tr>  
                            <tr>
                                <th scope="row">Email:</th>
                                <td>{{$order->email}}</td>
                            </tr>  
                            <tr>
                                <th scope="row">Indirizzo:</th>
                                <td>{{$order->address}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Prodotti:</th>
                                <td>
                                    @foreach ($order->products as $product)
                                    <div>{{$product->name}}</div>
                                    <div>{{$product->price}}€</div>
                                    <div>{{$order->products()->where('product_id', $product->id)->first()->pivot->quantity}}</div>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Totale:</th>
                                <td>{{$order->total_price}}€</td>
                            </tr>  
                            <tr>
                                <th scope="row">Data:</th>
                                <td>{{$order->created_at}}</td>
                            </tr>  
                        </tbody>
                      </table>
                </div>
            </div>
        </div>    
    </div> 
@endsection