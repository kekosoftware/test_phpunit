<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Stock;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StockTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
      $stock = new Stock(['name'=>'Tesla']);
      $this->assertEquals('Tesla', $stock->name);
    }

}
