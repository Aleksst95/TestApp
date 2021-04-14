<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BuildingsTest extends TestCase
{
    /** @test */
    public function json_returned()
    {
        $response = $this->getJson('/api/buildings');
        $data = json_decode($response->getContent(), true);
        $this->assertIsArray($data);
    }
}
