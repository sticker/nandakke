<?php

namespace nandakke\areBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="are")
 */
class Are
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $are_id;

	protected $created;
	protected $modified;
	protected $status;
	protected $question;
	protected $answer;
	protected $description;
	protected $description_type;
	protected $category_1;
	protected $category_2;
	protected $category_3;
	protected $age;
	protected $difficulty;
	protected $popularity;

}
