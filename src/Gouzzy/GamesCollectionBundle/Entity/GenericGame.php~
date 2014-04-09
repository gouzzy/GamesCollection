<?php

namespace Gouzzy\GamesCollectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenericGame
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gouzzy\GamesCollectionBundle\Entity\GenericGameRepository")
 */
class GenericGame
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
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Genre", inversedBy="gameList")
     * @ORM\JoinTable(name="gamesToGenres",
     *   joinColumns={@ORM\JoinColumn(name="game_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="genre_id", referencedColumnName="id")}
     * )
     */
    private $genreList;

    /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Gouzzy\GamesCollectionBundle\Entity\GenericConsole", inversedBy="gameList")
     * @ORM\JoinTable(name="gamesToConsoles",
     *   joinColumns={@ORM\JoinColumn(name="game_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="console_id", referencedColumnName="id")}
     * )
     */
    private $consoleList;
    
    /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Editor", inversedBy="gameList")
     * @ORM\JoinTable(name="gamesToEditors",
     *   joinColumns={@ORM\JoinColumn(name="game_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="editor_id", referencedColumnName="id")}
     * )
     */
    private $editorList;

    /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Gouzzy\GamesCollectionBundle\Entity\Developer", inversedBy="gameList")
     * @ORM\JoinTable(name="gamesToDevelopers",
     *   joinColumns={@ORM\JoinColumn(name="game_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="developer_id", referencedColumnName="id")}
     * )
     */
    private $developerList;

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
     * Constructor
     */
    public function __construct()
    {
        $this->genreList = new \Doctrine\Common\Collections\ArrayCollection();
        $this->consoleList = new \Doctrine\Common\Collections\ArrayCollection();
        $this->editorList = new \Doctrine\Common\Collections\ArrayCollection();
        $this->developerList = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return GenericGame
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
     * @return GenericGame
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
     * @return GenericGame
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
     * Add genreList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Genre $genreList
     * @return GenericGame
     */
    public function addGenreList(\Gouzzy\GamesCollectionBundle\Entity\Genre $genreList)
    {
        $this->genreList[] = $genreList;

        return $this;
    }

    /**
     * Remove genreList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Genre $genreList
     */
    public function removeGenreList(\Gouzzy\GamesCollectionBundle\Entity\Genre $genreList)
    {
        $this->genreList->removeElement($genreList);
    }

    /**
     * Get genreList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenreList()
    {
        return $this->genreList;
    }

    /**
     * Add consoleList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\GenericConsole $consoleList
     * @return GenericGame
     */
    public function addConsoleList(\Gouzzy\GamesCollectionBundle\Entity\GenericConsole $consoleList)
    {
        $this->consoleList[] = $consoleList;

        return $this;
    }

    /**
     * Remove consoleList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\GenericConsole $consoleList
     */
    public function removeConsoleList(\Gouzzy\GamesCollectionBundle\Entity\GenericConsole $consoleList)
    {
        $this->consoleList->removeElement($consoleList);
    }

    /**
     * Get consoleList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsoleList()
    {
        return $this->consoleList;
    }

    /**
     * Add editorList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Editor $editorList
     * @return GenericGame
     */
    public function addEditorList(\Gouzzy\GamesCollectionBundle\Entity\Editor $editorList)
    {
        $this->editorList[] = $editorList;

        return $this;
    }

    /**
     * Remove editorList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Editor $editorList
     */
    public function removeEditorList(\Gouzzy\GamesCollectionBundle\Entity\Editor $editorList)
    {
        $this->editorList->removeElement($editorList);
    }

    /**
     * Get editorList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEditorList()
    {
        return $this->editorList;
    }

    /**
     * Add developerList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Developer $developerList
     * @return GenericGame
     */
    public function addDeveloperList(\Gouzzy\GamesCollectionBundle\Entity\Developer $developerList)
    {
        $this->developerList[] = $developerList;

        return $this;
    }

    /**
     * Remove developerList
     *
     * @param \Gouzzy\GamesCollectionBundle\Entity\Developer $developerList
     */
    public function removeDeveloperList(\Gouzzy\GamesCollectionBundle\Entity\Developer $developerList)
    {
        $this->developerList->removeElement($developerList);
    }

    /**
     * Get developerList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDeveloperList()
    {
        return $this->developerList;
    }
}
