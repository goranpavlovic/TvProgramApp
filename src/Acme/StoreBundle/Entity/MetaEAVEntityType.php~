<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * MetaEAVEntityType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MetaEAVEntityType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="EntityTypeId", type="integer", length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $EntityTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="EntityTypeName", type="string", length=45)
     */
    private $EntityTypeName;

    /**
     * @ORM\OneToMany(targetEntity="EAVEntity", mappedBy="entityType")
     */
    private $entities;

    /**
     * @ORM\ManyToMany(targetEntity="MetaEAVAttributeSet")
     * @ORM\JoinTable(name="MetaEntitySetDependency",
     *      joinColumns={@ORM\JoinColumn(name="EntityTypeId", referencedColumnName="EntityTypeId")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="AttributeSetId", referencedColumnName="AttributeSetId")}
     *      )
     **/
    private $attributeSets;

    public function __construct()
    {
	$this->entities = new ArrayCollection();
	$this->attributeSets = new ArrayCollection();
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
     * Set EntityTypeName
     *
     * @param string $entityTypeName
     * @return MetaEAVEntityType
     */
    public function setEntityTypeName($entityTypeName)
    {
        $this->EntityTypeName = $entityTypeName;
    
        return $this;
    }

    /**
     * Get EntityTypeName
     *
     * @return string 
     */
    public function getEntityTypeName()
    {
        return $this->EntityTypeName;
    }

    /**
     * Add entities
     *
     * @param \Acme\StoreBundle\Entity\EAVEntity $entities
     * @return MetaEAVEntityType
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
     * Add attributeSets
     *
     * @param \Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSets
     * @return MetaEAVEntityType
     */
    public function addAttributeSet(\Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSets)
    {
        $this->attributeSets[] = $attributeSets;
    
        return $this;
    }

    /**
     * Remove attributeSets
     *
     * @param \Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSets
     */
    public function removeAttributeSet(\Acme\StoreBundle\Entity\MetaEAVAttributeSet $attributeSets)
    {
        $this->attributeSets->removeElement($attributeSets);
    }

    /**
     * Get attributeSets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributeSets()
    {
        return $this->attributeSets;
    }
}