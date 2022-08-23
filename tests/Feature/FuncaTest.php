<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FuncaTest extends TestCase
{
    public function testitWorks()
    {
        $response = $this->get('/jugar/1');
        $response->assertStatus(200);
    }
}