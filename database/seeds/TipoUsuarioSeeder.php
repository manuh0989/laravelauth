<?php

use Illuminate\Database\Seeder;
use App\TipoUsuario;
class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	TipoUsuario::create([
    		"tipoUsuario"=>"Cliente"
    	]);
    	TipoUsuario::create([
    		"tipoUsuario"=>"Vendedor"
    	]);
    }
}
