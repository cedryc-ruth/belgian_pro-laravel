@extends('layouts.main')

@section('title','Liste des catégories')

@section('style')
    @parent

    <style>
        h1 { font-family: Impact; }
    </style>
@endsection

@section('content')
<h1>Liste des catégories</h1>

<ul>
@foreach($categories as $category)
    <li>{{ $category->nom }}
        <a href="{{ route('categories.show',['id'=>$category->id]) }}">Voir</a>
        <a href="{{ route('categories.edit',['id'=>$category->id]) }}">Modifier</a>
        <form action="{{ route('categories.destroy',['id'=>$category->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button>Supprimer</button>
        </form>
    </li>
@endforeach
</ul>
<p><a href="{{ route('categories.create') }}">Ajouter une catégorie</a></p>
@endsection

@section('script')
<script>
    console.log('JS OK');
</script>
@endsection