<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessoryPicture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\AccessoryPictureRepository")
 */
class AccessoryPicture
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Accessory")
    * @ORM\JoinColumn(nullable=false)
    */
    private $accessory;

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
     * @return AccessoryPicture
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return AccessoryPicture
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
     * @return AccessoryPicture
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
     * Set accessory
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Accessory $accessory
     * @return AccessoryPicture
     */
    public function setAccessory(\Gouzzy\GamesCollectionBundle\Entity\Accessory $accessory)
    {
        $this->accessory = $accessory;

        return $this;
    }

    /**
     * Get accessory
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Accessory 
     */
    public function getAccessory()
    {
        return $this->accessory;
    }
}
