<?php

namespace StarWarsNames\Bundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NamesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertContains('Admiral Ackbar', $client->getResponse()->getContent());
    }

	public function testRandom()
	{
		$client = static::createClient();
		$client->request('GET', '/randomName');
		$this->assertContains('Random', $client->getResponse()->getContent());
	}
}
