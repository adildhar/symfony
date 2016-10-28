<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TakedownControllerTest extends WebTestCase
{
    public function testTake()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/takedown');
    }

}
