<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloTest extends TestCase
{
    public function test_the_hello_route_returns_the_welcome_message(): void
    {
        $this->get('/hello')
            ->assertOk()
            ->assertSee('مرحبًا بك في Laravel World');
    }
}
