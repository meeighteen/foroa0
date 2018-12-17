<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class PagesController extends Controller
{
    public function start(){
    	return view('welcome');
    }

    public function miperfil(){
    	return view('miperfil');
    }

    public function feed(){
	    $posts=[
			"post 1",
			"post 2",
			"post 3"
		];

		return view('feed', compact('posts'));
    }

    public function postear(){
        return view('postear');
    }

    public function publicar(\App\Http\Requests\CreatePostRequest $request){
        $data=$request->all();
        return back()
            //redirect()->route('postear') redirecciona a una ruta
            //back() te regresa a la ruta anterior
            ->with('info','Tu Objeto ha sido publicado correctamente');

    }
}
