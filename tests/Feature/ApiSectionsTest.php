<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ApiSectionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_api_sections_returns_a_list_of_8_elements()
    {
        $response = $this->get('/api/sections');

        $response
            ->assertStatus(200)
            ->assertJsonIsArray()
            ->assertJsonCount(8);
    }

    public function test_api_sections_first_element_returned_is_hero()
    {
        $response = $this->getJson('/api/sections');

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
        $response = $this->postJson('/api/sections', ['name'=>'tartempion']);

        $response->assertStatus(405);
    }


    public function test_api_section_returns_error_on_put()
    {
        $response = $this->putJson('/api/sections', ['name'=>'tartempion']);

        $response->assertStatus(405);
    }


    public function test_api_section_returns_error_on_delete()
    {
        $response = $this->delete('/api/sections');

        $response->assertStatus(405);
    }
}
