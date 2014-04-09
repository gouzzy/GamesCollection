<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\GameRepository")
 */
class Game
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\GenericGame")
    * @ORM\JoinColumn(nullable=false)
    */
    private $genericGame;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Localisation")
    * @ORM\JoinColumn(nullable=true)
    */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalLocalisation", type="string", length=100, nullable=true)
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
     * @ORM\Column(name="generalCondition", type="integer", nullable=true)
     */
    private $generalCondition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="box", type="boolean", nullable=true)
     */
    private $box;

    /**
     * @var integer
     *
     * @ORM\Column(name="boxCondition", type="integer", nullable=true)
     */
    private $boxCondition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notice", type="boolean", nullable=true)
     */
    private $notice;

    /**
     * @var integer
     *
     * @ORM\Column(name="noticeCondition", type="integer", nullable=true)
     */
    private $noticeCondition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="complete", type="boolean", nullable=true)
     */
    private $complete;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalInformations", type="text", nullable=true)
     */
    private $additionalInformations;

    /**
     * @var float
     *
     * @ORM\Column(name="cotation", type="float", nullable=true)
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
     * @return Game
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
     * Set additionalLocalisation
     *
     * @param string $additionalLocalisation
     * @return Game
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
     * @return Game
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
     * @return Game
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
     * @return Game
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
     * @return Game
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
     * @return Game
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
     * Set noticeCondition
     *
     * @param integer $noticeCondition
     * @return Game
     */
    public function setNoticeCondition($noticeCondition)
    {
        $this->noticeCondition = $noticeCondition;

        return $this;
    }

    /**
     * Get noticeCondition
     *
     * @return integer 
     */
    public function getNoticeCondition()
    {
        return $this->noticeCondition;
    }

    /**
     * Set complete
     *
     * @param boolean $complete
     * @return Game
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
     * @return Game
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
     * @return Game
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
     * @return Game
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
     * @return Game
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
     * Set genericGame
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\GenericGame $genericGame
     * @return Game
     */
    public function setGenericGame(\Gouzzy\GamesCollectionBundle\Entity\GenericGame $genericGame)
    {
        $this->genericGame = $genericGame;

        return $this;
    }

    /**
     * Get genericGame
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\GenericGame 
     */
    public function getGenericGame()
    {
        return $this->genericGame;
    }

    /**
     * Set masterPicture
     *
     * @param string $masterPicture
     * @return Game
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
