{{-- on récupére le layout commun à toutes les pages mis dans lyaouts --}}
@extends('layouts.app')

{{-- section sert à mettre uniquement ce quil est différent du yield('content') --}}
@section('content')
<h1>Liste des articles</h1>
    {{-- permet de parcourir un array --}}
    @foreach ($posts as $post)
        <h3>{{ $post }}</h3> 
    @endforeach    
@endsection
