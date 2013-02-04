<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EAVAttributeValue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EAVAttributeValue
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="ValueId", type="string", length=32)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ValueId;

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributeId", type="integer", length=11)
     */
    private $AttributeId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="AttributeSetId", type="integer", length=11)
     */
    private $AttributeSetId;

    /**
     * @var string
     *
     * @ORM\Column(name="Value", type="string", length=255)
     */
    private $Value;

    /**
    * @ORM\ManyToOne(targetEntity="EAVEntity", inversedBy="attributes")
    * @ORM\JoinColumn(name="EntityId", referencedColumnName="EntityId")
    */
    private $entity;

    /**
    * @ORM\ManyToOne(targetEntity="MetaEAVAttribute", inversedBy="values")
    * @ORM\JoinColumn(name="AttributeId", referencedColumnName="AttributeId")
    */
    private $attributeMeta;
    
    /**
     * @ORM\ManyToOne(targetEntity="MetaEAVAttributeSet", inversedBy="values")
     * @ORM\JoinColumn(name="AttributeSetId", referencedColumnName="AttributeSetId")
     */
    private $attributeSetMeta;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ValueId
     *
     * @param \char $valueId
     * @return EAVAttributeValue
     */
    public function setValueId($valueId)
    {
        $this->ValueId = $valueId;
    
        return $this;
    }

    /**
     * Get ValueId
     *
     * @return \char 
     */
    public function getValueId()
    {
        return $this->ValueId;
    }

    /**
     * Set AttributeId
     *
     * @param \int $attributeId
     * @return EAVAttributeValue
     */
    public function setAttributeId($attributeId)
    {
        $this->AttributeId = $attributeId;
    
        return $this;
    }

    /**
     * Get AttributeId
     *
     * @return \int 
     */
    public function getAttributeId()
    {
        return $this->AttributeId;
    }

    /**
     * Set Value
     *
     * @param \varchar $value
     * @return EAVAttributeValue
     */
    public function setValue($value)
    {
        $this->Value = $value;
    
        return $this;
    }

    /**
     * Get Value
     *
     * @return \varchar 
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Set entity
     *
     * @param \Acme\StoreBundle\Entity\EAVEntity $entity
     * @return EAVAttributeValue
     */
    public function setEntity(\Acme\StoreBundle\Entity\EAVEntity $entity = null)
    {
        $this->entity = $entity;
    
        return $this;
    }

    /**
     * Get entity
     *
     * @return \Acme\StoreBundle\Entity\EAVEntity 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set attributeMeta
     *
     * @param \Acme\StoreBundle\Entity\MetaEAVAttribute $attributeMeta
     * @return EAVAttributeValue
     */
    public function setAttributeMeta(\Acme\StoreBundle\Entity\MetaEAVAttribute $attributeMeta = null)
    {
        $this->attributeMeta = $attributeMeta;
    
        return $this;
    }

    /**
     * Get attributeMeta
     *
     * @return \Acme\StoreBundle\Entity\MetaEAVAttribute 
     */
    public function getAttributeMeta()
    {
        return $this->attributeMeta;
    }

    /**
     * Set attributeSetMeta
     *
     * @param \Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSetMeta
     * @return EAVAttributeValue
     */
    public function setAttributeSetMeta(\Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSetMeta = null)
    {
        $this->attributeSetMeta = $attributeSetMeta;
    
        return $this;
    }

    /**
     * Get attributeSetMeta
     *
     * @return \Acme\StoreBundle\Entity\MetaEAVAttributeSet 
     */
    public function getAttributeSetMeta()
    {
        return $this->attributeSetMeta;
    }

    /**
     * Set AttributeSetId
     *
     * @param integer $attributeSetId
     * @return EAVAttributeValue
     */
    public function setAttributeSetId($attributeSetId)
    {
        $this->AttributeSetId = $attributeSetId;
    
        return $this;
    }

    /**
     * Get AttributeSetId
     *
     * @return integer 
     */
    public function getAttributeSetId()
    {
        return $this->AttributeSetId;
    }
}