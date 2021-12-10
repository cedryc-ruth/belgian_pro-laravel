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
    <li>{{ $category->nom }}</li>
@endforeach
</ul>

@endsection

@section('script')
<script>
    console.log('JS OK');
</script>
@endsection