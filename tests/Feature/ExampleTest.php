<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{

     use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $data = [
            'name' => 'Alo',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'email' => 'alonso@avotz.com'
        ];

        $response = $this->post('/users', $data);

       $this->assertDatabaseHas('users', $data);

        $this->assertTrue(User::where('name', 'Alo')->first()->name == $data['name']);

       
    }
}
