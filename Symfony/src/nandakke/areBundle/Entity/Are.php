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

    /**
     * @var integer
     */
    private $areId;

    /**
     * @var boolean
     */
    private $descriptionType;

    /**
     * @var string
     */
    private $category1;

    /**
     * @var string
     */
    private $category2;

    /**
     * @var string
     */
    private $category3;


    /**
     * Get areId
     *
     * @return integer 
     */
    public function getAreId()
    {
        return $this->areId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Are
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Are
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Are
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Are
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return Are
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    
        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Are
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionType
     *
     * @param boolean $descriptionType
     * @return Are
     */
    public function setDescriptionType($descriptionType)
    {
        $this->descriptionType = $descriptionType;
    
        return $this;
    }

    /**
     * Get descriptionType
     *
     * @return boolean 
     */
    public function getDescriptionType()
    {
        return $this->descriptionType;
    }

    /**
     * Set category1
     *
     * @param string $category1
     * @return Are
     */
    public function setCategory1($category1)
    {
        $this->category1 = $category1;
    
        return $this;
    }

    /**
     * Get category1
     *
     * @return string 
     */
    public function getCategory1()
    {
        return $this->category1;
    }

    /**
     * Set category2
     *
     * @param string $category2
     * @return Are
     */
    public function setCategory2($category2)
    {
        $this->category2 = $category2;
    
        return $this;
    }

    /**
     * Get category2
     *
     * @return string 
     */
    public function getCategory2()
    {
        return $this->category2;
    }

    /**
     * Set category3
     *
     * @param string $category3
     * @return Are
     */
    public function setCategory3($category3)
    {
        $this->category3 = $category3;
    
        return $this;
    }

    /**
     * Get category3
     *
     * @return string 
     */
    public function getCategory3()
    {
        return $this->category3;
    }

    /**
     * Set age
     *
     * @param boolean $age
     * @return Are
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return boolean 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set difficulty
     *
     * @param boolean $difficulty
     * @return Are
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    
        return $this;
    }

    /**
     * Get difficulty
     *
     * @return boolean 
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set popularity
     *
     * @param integer $popularity
     * @return Are
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;
    
        return $this;
    }

    /**
     * Get popularity
     *
     * @return integer 
     */
    public function getPopularity()
    {
        return $this->popularity;
    }
}