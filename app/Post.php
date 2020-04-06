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


	public function scopePrincipal($query){
		$query
		->where('principal',true)
		->where('publicado',true);
	}

	public function scopePublicado($query){
		$query->where('publicado',true);
	}
}
