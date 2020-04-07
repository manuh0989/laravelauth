<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{

	use SoftDeletes;

	protected $table      ="posts";
	protected $primaryKey ="idPost";
	protected $casts      =[
		'publicado'=>'boolean'
		,'principal'=>'boolean'
	];

	protected $guarded=[];

	public function isPublicado(){
		return $this->publicado === true ? 1 : 0;
	}

	public function isPrincipal(){
		return $this->principal === true ? 1 : 0;
	}


	public function encodeBase64Post($contenido){
        return base64_encode(htmlentities($contenido));
    }

    public function decodeBase64Post($contenido){
        return html_entity_decode(base64_decode($contenido),ENT_COMPAT);
    }

    public function readMoreContenido(){
		$this->contenido =$this->decodeBase64Post($this->contenido);
		$this->contenido =substr(strip_tags($this->contenido), 0, 500);

    	return $this->contenido;
    }

	public function scopePrincipal($query){
		$query
		->where('principal',true)
		->where('publicado',true);
	}

	public function scopePublicado($query){
		$query->where('publicado',true);
	}
}
