@extends('layouts.app')

@section('content')
    <h1 class="my-3">Lista aziende</h1>
    <div class="container grid">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($companies as $company)          
                <div class="card" style="width: 18rem; margin-left: 10px">
                        <img src="{{$company->image}}" class="card-img-top my-2" alt="{{ $company->company_name }}" style="height: 150px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $company->company_name }}</h5>
                        @if ($company->typologies->isNotEmpty())
                            @foreach ($company->typologies as $typology)
                            <a href="#" class="badge bg-secondary text-decoration-none text-light me-2">{{$typology->name}}</a>    
                            @endforeach
                            @endif
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $company->telephone }}</li>
                        <li class="list-group-item">{{ $company->address }}</li>
                        <li class="list-group-item">{{ $company->opening_hours }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('admin.orders.create')}}" class="btn btn-primary card-link">Ordina</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection