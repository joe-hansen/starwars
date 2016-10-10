<?php

namespace StarWarsNames\Bundle\Util;

use Symfony\Component\DependencyInjection\Container;

/**
 * NameListGenerator
 */
class NameListGenerator implements NameListGeneratorInterface
{
	/**
	 * @var Container
	 */
	protected $container;

	/**
	 * Constructor
	 *
	 * @param Container $container
	 */
	public function __construct(Container $container) {
		$this->container = $container;
	}

	/**
	 * Returns all star wars names from configured parameters.
	 *
	 * @return mixed
	 */
	public function getAllNames() {
		return $this->container->getParameter('star_wars_names');

	}

	/**
	 * Returns random star wars names from configured parameters.
	 *
	 * @return array
	 */
	public function getRandomName() {
		$allNames = $this->getAllNames();
		return array($allNames[mt_rand(0, count($allNames))]);
	}
}
