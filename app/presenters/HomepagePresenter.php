<?php

namespace App\Presenters;

use Nette;

class HomepagePresenter extends Nette\Application\UI\Presenter
{

	/**
	 * @var \Kdyby\Doctrine\EntityManager
	 */
	private $em;

	public function __construct(\Kdyby\Doctrine\EntityManager $entityManager)
	{
		parent::__construct();
		$this->em = $entityManager;
	}

	public function renderDefault()
	{
		$layers = $this->em->getRepository(\App\Layer::class)->findAll();
		$this->template->layers = $layers;
	}

}
