{{-- on récupére le layout commun à toutes les pages mis dans lyaouts --}}
@extends('layouts.app')

{{-- section sert à mettre uniquement ce quil est différent du yield('content') --}}
@section('content')
<h1>{{ $post->content }}</h1>

<hr>
    {{-- forelse sert comme foreach sauf que forelse permet de mettre une condition si rien source: https://www.youtube.com/watch?v=RoGjgghMHjU --}}
    @forelse($post->comments as $comment )
    <div> {{ $comment->content }} | crée le {{ $comment->created_at->locale('fr')->isoFormat('dddd, Do MMMM YYYY à h:mm'); }}</div>    
    @empty
    <div>Aucun commentaire pour ce post</div>
    @endforelse
    <hr>
    @forelse ($post->tags as $tag )
            <span> {{ $tag->name }} </span>
    @empty
        <div>Aucun tag pour cet article</div>
    @endforelse 
        
@endsection