<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\EditorRepository")
 */
class Editor
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
     * @return Editor
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
     * @return Editor
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
     * @param string $masterPicture
     * @return Editor
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
