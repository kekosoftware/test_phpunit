<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_view_contains_Taylor()
    {
        $response = $this->get('/view-test');

        $response->assertStatus(200);
        $response->assertSee('Taylor');
        $response->assertSee('<p>The name is Taylor.</p>', false);

    }
}
