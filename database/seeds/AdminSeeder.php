<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'nombre'=>'Ignacio Manuel Sanchez Neri'
        	,'correo'=>'manuh0989@gmail.com'
        	,'password'=> Hash::make('0989nacho')

        ]);
    }
}
