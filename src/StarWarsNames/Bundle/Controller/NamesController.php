<?php

namespace StarWarsNames\Bundle\Controller;

use StarWarsNames\Bundle\Util\NameListGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NamesController extends Controller
{
	/**
	 * @Route("/")
	 */
	public function showAllNamesAction()
	{
		$nameListGenerator = new NameListGenerator($this->container);

		return $this->render(
			'StarWarsNamesBundle:Default:index.html.twig', [
			'mode'  => 'all',
			'names' => $nameListGenerator->getAllNames()
		]
		);
	}


	/**
	 * @Route("/randomName")
	 */
	public function showRandomNameAction()
	{
		$nameListGenerator = new NameListGenerator($this->container);

		return $this->render(
			'StarWarsNamesBundle:Default:index.html.twig', [
			'mode'  => 'random',
			'names' => $nameListGenerator->getRandomName()
		]
		);
	}
}
