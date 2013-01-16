<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EAVEntity
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EAVEntity
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="EntityId", type="string", length=32)
     */
    private $EntityId;

    /**
     * @var smallint
     *
     * @ORM\Column(name="EntityTypeId", type="smallint", length=11)
     */
    private $EntityTypeId;

    /**
     * @var datetime
     *
     * @ORM\Column(name="Datetime", type="datetime")
     */
    private $Datetime;

    /**
     * @var smallint
     *
     * @ORM\Column(name="TvStation", type="smallint", length=11)
     */
    private $TvStation;

    /**
     * @ORM\OneToMany(targetEntity="EAVAttributeValue", mappedBy="entity")
     */
    private $attributes;

    /**
     * @ORM\ManyToOne(targetEntity="TVStation", inversedBy="entities")
     * @ORM\JoinColumn(name="TvStation", referencedColumnName="TvID")
     */
    private $tv;

    /**
     * @ORM\ManyToOne(targetEntity="MetaEAVEntityType", inversedBy="entities")
     * @ORM\JoinColumn(name="EntityTypeId", referencedColumnName="EntityTypeId")
     */
    private $entityType;

    public function __construct()
    {
	$this->attributes = new ArrayCollection();
    }

    /**
     * Get EntityId
     *
     * @return string 
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }

    /**
     * Set EntityTypeId
     *
     * @param integer $entityTypeId
     * @return EAVEntity
     */
    public function setEntityTypeId($entityTypeId)
    {
        $this->EntityTypeId = $entityTypeId;
    
        return $this;
    }

    /**
     * Get EntityTypeId
     *
     * @return integer 
     */
    public function getEntityTypeId()
    {
        return $this->EntityTypeId;
    }

    /**
     * Set Datetime
     *
     * @param datetime $datetime
     * @return EAVEntity
     */
    public function setDatetime($datetime)
    {
        $this->Datetime = $datetime;
    
        return $this;
    }

    /**
     * Get Datetime
     *
     * @return timestamp 
     */
    public function getDatetime()
    {
        return $this->Datetime;
    }

    /**
     * Set TvStation
     *
     * @param integer $tvStation
     * @return EAVEntity
     */
    public function setTvStation( $tvStation)
    {
        $this->TvStation = $tvStation;
    
        return $this;
    }

    /**
     * Get TvStation
     *
     * @return integer 
     */
    public function getTvStation()
    {
        return $this->TvStation;
    }

    /**
     * Add attributes
     *
     * @param \Acme\StoreBundle\Entity\EAVAttributeValue $attributes
     * @return EAVEntity
     */
    public function addAttribute(\Acme\StoreBundle\Entity\EAVAttributeValue $attributes)
    {
        $this->attributes[] = $attributes;
    
        return $this;
    }

    /**
     * Remove attributes
     *
     * @param \Acme\StoreBundle\Entity\EAVAttributeValue $attributes
     */
    public function removeAttribute(\Acme\StoreBundle\Entity\EAVAttributeValue $attributes)
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

    /**
     * Set tv
     *
     * @param \Acme\StoreBundle\Entity\TvStation $tv
     * @return EAVEntity
     */
    public function setTv(\Acme\StoreBundle\Entity\TvStation $tv = null)
    {
        $this->tv = $tv;
    
        return $this;
    }

    /**
     * Get tv
     *
     * @return \Acme\StoreBundle\Entity\TvStation 
     */
    public function getTv()
    {
        return $this->tv;
    }

    /**
     * Set entityType
     *
     * @param \Acme\StoreBundle\Entity\MetaEAVEntityType $entityType
     * @return EAVEntity
     */
    public function setEntityType(\Acme\StoreBundle\Entity\MetaEAVEntityType $entityType = null)
    {
        $this->entityType = $entityType;
    
        return $this;
    }

    /**
     * Get entityType
     *
     * @return \Acme\StoreBundle\Entity\MetaEAVEntityType 
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Set EntityId
     *
     * @param string $entityId
     * @return EAVEntity
     */
    public function setEntityId($entityId)
    {
        $this->EntityId = $entityId;
    
        return $this;
    }
}