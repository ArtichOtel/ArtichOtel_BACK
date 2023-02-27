<?php

namespace Tests\Feature;

use App\Models\Link;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\Feature\Utils\UserConnexion;
use Tests\TestCase;

class TestUserForbbidenApiRoutes extends TestCase
{

  /**
   * Testing GET /user when connected as admin returning status code 200.
   *
   * @return void
   */
  public function test_crud_from_links_api()
  {


    UserConnexion::fakeUserCustomer();

    // Create a link 

    $postLink = $this->postJson('/api/link', [
      'text' => 'postTest',
      'url' => 'http://google.com',
      'icon' => 'services'
    ]);

    $postLink->assertStatus(403);


    // Create a variable $id for stocking id of link

    $id = $postLink->original->id;

    $get = $this->getJson('/api/link/' . $id);
    $get->assertStatus(200);

    // Display a link

    $get->assertJson(
      fn (AssertableJson $json) => $json->hasAll(['text', 'url', 'icon'])
        ->whereAllType([
          'text' => 'string',
          'url' => 'string',
          'icon' => 'string'
        ])
        ->etc()
    );

    // Modify a link

    $putLink = $this->putJson('/api/link/' . $id, [
      'text' => 'Changement',
      'url' => 'https://google.fr',
      'icon' => 'advantages'
    ]);

    $putLink->assertStatus(200);


    // Delete a link

    $deleteLink = $this->deleteJson('/api/link/' . $id);
    $deleteLink->assertStatus(200);

    // Verify if link is delete

    $getDeleteLink = $this->getJson('/api/link/' . $id);
    $getDeleteLink->assertStatus(404);
  }
}
