<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GamePicture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\GamePictureRepository")
 */
class GamePicture
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
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Game")
    * @ORM\JoinColumn(nullable=false)
    */
    private $game;

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;

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
     * Set path
     *
     * @param string $path
     * @return GamePicture
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return GamePicture
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
     * Set online
     *
     * @param boolean $online
     * @return GamePicture
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
     * Set game
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Game $game
     * @return GamePicture
     */
    public function setGame(\Gouzzy\GamesCollectionBundle\Entity\Game $game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }
}
