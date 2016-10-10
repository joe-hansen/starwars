<?php

namespace StarWarsNames\Bundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

/**
 * Class StarWarsNamesExtension loads the needed parameters
 */
class StarWarsNamesExtension extends Extension
{
	/**
	 * Loads the names of all starwars-characters
	 *
	 * @param array            $configs		Array of configuration settings
	 * @param ContainerBuilder $container	ContainerBuilder Instance
	 */
	public function load(array $configs, ContainerBuilder $container) {
		$loader = new YamlFileLoader(
			$container,
			new FileLocator(__DIR__.'/../Resources/config')
		);
		$loader->load('star_wars_names.yml');
	}
}
