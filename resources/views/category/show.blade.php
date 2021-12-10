@extends('layouts.main')

@section('style')
    @parent

    <style>
        h1 { font-family: Impact; }
    </style>
@endsection

@section('content')
<h1>{{ $category->nom }}</h1>

@endsection