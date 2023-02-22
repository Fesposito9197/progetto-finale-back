@extends('layouts.app')

@section('content')
    <ul>
        @if(count($userOrders) > 0)
            <h3 class="my-4">Lista Ordini</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Totale</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userOrders as $order)
                        <tr>
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{$order->name}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->telephone}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->total_price}}€</td>
                            <td><a href="{{route('admin.orders.show',$order)}}" class="btn btn-primary">Info</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('admin.products.index')}}" class="btn btn-secondary">I tuoi articoli</a>
            <a href="{{route('admin.companies.show', Auth::user()->company)}}" class="btn btn-outline-primary">La tua attività</a>
        @else
            <div class="alert alert-warning mt-4">
                <strong>
                    <h5>La tua attività non ha nessun ordine associato!</h5>
                </strong>
            </div>
        @endif
    </ul>
@endsection