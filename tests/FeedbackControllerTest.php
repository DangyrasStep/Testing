<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FeedbackControllerTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertSame(1, $crawler->filter('#test')->count());

    }

    public function testLink()
    {
        $client = static::createClient();


        $crawler = $client->request('GET', '/');
        $link = $crawler->filter('#button')->link();

        $page = $client->click($link);
        echo $page->text();
        $this->assertSame(1, $page->filter('#red')->count());
    }

}
