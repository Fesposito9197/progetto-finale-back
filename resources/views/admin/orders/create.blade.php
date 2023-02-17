@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>Aggiungi un ordine</h1>
            <div class="mt-4">
                <form action="{{ route('admin.orders.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="total_price" class="form-label">Prezzo Totale</label>
                        <input step="0.01" type="number" class="form-control" id="total_price" name="total_price"
                            value="{{ old('total_price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Numero di telefono</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone"
                            value="{{ old('telephone') }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ old('address') }}">
                    </div>
                    <div class="mb-3">
                        <div class="mb-2">prodotti</div>
                        @foreach ($products as $product)
                            <input type="checkbox" class="form-check-label" name="products[]"
                                id="{{ $product->id }} {{ in_array($product->id, old('products', [])) ? 'checked' : '' }}"
                                value="{{ $product->id }}">
                            <label for="{{ $product->slug }}" class="form-check-label me-3">{{ $product->name }}</label>
                        @endforeach

                    </div>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
