<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Console
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\ConsoleRepository")
 */
class Console
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200)
     */
    private $name;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\GenericConsole")
    * @ORM\JoinColumn(nullable=false)
    */
    private $genericConsole;
    
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=100)
     */
    private $version;

    /**
     * @var integer
     *
     * @ORM\Column(name="generation", type="integer")
     */
    private $generation;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Localisation")
    * @ORM\JoinColumn(nullable=false)
    */
    private $localisation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="additionalLocalisation", type="string", length=100)
     */
    private $additionalLocalisation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="work", type="boolean")
     */
    private $work;

    /**
     * @var integer
     *
     * @ORM\Column(name="generalCondition", type="integer")
     */
    private $generalCondition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="box", type="boolean")
     */
    private $box;

    /**
     * @var integer
     *
     * @ORM\Column(name="boxCondition", type="integer")
     */
    private $boxCondition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notice", type="boolean")
     */
    private $notice;

    /**
     * @var integer
     *
     * @ORM\Column(name="noticeCondtion", type="integer")
     */
    private $noticeCondtion;

    /**
     * @var integer
     *
     * @ORM\Column(name="controllersNumber", type="integer")
     */
    private $controllersNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="complete", type="boolean")
     */
    private $complete;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalInformations", type="text")
     */
    private $additionalInformations;

    /**
     * @var float
     *
     * @ORM\Column(name="cotation", type="float")
     */
    private $cotation;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;

    /**
     * @var string
     *
     * @ORM\Column(name="masterPicture", type="string", length=100)
     */
    private $masterPicture;

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
     * @return Console
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
     * Set version
     *
     * @param string $version
     * @return Console
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set generation
     *
     * @param integer $generation
     * @return Console
     */
    public function setGeneration($generation)
    {
        $this->generation = $generation;

        return $this;
    }

    /**
     * Get generation
     *
     * @return integer 
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Set additionalLocalisation
     *
     * @param string $additionalLocalisation
     * @return Console
     */
    public function setAdditionalLocalisation($additionalLocalisation)
    {
        $this->additionalLocalisation = $additionalLocalisation;

        return $this;
    }

    /**
     * Get additionalLocalisation
     *
     * @return string 
     */
    public function getAdditionalLocalisation()
    {
        return $this->additionalLocalisation;
    }

    /**
     * Set work
     *
     * @param boolean $work
     * @return Console
     */
    public function setWork($work)
    {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return boolean 
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set generalCondition
     *
     * @param integer $generalCondition
     * @return Console
     */
    public function setGeneralCondition($generalCondition)
    {
        $this->generalCondition = $generalCondition;

        return $this;
    }

    /**
     * Get generalCondition
     *
     * @return integer 
     */
    public function getGeneralCondition()
    {
        return $this->generalCondition;
    }

    /**
     * Set box
     *
     * @param boolean $box
     * @return Console
     */
    public function setBox($box)
    {
        $this->box = $box;

        return $this;
    }

    /**
     * Get box
     *
     * @return boolean 
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * Set boxCondition
     *
     * @param integer $boxCondition
     * @return Console
     */
    public function setBoxCondition($boxCondition)
    {
        $this->boxCondition = $boxCondition;

        return $this;
    }

    /**
     * Get boxCondition
     *
     * @return integer 
     */
    public function getBoxCondition()
    {
        return $this->boxCondition;
    }

    /**
     * Set notice
     *
     * @param boolean $notice
     * @return Console
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return boolean 
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Set noticeCondtion
     *
     * @param integer $noticeCondtion
     * @return Console
     */
    public function setNoticeCondtion($noticeCondtion)
    {
        $this->noticeCondtion = $noticeCondtion;

        return $this;
    }

    /**
     * Get noticeCondtion
     *
     * @return integer 
     */
    public function getNoticeCondtion()
    {
        return $this->noticeCondtion;
    }

    /**
     * Set controllersNumber
     *
     * @param integer $controllersNumber
     * @return Console
     */
    public function setControllersNumber($controllersNumber)
    {
        $this->controllersNumber = $controllersNumber;

        return $this;
    }

    /**
     * Get controllersNumber
     *
     * @return integer 
     */
    public function getControllersNumber()
    {
        return $this->controllersNumber;
    }

    /**
     * Set complete
     *
     * @param boolean $complete
     * @return Console
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return boolean 
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set additionalInformations
     *
     * @param string $additionalInformations
     * @return Console
     */
    public function setAdditionalInformations($additionalInformations)
    {
        $this->additionalInformations = $additionalInformations;

        return $this;
    }

    /**
     * Get additionalInformations
     *
     * @return string 
     */
    public function getAdditionalInformations()
    {
        return $this->additionalInformations;
    }

    /**
     * Set cotation
     *
     * @param float $cotation
     * @return Console
     */
    public function setCotation($cotation)
    {
        $this->cotation = $cotation;

        return $this;
    }

    /**
     * Get cotation
     *
     * @return float 
     */
    public function getCotation()
    {
        return $this->cotation;
    }

    /**
     * Set online
     *
     * @param boolean $online
     * @return Console
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean 
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set localisation
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Localisation $localisation
     * @return Console
     */
    public function setLocalisation(\Gouzzy\GamesCollectionBundle\Entity\Localisation $localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Localisation 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set genericConsole
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\GenericConsole $genericConsole
     * @return Console
     */
    public function setGenericConsole(\Gouzzy\GamesCollectionBundle\Entity\GenericConsole $genericConsole)
    {
        $this->genericConsole = $genericConsole;

        return $this;
    }

    /**
     * Get genericConsole
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\GenericConsole 
     */
    public function getGenericConsole()
    {
        return $this->genericConsole;
    }

    /**
     * Set masterPicture
     *
     * @param string $masterPicture
     * @return Console
     */
    public function setMasterPicture($masterPicture)
    {
        $this->masterPicture = $masterPicture;

        return $this;
    }

    /**
     * Get masterPicture
     *
     * @return string 
     */
    public function getMasterPicture()
    {
        return $this->masterPicture;
    }
}
