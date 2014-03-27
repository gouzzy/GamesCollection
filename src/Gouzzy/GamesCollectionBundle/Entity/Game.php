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
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Genre")
    * @ORM\JoinColumn(nullable=false)
    */
    private $genre;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Console")
    * @ORM\JoinColumn(nullable=false)
    */
    private $console;
    
    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Editor")
    * @ORM\JoinColumn(nullable=false)
    */
    private $editor;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Developer")
    * @ORM\JoinColumn(nullable=false)
    */
    private $developer;

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
     * @ORM\Column(name="noticeCondition", type="integer")
     */
    private $noticeCondition;

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
     * Set wikiLink
     *
     * @param string $wikiLink
     * @return Game
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
     * Set genre
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Genre $genre
     * @return Game
     */
    public function setGenre(\Gouzzy\GamesCollectionBundle\Entity\Genre $genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Genre 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set console
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Console $console
     * @return Game
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
     * Set editor
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Editor $editor
     * @return Game
     */
    public function setEditor(\Gouzzy\GamesCollectionBundle\Entity\Editor $editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Editor 
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set developer
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Developer $developer
     * @return Game
     */
    public function setDeveloper(\Gouzzy\GamesCollectionBundle\Entity\Developer $developer)
    {
        $this->developer = $developer;

        return $this;
    }

    /**
     * Get developer
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Developer 
     */
    public function getDeveloper()
    {
        return $this->developer;
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
     * Set masterPicture
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Picture $masterPicture
     * @return Game
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
