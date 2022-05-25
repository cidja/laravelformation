@extends('layouts.app') {{-- on étend layouts.app --}}
@section('content')
     Bonjour {{ $name }}
    <h2>Voici les articles</h2>
@foreach ($posts as $post)
    <h3>{{ $post }}</h3>
    
@endforeach

@endsection