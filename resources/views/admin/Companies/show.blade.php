@extends('layouts.app')

@section('content')
    <div class="py-5">
        <h1 class="my-4 d-inline">{{$company->company_name}}</h1>
        @if($company->typologies->isNotEmpty())
            <h3 class="my-4 d-inline">
                @foreach ($company->typologies as $typologies)
                    <h4 class="d-inline mx-3">({{$typologies->name}})</h4>
                @endforeach
            </h3>
        @endif
        <a href="{{route('admin.companies.edit',$company)}}" class="btn btn-warning mx-5">Modifica Info Attività</a>
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#company-modal-{{$company->id}}">Elimina Attività</button>
        <div class="my-4">
            <span class="me-4">Indirizzo: {{$company->address}}</span>
            <span class="me-4">Orario di Apertura: {{$company->opening_hours}}</span>
            <span class="me-4">Ordine Minimo: {{$company->minimum_order}}€</span>
            <span class="me-4">Partita IVA: {{$company->p_iva}}</span>
        </div>
        @if($company->image)
        <img src="{{$company->image}}" alt="{{$company->company_name}}" class="w-50 mb-4 ">
        @endif
        @if($company->products->isNotEmpty())
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
                    @foreach($company->products as $product)
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
        <div class="modal fade" id="company-modal-{{$company->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare "{{$company->company_name}}"?
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('admin.companies.destroy',$company)}}"    method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <button type="submit" class="btn btn-primary">Conferma</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
