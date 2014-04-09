<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenericConsole
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\GenericConsoleRepository")
 */
class GenericConsole
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
    * @ORM\ManyToMany(targetEntity="Gouzzy\GamesCollectionBundle\Entity\GenericGame", mappedBy="consoleList")
    */
    private $gameList;
    
    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Brand")
    * @ORM\JoinColumn(nullable=false)
    */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="wikiLink", type="string", length=255)
     */
    private $wikiLink;

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
     * @return GenericConsole
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
     * Set wikiLink
     *
     * @param string $wikiLink
     * @return GenericConsole
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
     * Set brand
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Brand $brand
     * @return GenericConsole
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
     * Set masterPicture
     *
     * @param string $masterPicture
     * @return GenericConsole
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gameList = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gameList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\GenericGame $gameList
     * @return GenericConsole
     */
    public function addGameList(\Gouzzy\GamesCollectionBundle\Entity\GenericGame $gameList)
    {
        $this->gameList[] = $gameList;

        return $this;
    }

    /**
     * Remove gameList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\GenericGame $gameList
     */
    public function removeGameList(\Gouzzy\GamesCollectionBundle\Entity\GenericGame $gameList)
    {
        $this->gameList->removeElement($gameList);
    }

    /**
     * Get gameList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGameList()
    {
        return $this->gameList;
    }
}
