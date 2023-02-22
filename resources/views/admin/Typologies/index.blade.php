@extends('layouts.app')

@section('content')
    <h1>Lista tipologie</h1>
    <ul>
        @foreach ($typologies as $typology)
            <li>
                <a href="#" class="">{{ $typology->name }} <a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('admin.typologies.create') }}" class="btn btn-success">Aggiungi tipologia</a>
    <a href="{{ route('admin.companies.show', Auth::user()->company) }}" class="btn btn-outline-primary">La tua attività</a>
@endsection
