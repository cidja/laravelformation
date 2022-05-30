<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        {
           
            //on utilise un model avec eloquent maintenant le 27.5.22
                $posts = Post::orderBy('id')->get(); //pour les ranger par ordre bien METTRE LE get() à la fin source: https://laravel.com/docs/9.x/eloquent#retrieving-models
                //pour voir ce que nous retourne $posts
                //dd($posts);
            //pour update des données source: https://laravel.com/docs/9.x/eloquent#retrieving-models
              /*  $posts = Post::find(1)->update([
                   'title'  => 'Mon premier post modifié'
               ]);
                
               
                suppression de l'id 12 par exemple
                $douze = Post::where('id',12)->delete(); 
                

            le plus souvent ce sera des tableaux en variables
                 $posts = [
                    "mon premier titre","mon second titre"
                ]; 
                $title= "mon super titre";
                $title2 = "mon super second titre";
                on peut passer les arguments par compact 
                return view('article', compact('title'));
        
                on peut passer les arguments avec with 
                return view('article')->with('title', $title);
        
                on peut passer les arguments avec un array
                 return view('article', [
                    'title'     => $title,
                    'title2'    => $title2
                ]); 
                */
                return view('articles', compact('posts'));
            }
    }

    public function show($id)
    {
        $post = Post::findOrFail($id); //findOrFail permet si pas d'id de renvoyer une 404

        //Eloquent avec where
        //$post = Post::where('title', '=', 'Quidem doloribus qui eum.')->firstOrFail(); //récupére uniquement la première itération le premier enregistrement
    
        /* $posts = [
            1   => 'mon titre numéro 1',
            2   => "mon titre numéro 2"
        ]; */

        //$post = $posts[$id] ?? 'pas de titre'; //ternaire pour vérifier si pas de $id alors affiche pas de titre
        return view('article', [
            'post'  => $post
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    { //l'objet Request va permettre d'indiquer à laravel de récupérer toute la requête récupére les informations passé en http https://youtu.be/rDsbDrMPMh0?t=1804
        //dd($request->title); //va afficher l'élément title de $request
        /* $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save(); */

        //pour que cette technique fonctionne il faut rajouter dans le model post.php  protected $fillable = ['title','content']; https://youtu.be/rDsbDrMPMh0?t=2383
        Post::create([
            'title' => $request->title,
            'content'   => $request->content
        ]);

        dd("post crée");

    }

    public function contact()
    {
        return view('contact');
    }

    
}
