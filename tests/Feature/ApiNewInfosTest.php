<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\NewInfo;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use Laravel\Sanctum\Sanctum;
use Tests\Feature\Utils\UserConnexion;
use Tests\TestCase;

class ApiNewInfosTest extends TestCase
{
    // help :
    /*https://github.com/cnmichel/artichaut-backend/blob/feat/test/tests/Feature/ApiTest.php*/

    public int $count = 0;

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

        $this->count = count($response->json());
        //echo $this->count;
    }


    public function test_crud_on_api_news_admin()
    {
        UserConnexion::fakeAdmin();
        $newInfo = NewInfo::factory()->definition();

        // create
        $post = $this->postJson('/api/new', $newInfo);

        $post
            ->assertCreated()
            ->assertJson($newInfo);


        // prepare the futur
        $id = $post->original->id;


        // read
        $getResp = $this->getJson('/api/new/'.$id);

        $getResp
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
            $json->hasAll(['id','title', 'description', 'url_image', 'order'])
                ->whereAllType([
                    'title' => 'string',
                    'description' => 'string',
                    'url_image' => 'string',
                    'order' => 'number'
                ])
                ->etc()
            );

        // update
        $payload = [
            'title' => 'ACTU',
            'description' => 'this is a description',
            'url_image' => fake('fr_FR')->imageUrl(),
            'order' => 99
        ];

        $putResp = $this->putJson('/api/new/'.$id, $payload);

        $putResp
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
            $json->hasAll(['title', 'description', 'url_image', 'order'])
                ->where('id', $id)
                ->where('title', $payload['title'])
                ->where('description', $payload['description'])
                ->where('url_image', $payload['url_image'])
                ->where('order', $payload['order'])
                ->etc()
            );


        // delete
        $delResp = $this->delete('api/new/'.$id);

        $delResp
            ->assertStatus(204);




    }

    public function test_crud_on_api_news_fail_nonAdmin()
    {
        //UserConnexion::fakeUserCustomer();
    }

}
