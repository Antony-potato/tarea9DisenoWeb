<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminltePagesTest extends TestCase
{
    public function test_home_page_loads_with_expected_content(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Inicio');
        $response->assertSee('Task9');
        $response->assertSee('Victor Emilio Flores Lopez');
        $response->assertSee('2811975');
    }

    public function test_photos_page_loads_with_expected_content(): void
    {
        $response = $this->get('/fotos');

        $response->assertOk();
        $response->assertSee('Fotos');
        $response->assertSee('Galeria 1');
    }

    public function test_contact_page_loads_with_expected_content(): void
    {
        $response = $this->get('/contacto');

        $response->assertOk();
        $response->assertSee('Contacto');
        $response->assertSee('Formulario de contacto simulado');
    }
}
