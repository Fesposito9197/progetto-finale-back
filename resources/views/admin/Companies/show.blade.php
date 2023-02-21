@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="d-flex align-items-center my-4 justify-content-between">
            <h1 class=" d-inline">{{$company->company_name}}</h1>
            @if($company->typologies->isNotEmpty())
                <h3 class="my-4 d-inline">
                    @foreach ($company->typologies as $typologies)
                        <h4 class="d-inline mx-3">({{$typologies->name}})</h4>
                    @endforeach
                </h3>
            @endif
            <a href="{{route('admin.products.index')}}" class="btn btn-success mx-5 my-1">Mostra Articoli in Vendita</a>
            <a href="{{route('admin.companies.edit',$company)}}" class="btn btn-warning me-5 my-1">Modifica Info Attività</a>
            <button class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#company-modal-{{$company->id}}">Elimina Attività</button>
        </div>
        <div class="my-4">
            <span class="me-4">Indirizzo: {{$company->address}}</span>
            <span class="me-4">Orario di Apertura: {{$company->opening_hours}}</span>
            <span class="me-4">Ordine Minimo: {{$company->minimum_order}}€</span>
            <span class="me-4">Partita IVA: {{$company->p_iva}}</span>
        </div>
        @if($company->image)
            <img src="{{asset("storage/$company->image")}}" alt="{{$company->company_name}}" class="img-fluid mb-4 d-block">
        @endif
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
