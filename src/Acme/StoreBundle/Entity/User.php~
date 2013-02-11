<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EAVAttributeValue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
	/**
	 * @var string
	 *
	 * @ORM\Id
	 * @ORM\Column(name="id", type="string", length=30)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $ValueId;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", length=45)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="Location", type="string", length=45)
	 */
	private $location;
	
	/**
	 * @ORM\ManyToMany(targetEntity="TVStation")
     * @ORM\JoinTable(name="User_has_TVStation",
     *      joinColumns={@ORM\JoinColumn(name="User_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="TVStation_TvId", referencedColumnName="TvId")}
     *      )
	 */
	
	private $TVStations;
	
	/**
	 * @ORM\ManyToMany(targetEntity="EAVEntity")
     * @ORM\JoinTable(name="User_has_EAVEntity",
     *      joinColumns={@ORM\JoinColumn(name="User_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="EAVEntity_EntityId", referencedColumnName="EntityId")}
     *      )
	 */
	
	private $shows;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TVStations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shows = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get ValueId
     *
     * @return string 
     */
    public function getValueId()
    {
        return $this->ValueId;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return User
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add TVStations
     *
     * @param \Acme\StoreBundle\Entity\TVStation $tVStations
     * @return User
     */
    public function addTVStation(\Acme\StoreBundle\Entity\TVStation $tVStations)
    {
        $this->TVStations[] = $tVStations;
    
        return $this;
    }

    /**
     * Remove TVStations
     *
     * @param \Acme\StoreBundle\Entity\TVStation $tVStations
     */
    public function removeTVStation(\Acme\StoreBundle\Entity\TVStation $tVStations)
    {
        $this->TVStations->removeElement($tVStations);
    }

    /**
     * Get TVStations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTVStations()
    {
        return $this->TVStations;
    }

    /**
     * Add shows
     *
     * @param \Acme\StoreBundle\Entity\EAVEntity $shows
     * @return User
     */
    public function addShow(\Acme\StoreBundle\Entity\EAVEntity $shows)
    {
        $this->shows[] = $shows;
    
        return $this;
    }

    /**
     * Remove shows
     *
     * @param \Acme\StoreBundle\Entity\EAVEntity $shows
     */
    public function removeShow(\Acme\StoreBundle\Entity\EAVEntity $shows)
    {
        $this->shows->removeElement($shows);
    }

    /**
     * Get shows
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShows()
    {
        return $this->shows;
    }
}