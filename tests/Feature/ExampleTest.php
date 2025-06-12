<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_example()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
