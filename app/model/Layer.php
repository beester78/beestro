<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Layer
{

	use \Kdyby\Doctrine\Entities\Attributes\Identifier;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $title;

}
