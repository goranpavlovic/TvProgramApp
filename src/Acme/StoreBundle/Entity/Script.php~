<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Script
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Script
{

    /**
     * @var integer
     *
     * @ORM\Column(name="ScriptId", type="integer", length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $ScriptId;

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=100)
     */
    private $ScriptName;

    /**
     * @var string
     *
     * @ORM\Column(name="Path", type="string", length=255)
     */
    private $Path;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastRun", type="datetime")
     */
    private $LastRun;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RunTime", type="time")
     */
    private $RunTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="TvStation", type="integer", length=11)
     */
    private $TvStation;

    /**
     * @ORM\ManyToOne(targetEntity="TVStation", inversedBy="scripts")
     * @ORM\JoinColumn(name="TVStation", referencedColumnName="TvID")
     */
    private $tv;

    private $entityType;

    /**
     * Get ScriptId
     *
     * @return integer 
     */
    public function getScriptId()
    {
        return $this->ScriptId;
    }

    /**
     * Set ScriptName
     *
     * @param string $scriptName
     * @return Script
     */
    public function setScriptName($scriptName)
    {
        $this->ScriptName = $scriptName;
    
        return $this;
    }

    /**
     * Get ScriptName
     *
     * @return string 
     */
    public function getScriptName()
    {
        return $this->ScriptName;
    }

    /**
     * Set Path
     *
     * @param string $path
     * @return Script
     */
    public function setPath($path)
    {
        $this->Path = $path;
    
        return $this;
    }

    /**
     * Get Path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->Path;
    }

    /**
     * Set LastRun
     *
     * @param \DateTime $lastRun
     * @return Script
     */
    public function setLastRun($lastRun)
    {
        $this->LastRun = $lastRun;
    
        return $this;
    }

    /**
     * Get LastRun
     *
     * @return \DateTime 
     */
    public function getLastRun()
    {
        return $this->LastRun;
    }

    /**
     * Set RunTime
     *
     * @param \DateTime $runTime
     * @return Script
     */
    public function setRunTime($runTime)
    {
        $this->RunTime = $runTime;
    
        return $this;
    }

    /**
     * Get RunTime
     *
     * @return \DateTime 
     */
    public function getRunTime()
    {
        return $this->RunTime;
    }

    /**
     * Set TvStation
     *
     * @param integer $tvStation
     * @return Script
     */
    public function setTvStation($tvStation)
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
     * Set tv
     *
     * @param \Acme\StoreBundle\Entity\TVStation $tv
     * @return Script
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
}