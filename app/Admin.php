<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    protected $primaryKey ='idAdmin';
	protected $fillable = [
        'nombre', 'correo', 'password',
    ];
     public function isAdmin(){
    	return true;
    }
}
