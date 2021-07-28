<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ApiTest extends TestCase
{
    /**
     * Api index route test.
     */
    public function testApi()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
