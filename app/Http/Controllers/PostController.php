<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts =[
            1       => 'mon premier article',
            2       => 'mon second article',
        ];
        return view('home', [
            'posts' => $posts,
            'name'  => 'Christian'
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function test()
    {
        return view('helloWorld');
    }
}
