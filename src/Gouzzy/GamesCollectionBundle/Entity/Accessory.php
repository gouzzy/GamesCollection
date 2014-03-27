<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accessory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\AccessoryRepository")
 */
class Accessory
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
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Console")
    * @ORM\JoinColumn(nullable=false)
    */
    private $console;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Brand")
    * @ORM\JoinColumn(nullable=false)
    */
    private $brand;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Localisation")
    * @ORM\JoinColumn(nullable=false)
    */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalLocalisation", type="string", length=255)
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
     * @ORM\Column(name="noticeCondition", type="integer")
     */
    private $noticeCondition;

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
     * @var string
     *
     * @ORM\Column(name="wikiLink", type="string", length=255)
     */
    private $wikiLink;

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;
    
    /**
    * @ORM\OneToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Picture", cascade={"persist"})
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
     * @return Accessory
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
     * @return Accessory
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
     * @return Accessory
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
     * @return Accessory
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
     * @return Accessory
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
     * @return Accessory
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
     * @return Accessory
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
     * @return Accessory
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
     * Set additionalInformations
     *
     * @param string $additionalInformations
     * @return Accessory
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
     * @return Accessory
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
     * Set wikiLink
     *
     * @param string $wikiLink
     * @return Accessory
     */
    public function setWikiLink($wikiLink)
    {
        $this->wikiLink = $wikiLink;

        return $this;
    }

    /**
     * Get wikiLink
     *
     * @return string 
     */
    public function getWikiLink()
    {
        return $this->wikiLink;
    }

    /**
     * Set online
     *
     * @param boolean $online
     * @return Accessory
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
     * Set console
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Console $console
     * @return Accessory
     */
    public function setConsole(\Gouzzy\GamesCollectionBundle\Entity\Console $console)
    {
        $this->console = $console;

        return $this;
    }

    /**
     * Get console
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Console 
     */
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * Set brand
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Brand $brand
     * @return Accessory
     */
    public function setBrand(\Gouzzy\GamesCollectionBundle\Entity\Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Brand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set localisation
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Localisation $localisation
     * @return Accessory
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
     * Set masterPicture
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Picture $masterPicture
     * @return Accessory
     */
    public function setMasterPicture(\Gouzzy\GamesCollectionBundle\Entity\Picture $masterPicture = null)
    {
        $this->masterPicture = $masterPicture;

        return $this;
    }

    /**
     * Get masterPicture
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Picture 
     */
    public function getMasterPicture()
    {
        return $this->masterPicture;
    }
}
