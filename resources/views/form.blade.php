@extends('layouts.app')

@section('content')
<h1>Créer un nouveau post</h1>

<form method="POST" action="{{ route('posts.store')}} ">
    @csrf {{-- création du token crsf obligatoire --}}
    <input type="text" name="title" class="border-gray-600 border-2">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <button type="submit" class='bg-green-500'>Créer</button>
</form>
@endsection