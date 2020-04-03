<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    
    /** @test */
    public function muestra_pagina_dashboard_a_usuarios_autenticados(){

        $user=factory(User::class)->create();
        $this->actingAs($user)
        ->get(route('home'))
        ->assertSee('Dashboard')
        ->assertStatus(200);
    }
    /** @test */
    public function usuarioInvitado_entra_dashboard(){

        $this->get(route('home'))
        ->assertStatus(302)
        ->assertRedirect('login');
    }
}
