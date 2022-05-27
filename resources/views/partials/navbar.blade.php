<ul>
    {{-- foncitonne avec les names rentrer dans web.php route avantage pas besoin de revenir vers tout si changement pour raison seo par exemple --}}
    <li><a href="{{ route('welcome') }}">l'acceuil</a></li>
    <li><a href="{{ route('posts.create') }}">Créer un post</a></li>
    <li><a href=" {{ route('contact') }}">Page de contact</a></li>
</ul>