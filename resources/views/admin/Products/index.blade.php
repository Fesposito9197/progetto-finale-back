@extends('layouts.app')

@section('content')
        @if (count($products) > 0)
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
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ is_null($product->image) ? 'Nessuna Immagine' : '' }}</td>
                            <td>{{ $product->price }}€</td>
                            <td>{{ $product->is_visible ? 'Visibile' : 'Nascosto' }}</td>
                            <td><a href="{{ route('admin.products.show', $product) }}" class="btn btn-primary">Info</a></td>
                            <td><a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Modifica</a>
                            </td>
                            <td><button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#product-modal-{{ $product->id }}">Elimina</button></td>
                        </tr>

                        <div class="modal fade" id="product-modal-{{ $product->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare "{{ $product->name }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>
                                            <button type="submit" class="btn btn-primary">Conferma</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning mt-4">
                <strong>
                    <h5>La tua attività non ha nessun prodotto associato! Aggiungine uno per cominciare a vendere con
                        DeliveBoo!</h5>
                </strong>
            </div>
        @endif
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">Aggiungi Articoli in Vendita</a>
        <a href="{{route('admin.orders.index')}}" class="btn btn-secondary mx-5 my-1">Lista Ordini</a>
        <a href="{{ route('admin.companies.show', $product->company_id) }}" class="btn btn-outline-primary">La tua attività</a>
@endsection
