<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * MetadataTvAttribute
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MetadataTvAttribute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributeId", type="integer", length=11)
     */
    private $AttributeId;

    /**
     * @var string
     *
     * @ORM\Column(name="DefaultValue", type="string", length=255)
     */
    private $DefaultValue;

    /**
     * @var string
     *
     * @ORM\Column(name="DataType", type="string", length=255)
     */
    private $DataType;

    /**
     * @var string
     *
     * @ORM\Column(name="AttributeName", type="string", length=100)
     */
    private $AttributeName;

    /**
     * @var string
     *
     * @ORM\Column(name="RegularExpressionMatch", type="string", length=255)
     */
    private $RegularExpressionMatch;

    /**
     * @ORM\OneToMany(targetEntity="EAVTv", mappedBy="attributeType");
     */
    private $attributes;

    private function __construct()
    {
	$this->attributes = new ArrayCollection();
    }


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
     * Set AttributeId
     *
     * @param integer $attributeId
     * @return MetadataTvAttribute
     */
    public function setAttributeId($attributeId)
    {
        $this->AttributeId = $attributeId;
    
        return $this;
    }

    /**
     * Get AttributeId
     *
     * @return integer 
     */
    public function getAttributeId()
    {
        return $this->AttributeId;
    }

    /**
     * Set DefaultValue
     *
     * @param string $defaultValue
     * @return MetadataTvAttribute
     */
    public function setDefaultValue($defaultValue)
    {
        $this->DefaultValue = $defaultValue;
    
        return $this;
    }

    /**
     * Get DefaultValue
     *
     * @return string 
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }

    /**
     * Set DataType
     *
     * @param string $dataType
     * @return MetadataTvAttribute
     */
    public function setDataType($dataType)
    {
        $this->DataType = $dataType;
    
        return $this;
    }

    /**
     * Get DataType
     *
     * @return string 
     */
    public function getDataType()
    {
        return $this->DataType;
    }

    /**
     * Set AttributeName
     *
     * @param string $attributeName
     * @return MetadataTvAttribute
     */
    public function setAttributeName($attributeName)
    {
        $this->AttributeName = $attributeName;
    
        return $this;
    }

    /**
     * Get AttributeName
     *
     * @return string 
     */
    public function getAttributeName()
    {
        return $this->AttributeName;
    }

    /**
     * Set RegularExpressionMatch
     *
     * @param string $regularExpressionMatch
     * @return MetadataTvAttribute
     */
    public function setRegularExpressionMatch($regularExpressionMatch)
    {
        $this->RegularExpressionMatch = $regularExpressionMatch;
    
        return $this;
    }

    /**
     * Get RegularExpressionMatch
     *
     * @return string 
     */
    public function getRegularExpressionMatch()
    {
        return $this->RegularExpressionMatch;
    }

    /**
     * Add attributes
     *
     * @param \Acme\StoreBundle\Entity\EAVTv $attributes
     * @return MetadataTvAttribute
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