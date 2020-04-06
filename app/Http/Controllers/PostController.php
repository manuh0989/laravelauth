<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
		$postPrincipal  =Post::query()->principal();
		$postPublicados =Post::query()->publicado();

    	return view('post/index'
    		,compact('postPrincipal','postPublicados')
    	);
    }
}
