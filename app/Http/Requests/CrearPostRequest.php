<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use App\Post;

class CrearPostRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'     =>['required','unique:posts,titulo']
            ,'contenido' =>'required'
        ];
    }

    public function crearPost(){
        
         DB::transaction(function (){
            $post=Post::create([
                'titulo'     =>$this->titulo
                ,'contenido' =>Post::encodeBase64Post($this->contenido)
                ,'idUsuario' =>auth()->user()->idAdmin
                ,'principal' =>$this->isPrincipal()
            ]);
             $post->save();
        });
    }

    protected function encodeBase64Post(){
        return base64_encode(htmlentities($this->contenido));
    }

    protected function isPrincipal(){
        return (boolean)$this->principal == NULL ? 0 : 1;
    }
}
