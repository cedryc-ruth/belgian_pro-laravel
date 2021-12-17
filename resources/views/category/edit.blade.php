@extends('layouts.main')

@section('title','Affichage d\'une catégorie')

@section('style')
    @parent

    <style>
        label { font-weight: bold; }
    </style>
@endsection

@section('content')
@if(!$category->id)
<h1>Ajout d'une catégorie</h1>
@else
<h1>Modification de la catégorie : {{ $category->nom }}</h1>
@endif

<form action="{{ 
    ($category->id) ?
    route('categories.update', $category->id) 
    :
    route('categories.store')
}}" method="post">
    @csrf
    @if($category->id)
        @method('PUT')
    @endif

    <div>
        <label>Nom :</label>
        <input type="text" name="nom" value={{ $category->nom ?? '' }}>
    @error('nom')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    @if(!$category->id)
    <button>Ajouter</button>
    @else
    <button>Modifier</button>
    @endif
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