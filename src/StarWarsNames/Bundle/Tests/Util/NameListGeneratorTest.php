<?php

namespace StarWarsNames\Bundle\Tests\Util;

use StarWarsNames\Bundle\Controller\DefaultController;
use StarWarsNames\Bundle\Util\NameListGenerator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NameListGeneratorTest extends WebTestCase {
	public function testIndex()
	{
		$controller = new DefaultController();
		$container = $controller->container;
		$fullNameList = $container->getParameter('star_wars_names');

		$nameListGenerator = new NameListGenerator($container);
		$nameList = $nameListGenerator->getAllNames();
		$this->assertEquals($fullNameList, $nameList);
	}

}
