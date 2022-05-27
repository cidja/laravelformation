{{-- on récupére le layout commun à toutes les pages mis dans lyaouts --}}
@extends('layouts.app')

{{-- section sert à mettre uniquement ce quil est différent du yield('content') --}}
@section('content')
<h1>{{ $post }}</h1>
@endsection