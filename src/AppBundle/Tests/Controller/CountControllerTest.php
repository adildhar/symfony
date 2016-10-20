<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CountControllerTest extends WebTestCase
{
    public function testCount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/count');
    }

}
