<?php

namespace StarWarsNames\Bundle\Tests\Util;

use StarWarsNames\Bundle\Util\NameListGenerator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\Container;

class NameListGeneratorTest extends WebTestCase {

	protected $fullNameList = array('a', 'b', 'c');

	public function testGetAllNames() {
		$container = $this->getMockBuilder('Container')
			->setMethods(array('getParameter'))
			->getMock();

		$container->expects($this->once())
			->method('getParameter')
			->with($this->equalTo('star_wars_names'))
			->will($this->returnValue($this->fullNameList));

		$nameListGenerator = new NameListGenerator($container);
		$nameList = $nameListGenerator->getAllNames();
		$this->assertEquals($this->fullNameList, $nameList);
	}

	public function testGetRandomName() {
		$container = $this->getMockBuilder('Container')
			->setMethods(array('getParameter'))
			->getMock();

		$container->expects($this->once())
			->method('getParameter')
			->with($this->equalTo('star_wars_names'))
			->will($this->returnValue($this->fullNameList));

		$nameListGenerator = new NameListGenerator($container);
		$nameList = $nameListGenerator->getRandomName();
		$this->assertCount(1, $nameList);
		$this->assertEquals(true, in_array($nameList[0], $this->fullNameList));
	}

}
