<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TransferControllerTest extends WebTestCase
{
    public function testMove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/move');
    }

}
