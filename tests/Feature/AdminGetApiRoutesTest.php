<?php

namespace Tests\Feature;

use Tests\Feature\Utils\UserConnexion;
use Tests\TestCase;

class AdminConnectedTest extends TestCase
{
  /**
   * Testing GET /user when connected as admin returning status code 200.
   *
   * @return void
   */
  public function test_get_user()
  {
    UserConnexion::fakeAdmin();

    $response = $this->get('/api/user');
    $response->assertOk();
  }
  /**
   * Testing GET /user/logout when connected as admin returning status code 200.
   *
   * @return void
   */
  public function test_get_user_logout()
  {
    UserConnexion::fakeAdmin();

    $response = $this->get('/api/user/logout');
    $response->assertStatus(200);
  }
}
