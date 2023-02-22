@extends('layouts.app')
@section('content')
    <h1 class="my-4">Aggiungi un attività</h1>
    <form action="{{route('admin.companies.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="company_name" class="form-label">Nome*</label>
            <input class="form-control @error('company_name') is-invalid @enderror" type="text" placeholder="Inserisci il nome" id="company_name" name="company_name" value="{{old('company_name')}}" required>
            @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Telefono*</label>
            <input class="form-control @error('telephone') is-invalid @enderror" type="tel" placeholder="Inserisci un numero di telefono" id="telephone" name="telephone" value="{{old('telephone')}}" required>
            @error('telephone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="p_iva" class="form-label">Partita Iva*</label>
            <input class="form-control @error('p_iva') is-invalid @enderror" type="text" placeholder="Inserisci la P. Iva" id="p_iva" name="p_iva" value="{{old('p_iva')}}" required>
            @error('p_iva')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo*</label>
            <input class="form-control @error('address') is-invalid @enderror" type="text" placeholder="Inserisci l'indirizzo" id="address" name="address" value="{{old('address')}}" required>
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="opening_hours" class="form-label">Orari di apertura*</label>
            <input class="form-control @error('opening_hours') is-invalid @enderror" type="text" placeholder="Inserisci l'orario di apertura" id="opening_hours" name="opening_hours" value="{{old('opening_hours')}}" required>
            @error('opening_hours')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" placeholder="Inserisci un'immagine" id="image" name="image" value="{{old('image')}}">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="minimum_order" class="form-label">Ordine Minimo*</label>
            <input class="form-control @error('minimum_order') is-invalid @enderror" type="number" placeholder="Inserisci l'ordine minimo" id="minimum_order" name="minimum_order" value="{{old('minimum_order')}}" step="0.01" required>
            @error('minimum_order')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="mb-2">Tipologie*</div>
            @foreach ($typologies as $typology)
                <input type="checkbox" class="form-check-label" name="typologies[]" id="{{$typology->id}} {{ in_array( $typology->id, old('typologies', [])) ? 'checked' : '' }}" value="{{$typology->id}}">
                <label for="{{$typology->slug}}" class="form-check-label me-3">{{$typology->name}}</label>
            @endforeach
            @error('typologies')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Aggiungi</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>
    </form>
@endsection
