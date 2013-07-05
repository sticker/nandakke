<?php

namespace nandakke\areBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tagmap
 */
class Tagmap
{
    /**
     * @var integer
     */
    private $tagmapId;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \nandakke\areBundle\Entity\Are
     */
    private $are;

    /**
     * @var \nandakke\areBundle\Entity\Tag
     */
    private $tag;


    /**
     * Get tagmapId
     *
     * @return integer 
     */
    public function getTagmapId()
    {
        return $this->tagmapId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Tagmap
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
     * @return Tagmap
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
     * @return Tagmap
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
     * Set are
     *
     * @param \nandakke\areBundle\Entity\Are $are
     * @return Tagmap
     */
    public function setAre(\nandakke\areBundle\Entity\Are $are = null)
    {
        $this->are = $are;
    
        return $this;
    }

    /**
     * Get are
     *
     * @return \nandakke\areBundle\Entity\Are 
     */
    public function getAre()
    {
        return $this->are;
    }

    /**
     * Set tag
     *
     * @param \nandakke\areBundle\Entity\Tag $tag
     * @return Tagmap
     */
    public function setTag(\nandakke\areBundle\Entity\Tag $tag = null)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return \nandakke\areBundle\Entity\Tag 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
