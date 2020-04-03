<?php

namespace Tests\Feature\Admin;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    /** @test */
    public function admin_visita_dashboard_admin(){
        $admin=factory(User::class)->create([
            'admin'=>true
        ]);

        $this->actingAS($admin)
        ->get(route('admin_dashboard'))
        ->assertStatus(200)
        ->assertSee('Admin Panel');

    }

    /** @test */
    public function usuarios_no_admin_novisita_dashboard(){
        $user=factory(User::class)->create([
            'admin'=>false
        ]);

        $this->actingAS($user)
        ->get(route('admin_dashboard'))
        ->assertStatus(403);
    }

    /** @test */
    public function usuarios_anonimos_no_visita_dashboard(){
        $this->get(route('admin_dashboard'))
        ->assertStatus(302)
        ->assertRedirect('login');
    }
}
