<?php 

namespace TvDatabase\LoginBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;

use Doctrine\Common\Collections\ArrayCollection;

use JMS\SecurityExtraBundle\Security\Util\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\component\Security\Core\User\UserInterface;
use Symfony\component\Security\Core\User\AdvancedUserInterface;

/**
 * UserGroup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserGroup implements RoleInterface
{
	/**
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id()
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\Column(name="name", type="string", length=30)
	 */
	private $name;
	
	/**
	 * @ORM\Column(name="role", type="string", length=20, unique=true)
	 */
	private $role;
	
	/**
	 * @ORM\ManyToMany(targetEntity="User")
	 * @ORM\JoinTable(name="Users_Groups",
	 *      joinColumns={@ORM\JoinColumn(name="groupid", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="userid", referencedColumnName="id")}
	 *      )
	 **/
	private $users;
	
	public function __construct()
	{
		$this->users = new ArrayCollection();
	}
	
	/**
	 * @see RoleInterface
	 */
	public function getRole()
	{
		return $this->role;
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
     * Set name
     *
     * @param string $name
     * @return UserGroup
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return UserGroup
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Add users
     *
     * @param \TvDatabase\LoginBundle\Entity\User $users
     * @return UserGroup
     */
    public function addUser(\TvDatabase\LoginBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \TvDatabase\LoginBundle\Entity\User $users
     */
    public function removeUser(\TvDatabase\LoginBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}