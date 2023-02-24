<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ApiNewInfosTest extends TestCase
{
    // help :
    /*https://github.com/cnmichel/artichaut-backend/blob/feat/test/tests/Feature/ApiTest.php*/

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_api_news_returns_list_of_news()
    {
        $response = $this->get('/api/news');

        $response
            ->assertStatus(200)
            ->assertJsonIsArray();
    }


    public function test_crud_on_api_news_admin()
    {
        UserConnexion::
        Sanctum::actingAs($admin);



    }

    public function test_crud_on_api_news_nonAdmin()
    {
        $any = User::factory()->create();
        Sanctum::actingAs($any);



    }

    public function test_api_new_get_by_id()
    {
        $id = 1;
        $response = $this->getJson('/api/new/1');

        $response
            ->assertJson(fn (AssertableJson $json) =>
                $json->first(fn ($json) =>
                    $json
                        ->where('id', 1)
                        ->where('title', 'Hero')
                        ->where('uri', '/hero')
                        ->etc()
                    )
                );
    }

    public function test_api_section_returns_error_on_post()
    {
        $response = $this->postJson('/api/new', ['name'=>'tartempion']);

        $response->assertStatus(405);
    }


    public function test_api_section_returns_error_on_put()
    {
        $response = $this->putJson('/api/new', ['name'=>'tartempion']);

        $response->assertStatus(405);
    }


    public function test_api_section_returns_error_on_delete()
    {
        $response = $this->delete('/api/new');

        $response->assertStatus(405);
    }
}
