<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        {
            //le plus souvent ce sera des tableaux en variables
                $posts = [
                    "mon premier titre","mon second titre"
                ];
                // $title= "mon super titre";
                //$title2 = "mon super second titre";
                //on peut passer les arguments par compact 
                //return view('article', compact('title'));
        
                //on peut passer les arguments avec with 
                //return view('article')->with('title', $title);
        
                //on peut passer les arguments avec un array
                /* return view('article', [
                    'title'     => $title,
                    'title2'    => $title2
                ]); */
                return view('articles', compact('posts'));
            }
    }

    public function show($id)
    {
        $posts = [
            1   => 'mon titre numéro 1',
            2   => "mon titre numéro 2"
        ];

        $post = $posts[$id] ?? 'pas de titre'; //ternaire pour vérifier si pas de $id alors affiche pas de titre
        return view('article', [
            'post'  => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function article()
    {
    //le plus souvent ce sera des tableaux en variables
        $posts = [
            "mon premier titre","mon second titre"
        ];
        // $title= "mon super titre";
        //$title2 = "mon super second titre";
        //on peut passer les arguments par compact 
        //return view('article', compact('title'));

        //on peut passer les arguments avec with 
        //return view('article')->with('title', $title);

        //on peut passer les arguments avec un array
        /* return view('article', [
            'title'     => $title,
            'title2'    => $title2
        ]); */
        return view('article', compact('posts'));
    }
}
