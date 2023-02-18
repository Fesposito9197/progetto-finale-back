@extends('layouts.app')

@section('content')
    <ul>
        @if($products)
            <h3 class="my-4">Articoli in vendita</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Visibilità</th>
                        <th scope="col">Dettagli</th>
                        <th scope="col">Modifica</th>
                        <th scope="col">Elimina</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{is_null($product->image) ? "Nessuna Immagine" : ""}}</td>
                            <td>{{$product->price}}€</td>
                            <td>{{$product->is_visible ? "Visibile" : "Nascosto"}}</td>
                            <td><a href="{{route('admin.products.show',$product)}}" class="btn btn-primary">Info</a></td>
                            <td><a href="{{route('admin.products.edit',$product)}}" class="btn btn-warning">Modifica</a></td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a href="{{route('admin.products.create')}}" class="btn btn-success">Aggiungi Articoli in Vendita</a>
    </ul>
@endsection