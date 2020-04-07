<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CrearPostRequest;
use Illuminate\Http\Request;
use App\Post;
class DashboardController extends Controller
{
    public function index(){
    	return view('/admin/dashboard');
    }

    public function eventos(){
    	return view('/admin/eventos/index');
    }

    public function posts(){
    	return view('/admin/posts/index');
    }

    public function crearPost(){
    	return view('admin/posts/crear');
    }
    
    public function storePost(CrearPostRequest $request){

        $request->crearPost();

        return redirect()->route('post.crear')
        ->with('alert','Post creado exitosamente');
    }

    public function mostrarPost(){
        $posts=Post::orderby('created_at','ASC')
        ->paginate(10);
        return view('admin/posts/mostrar'
            ,compact('posts')
        );
    }
}


