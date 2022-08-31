<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    //use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_database()
    {
        //User::factory()->count(3)->create();

        $this->assertDatabaseCount('users', 3);

        $this->assertDatabaseHas('users', [
            'email' => 'jcartwright@example.net',
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'sally@example.com',
        ]);
    }
}
