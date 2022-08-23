<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RojoTest extends TestCase
{
    public function testhay4rojosoMas()
    {
        $response = file_get_contents('https://testcuatroenlinea.ddev.site/jugar/111111222222');
        $this -> assertTrue(substr_count($response, 'bg-red-500') >= 4);
    }

    public function testhay9azulesoMas()
    {
        $response = file_get_contents('https://testcuatroenlinea.ddev.site/jugar/111111222222');
        $this -> assertTrue(substr_count($response, 'bg-sky-500') >= 9);
    }    
}

