<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PublicGetApiRoutesTest extends TestCase
{
    /**
     * Testing GET /advantages returning status code 200.
     *
     * @return void
     */
    public function test_get_advantages()
    {
        $response = $this->get('/api/advantages');

        $response->assertOk();
    }

    /**
     * Testing GET /footers returning status code 200.
     * 
     * @return void
     */
    public function test_get_footers()
    {
        $response = $this->get('/api/footers');

        $response->assertOk();
    }

    /**
     * Testing GET /hero returning status code 200.
     * 
     * @return void
     */
    public function test_get_hero()
    {
        $response = $this->get('/api/hero');

        $response->assertOk();
    }

    /**
     * Testing GET /links returning status code 200.
     * 
     * @return void
     */
    public function test_get_links()
    {
        $response = $this->get('/api/links');

        $response->assertOk();
    }

    /**
     * Testing GET /news returning status code 200.
     * 
     * @return void
     */
    public function test_get_news()
    {
        $response = $this->get('/api/news');

        $response->assertOk();
    }

    /**
     * Testing GET /offers returning status code 200.
     * 
     * @return void
     */
    public function test_get_offers()
    {
        $response = $this->get('/api/offers');

        $response->assertOk();
    }

    /**
     * Testing GET /reviews returning status code 200.
     * 
     * @return void
     */
    public function test_get_reviews()
    {
        $response = $this->get('/api/reviews');

        $response->assertOk();
    }

    /**
     * Testing GET /room-types returning status code 200.
     * 
     * @return void
     */
    public function test_get_roomsTypes()
    {
        $response = $this->get('/api/room-types');

        $response->assertOk();
    }

    /**
     * Testing GET /sections returning status code 200.
     * 
     * @return void
     */
    public function test_get_sections()
    {
        $response = $this->get('/api/sections');

        $response->assertOk();
    }

    /**
     * Testing GET /video returning status code 200.
     * 
     * @return void
     */
    public function test_get_video()
    {
        $response = $this->get('/api/video');

        $response->assertOk();
    }
}
