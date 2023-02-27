<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Utils\UserConnexion;
use Tests\TestCase;

class FormUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_crud_from_customer_api()
    {
        UserConnexion::fakeUserCustomer();

        // Create a account

        $postUserCustomer = $this->postJson('/api/user/', [
            'email' => 'test@example.com',
            'password' => 'toto',
            'pseudo' => 'tototo'
        ]);

        $postUserCustomer->assertStatus(201);

        $id = $postUserCustomer->original->id;

        $getUserCustomer = $this->getJson('/api/user/' . $id);

        $getUserCustomer->assertStatus(200);
    }
}
