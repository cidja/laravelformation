@extends('layouts.app')

@section('content')
<h1>Créer un nouveau post</h1>
@if ($errors->any()) {{-- variable crée automatiquement après la vérification dans le post controller --}}
    @foreach ($errors->all() as $error )
        <div class="text-red-600"> {{ $error }} </div>
        @endforeach
    
@endif
<form method="POST" action="{{ route('posts.store')}} " enctype="multipart/form-data"> {{-- enctype très important sinon pas d'envoi de fichier possible --}}
    @csrf {{-- création du token crsf obligatoire --}}
{{--<fieldset>
        <legend>Choose your monster's features:</legend>
    
        <div>
           <input type="checkbox" id="scales" name="scales"
                 checked>
          <label for="scales">Scales</label>
        </div>
    
        <div>
          <input type="checkbox" id="horns" name="horns">
          <label for="horns">Horns</label>
        </div>
    </fieldset>
--}}
    <input type="text" name="title" class="border-gray-600 border-2 block my-2">
    <textarea name="content" id="" cols="30" rows="10" class="border-gray-600 border-2 my-2"></textarea>
    
    <label for="avatar">Choose a profile picture:</label>

<input type="file" class="block"{{-- voir PostController ligne86 --}}
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"> 

    
    <button type="submit" class='bg-green-500'>Créer</button>
</form>
@endsection