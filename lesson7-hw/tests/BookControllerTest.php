<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookControllerTest extends WebTestCase
{
     public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/book/2');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorTextContains('div', 'Автор: Оксана Панкеева');
    }
}