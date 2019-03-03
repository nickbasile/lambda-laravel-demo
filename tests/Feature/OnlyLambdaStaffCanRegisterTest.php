<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OnlyLambdaStaffCanRegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_lambda_staff_can_register()
    {
        $user = [
            'name' => 'Steve',
            'email' => 'steve@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post('register', $user)
            ->assertSessionHasErrors('email');

        $user = [
            'name' => 'Steve',
            'email' => 'lambdaschool.com@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post('register', $user)
            ->assertSessionHasErrors('email');

        $user = [
            'name' => 'Steve',
            'email' => 'steve@lambdaschool.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post('register', $user)
            ->assertRedirect('/admin');
    }
}
