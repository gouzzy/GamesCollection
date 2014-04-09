<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\BrandRepository")
 */
class Brand
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
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="wikiLink", type="string", length=255)
     */
    private $wikiLink;

    /**
     * @ORM\OneToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Image", cascade={"persist", "remove"})
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
     * @return Brand
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
     * @return Brand
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
     * Set masterPicture
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Image $masterPicture
     * @return Brand
     */
    public function setMasterPicture(\Gouzzy\GamesCollectionBundle\Entity\Image $masterPicture = null)
    {
        $this->masterPicture = $masterPicture;

        return $this;
    }

    /**
     * Get masterPicture
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\Image 
     */
    public function getMasterPicture()
    {
        return $this->masterPicture;
    }
}
