@extends('layouts.main')

@section('title','Affichage d\'une catégorie')

@section('style')
    @parent

    <style>
        label { font-weight: bold; }
    </style>
@endsection

@section('content')
<h1>Modification de la catégorie : {{ $category->nom }}</h1>

<form action="{{ route('categories.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    
    <div>
        <label>Nom :</label>
        <input type="text" name="nom" value={{ $category->nom }}>
    @error('nom')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <button>Modifier</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection