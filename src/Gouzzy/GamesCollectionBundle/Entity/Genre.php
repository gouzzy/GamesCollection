<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\GenreRepository")
 */
class Genre
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
    * @ORM\ManyToOne(targetEntity="Gouzzy\GamesCollectionBundle\Entity\MasterGenre")
    * @ORM\JoinColumn(nullable=false)
    */
    private $masterGenre;

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
     * @return Genre
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
     * Set masterGenre
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\MasterGenre $masterGenre
     * @return Genre
     */
    public function setMasterGenre(\Gouzzy\GamesCollectionBundle\Entity\MasterGenre $masterGenre)
    {
        $this->masterGenre = $masterGenre;

        return $this;
    }

    /**
     * Get masterGenre
     *
     * @return \Gouzzy\GamesCollectionBundle\Entity\MasterGenre 
     */
    public function getMasterGenre()
    {
        return $this->masterGenre;
    }
}
