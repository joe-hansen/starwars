<?php

namespace StarWarsNames\Bundle\Util;

use Symfony\Component\DependencyInjection\Container;

/**
 * Interface NameListGeneratorInterface
 */
interface NameListGeneratorInterface
{

	/**
	 * @param Container $container
	 */
	public function __construct($container);


	/**
	 * Returns all star wars names from configured parameters.
	 *
	 * @param Container $container
	 *
	 * @return array
	 */
	public function getAllNames();


	/**
	 * Returns random star wars names from configured parameters.
	 *
	 * @return array
	 */
	public function getRandomName();
}