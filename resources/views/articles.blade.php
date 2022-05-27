{{-- on récupére le layout commun à toutes les pages mis dans lyaouts --}}
@extends('layouts.app')

{{-- section sert à mettre uniquement ce quil est différent du yield('content') --}}
@section('content')
<h1>Liste des articles</h1>

    {{-- Avec @if on test si $post avec eloquent et count existe donc si il y a des posts alors on les affiche sinon @else on ne les affichent pas --}}   
    @if ($posts->count())
    {{-- permet de parcourir un array --}}
    @foreach ($posts as $post)
    {{-- $post->title affiche uniquement la clé title --}}
        <h3><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3> 
    @endforeach    
    @else
        <span> Aucun post en base de données </span>
    @endif
@endsection
