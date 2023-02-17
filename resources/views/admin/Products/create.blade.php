
@extends('layouts.app')

@section('content')
<div class="container">
        <h1 class="my-4">Aggiungi un prodotto</h1>
        <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="name" id="name" name="name" value="{{old('name')}}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input class="form-control @error('description') is-invalid @enderror" type="tel" placeholder="description" id="description" name="description" value="{{old('description')}}" required>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" placeholder="image" id="image" name="image" value="{{old('image')}}">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input class="form-control @error('price') is-invalid @enderror" type="number" placeholder="price" id="price" name="price" value="{{old('price')}}" required step="0.01">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">is_visible:</label>
                <select class="form-select" name="is_visible" id="is_visible">
                    <option value="">Senza valore</option>
                    <option value="1" >Visibile</option>
                    <option value="0" >Non visibile</option>
                </select>
                @error('is_visible')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Aggiungi</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection