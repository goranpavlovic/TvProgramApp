<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EAVTv
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EAVTv
{
    /**
     * @var smallint
     *
     * @ORM\Column(name="ValueId", type="smallint", length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $ValueId;

    /**
     * @var smallint
     *
     * @ORM\Column(name="AttributeId", type="smallint", length=11)
     */
    private $AttributeId;

    /**
     * @var string
     *
     * @ORM\Column(name="Value", type="string", length=255)
     */
    private $Value;

    /**
     * @var smallint
     *
     * @ORM\Column(name="TvId", type="smallint", length=11)
     */
    private $TvId;

    /**
     * @ORM\OneToMany(targetEntity="EAVEntity", mappedBy="tv")
     *
     */
    private $entities;

    /**
     * @ORM\ManyToOne(targetEntity="TVStation", inversedBy="attributes")
     * @ORM\JoinColumn(name="TVStation", referencedColumnName="TvID")
     */
    private $tv;

    /**
     * @ORM\ManyToOne(targetEntity="MetadataTvAttribute", inversedBy="attributes")
     * @ORM\JoinColumn(name="MetadataTvAttribute", referencedColumnName="AttributeId")
     */
    private $attributeType;

    public function __construct()
    {
	$this->entities = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return smallint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ValueId
     *
     * @param smallint $valueId
     * @return EAVTv
     */
    public function setValueId($valueId)
    {
        $this->ValueId = $valueId;
    
        return $this;
    }

    /**
     * Get ValueId
     *
     * @return smallint 
     */
    public function getValueId()
    {
        return $this->ValueId;
    }

    /**
     * Set AttributeId
     *
     * @param smallint $attributeId
     * @return EAVTv
     */
    public function setAttributeId($attributeId)
    {
        $this->AttributeId = $attributeId;
    
        return $this;
    }

    /**
     * Get AttributeId
     *
     * @return smallint 
     */
    public function getAttributeId()
    {
        return $this->AttributeId;
    }

    /**
     * Set Value
     *
     * @param string $value
     * @return EAVTv
     */
    public function setValue($value)
    {
        $this->Value = $value;
    
        return $this;
    }

    /**
     * Get Value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Set TvId
     *
     * @param smallint $tvId
     * @return EAVTv
     */
    public function setTvId($tvId)
    {
        $this->TvId = $tvId;
    
        return $this;
    }

    /**
     * Get TvId
     *
     * @return smallint 
     */	
    public function getTvId()
    {
        return $this->TvId;
    }

    /**
     * Add entities
     *
     * @param \Acme\StoreBundle\Entity\EAVEntity $entities
     * @return EAVTv
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
     * Set tv
     *
     * @param \Acme\StoreBundle\Entity\TVStation $tv
     * @return EAVTv
     */
    public function setTv(\Acme\StoreBundle\Entity\TVStation $tv = null)
    {
        $this->tv = $tv;
    
        return $this;
    }

    /**
     * Get tv
     *
     * @return \Acme\StoreBundle\Entity\TVStation 
     */
    public function getTv()
    {
        return $this->tv;
    }

    /**
     * Set attributeType
     *
     * @param \Acme\StoreBundle\Entity\MetadataTvAttribute $attributeType
     * @return EAVTv
     */
    public function setAttributeType(\Acme\StoreBundle\Entity\MetadataTvAttribute $attributeType = null)
    {
        $this->attributeType = $attributeType;
    
        return $this;
    }

    /**
     * Get attributeType
     *
     * @return \Acme\StoreBundle\Entity\MetadataTvAttribute 
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }
}