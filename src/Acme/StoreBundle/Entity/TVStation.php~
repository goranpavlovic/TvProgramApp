<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TVStation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TVStation
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="TvID", type="integer", length=11)
     */
    private $TvID;

    /**
     * @var string
     * 
     * @ORM\Column(name="TvName", type="string", length=45)
     */
    private $TvName;

    /**
     * @var string
     *
     * @ORM\Column(name="TvCountry", type="string", length=45)
     */
    private $TvCountry;

    /**
     * @ORM\OneToMany(targetEntity="EAVEntity", mappedBy="tv")
     */
    private $entities;

    /**
     * @ORM\OneToMany(targetEntity="Script", mappedBy="tv")
     */
    private $scripts;

    /**
     * @ORM\OneToMany(targetEntity="EAVTv", mappedBy="tv")
     */
    private $attributes;

    /**
     * Set TvID
     *
     * @param integer $tvID
     * @return TVStation
     */
    public function setTvID($tvID)
    {
        $this->TvID = $tvID;
    
        return $this;
    }

    /**
     * Get TvID
     *
     * @return integer 
     */
    public function getTvID()
    {
        return $this->TvID;
    }

    /**
     * Set TvName
     *
     * @param string $tvName
     * @return TVStation
     */
    public function setTvName($tvName)
    {
        $this->TvName = $tvName;
    
        return $this;
    }

    /**
     * Get TvName
     *
     * @return string 
     */
    public function getTvName()
    {
        return $this->TvName;
    }

    /**
     * Set TvCountry
     *
     * @param string $tvCountry
     * @return TVStation
     */
    public function setTvCountry($tvCountry)
    {
        $this->TvCountry = $tvCountry;
    
        return $this;
    }

    /**
     * Get TvCountry
     *
     * @return string 
     */
    public function getTvCountry()
    {
        return $this->TvCountry;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scripts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attributes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add entities
     *
     * @param \Acme\StoreBundle\Entity\EAVEntity $entities
     * @return TVStation
     */
    public function addEntitie(\Acme\StoreBundle\Entity\EAVEntity $entities)
    {
        $this->entities[] = $entities;
    
        return $this;
    }

    /**
     * Remove entities
     *
     * @param \Acme\StoreBundle\Entity\EAVEntity $entities
     */
    public function removeEntitie(\Acme\StoreBundle\Entity\EAVEntity $entities)
    {
        $this->entities->removeElement($entities);
    }

    /**
     * Get entities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Add scripts
     *
     * @param \Acme\StoreBundle\Entity\Script $scripts
     * @return TVStation
     */
    public function addScript(\Acme\StoreBundle\Entity\Script $scripts)
    {
        $this->scripts[] = $scripts;
    
        return $this;
    }

    /**
     * Remove scripts
     *
     * @param \Acme\StoreBundle\Entity\Script $scripts
     */
    public function removeScript(\Acme\StoreBundle\Entity\Script $scripts)
    {
        $this->scripts->removeElement($scripts);
    }

    /**
     * Get scripts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getScripts()
    {
        return $this->scripts;
    }

    /**
     * Add attributes
     *
     * @param \Acme\StoreBundle\Entity\EAVTv $attributes
     * @return TVStation
     */
    public function addAttribute(\Acme\StoreBundle\Entity\EAVTv $attributes)
    {
        $this->attributes[] = $attributes;
    
        return $this;
    }

    /**
     * Remove attributes
     *
     * @param \Acme\StoreBundle\Entity\EAVTv $attributes
     */
    public function removeAttribute(\Acme\StoreBundle\Entity\EAVTv $attributes)
    {
        $this->attributes->removeElement($attributes);
    }

    /**
     * Get attributes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}