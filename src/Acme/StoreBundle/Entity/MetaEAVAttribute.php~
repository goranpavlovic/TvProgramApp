<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * MetaEAVAttribute
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MetaEAVAttribute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AttributeId", type="integer", length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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
     * @ORM\Column(name="Datatype", type="string", length=255)
     */
    private $Datatype;

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
     * @ORM\ManyToMany(targetEntity="MetaEAVAttributeSet")
     * @ORM\JoinTable(name="MetaAtrSetDependecy",
     *      joinColumns={@ORM\JoinColumn(name="AttributeId", referencedColumnName="AttributeId")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="AttributeSetId", referencedColumnName="AttributeSetId")}
     *      )
     */
    private $entitySets;

    /**
     * @ORM\OneToMany(targetEntity="EAVAttributeValue", mappedBy="attributeMeta")
     */
    private $values;

    public function __construct()
    {
	$entitySets = new ArrayCollection();
	$values = new ArrayCollection();
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
     * @return MetaEAVAttribute
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
     * Set Datatype
     *
     * @param string $datatype
     * @return MetaEAVAttribute
     */
    public function setDatatype($datatype)
    {
        $this->Datatype = $datatype;
    
        return $this;
    }

    /**
     * Get Datatype
     *
     * @return string 
     */
    public function getDatatype()
    {
        return $this->Datatype;
    }

    /**
     * Set AttributeName
     *
     * @param string $attributeName
     * @return MetaEAVAttribute
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
     * @return MetaEAVAttribute
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
     * Add entitySets
     *
     * @param \Acme\StoreBundle\Entity\MetaEAVAttributeSet $entitySets
     * @return MetaEAVAttribute
     */
    public function addEntitySet(\Acme\StoreBundle\Entity\MetaEAVAttributeSet $entitySets)
    {
        $this->entitySets[] = $entitySets;
    
        return $this;
    }

    /**
     * Remove entitySets
     *
     * @param \Acme\StoreBundle\Entity\MetaEAVAttributeSet $entitySets
     */
    public function removeEntitySet(\Acme\StoreBundle\Entity\MetaEAVAttributeSet $entitySets)
    {
        $this->entitySets->removeElement($entitySets);
    }

    /**
     * Get entitySets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntitySets()
    {
        return $this->entitySets;
    }

    /**
     * Add values
     *
     * @param \Acme\StoreBundle\Entity\EAVAttributeValue $values
     * @return MetaEAVAttribute
     */
    public function addValue(\Acme\StoreBundle\Entity\EAVAttributeValue $values)
    {
        $this->values[] = $values;
    
        return $this;
    }

    /**
     * Remove values
     *
     * @param \Acme\StoreBundle\Entity\EAVAttributeValue $values
     */
    public function removeValue(\Acme\StoreBundle\Entity\EAVAttributeValue $values)
    {
        $this->values->removeElement($values);
    }

    /**
     * Get values
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getValues()
    {
        return $this->values;
    }
}