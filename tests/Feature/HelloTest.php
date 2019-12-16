<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    // $ php artisan make:test HelloTest
    // CircleCIに - run: ./vendor/bin/phpunit を追加
    // config.ymlにenvironmentを追加
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
