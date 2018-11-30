<?php

namespace LSI\MarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="LSI\MarketBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min = 5,
     *     max = 50,
     *     minMessage = "Le titre doit comporter au moins {{ limit }} caractères",
     *     maxMessage = "Le titre ne doit pas comporter plus de {{ limit }} caractères",
     * )
     */
    private $titre;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min = 5,
     *     max = 100,
     *     minMessage = "La description doit comporter au moins {{ limit }} caractères",
     *     maxMessage = "La description ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="regle_cond", type="string", length=255, unique=false)
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min = 5,
     *     max = 100,
     *     minMessage = "Les règles doivent comporter au moins {{ limit }} caractères",
     *     maxMessage = "Les règles ne doivent pas comporter plus de {{ limit }} caractères",
     * )
     */
    private $regleCond;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_defaut", type="float", precision=10, unique=false)
     * @Assert\NotBlank()
     */
    private $prixDefaut;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     *
     */
    private $dateCreation;

    /**
     * @ORM\Column(name="annonce_update_at", type="datetime", nullable=true)
     * @Assert\IdenticalTo("today")
     */
    private $annonceUpdateAt;

    /**
     * @ORM\Column(name="etat", type="string", length=2)
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min = 1,
     *     max = 2,
     * )
     */
    private $annonceEtat;

    /**
     * @ORM\ManyToOne(targetEntity="LSI\MarketBundle\Entity\Mairie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mairie;

    /**
     * @ORM\ManyToOne(targetEntity="LSI\MarketBundle\Entity\Statut", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $statut;

    /**
     * @ORM\OneToOne(targetEntity="LSI\MarketBundle\Entity\Image", cascade={"persist"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $images;

    /**
     * @ORM\ManyToOne(targetEntity="LSI\MarketBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\OneToOne(targetEntity="LSI\MarketBundle\Entity\Prix", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     *
    private $prix;

    /**
    * @ORM\OneToOne(targetEntity="LSI\MarketBundle\Entity\Caracteristique", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    *
    private $caracteristique;*/



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Constructor
     */
    public function __construct()
    {

        $this->dateCreation = new \Datetime();
        $this->annonceEtat = 'A';
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set regleCond
     *
     * @param string $regleCond
     *
     * @return Annonce
     */
    public function setRegleCond($regleCond)
    {
        $this->regleCond = $regleCond;

        return $this;
    }

    /**
     * Get regleCond
     *
     * @return string
     */
    public function getRegleCond()
    {
        return $this->regleCond;
    }

    /**
     * Set prixDefaut
     *
     * @param float $prixDefaut
     *
     * @return Annonce
     */
    public function setPrixDefaut($prixDefaut)
    {
        $this->prixDefaut = $prixDefaut;

        return $this;
    }

    /**
     * Get prixDefaut
     *
     * @return \int
     */
    public function getPrixDefaut()
    {
        return $this->prixDefaut;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Annonce
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set prix
     *
     * @param \LSI\MarketBundle\Entity\Prix $prix
     *
     * @return Annonce
     *
    public function setPrix(\LSI\MarketBundle\Entity\Prix $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return \LSI\MarketBundle\Entity\Prix
     *
    public function getPrix()
    {
        return $this->prix;
    }*/

    /**
     * Set caracteristique
     *
     * @param \LSI\MarketBundle\Entity\Caracteristique $caracteristique
     *
     * @return Annonce
     *
    public function setCaracteristique(\LSI\MarketBundle\Entity\Caracteristique $caracteristique)
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    /**
     * Get caracteristique
     *
     * @return \LSI\MarketBundle\Entity\Caracteristique
     *
    public function getCaracteristique()
    {
        return $this->caracteristique;
    }*/

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set annonceUpdateAt
     *
     * @param \DateTime $annonceUpdateAt
     *
     * @return Annonce
     */
    public function setAnnonceUpdateAt($annonceUpdateAt)
    {
        $this->annonceUpdateAt = $annonceUpdateAt;

        return $this;
    }

    /**
     * Get annonceUpdateAt
     *
     * @return \DateTime
     */
    public function getAnnonceUpdateAt()
    {
        return $this->annonceUpdateAt;
    }

    /**
     * Set mairie
     *
     * @param \LSI\MarketBundle\Entity\Mairie $mairie
     *
     * @return Annonce
     */
    public function setMairie(\LSI\MarketBundle\Entity\Mairie $mairie)
    {
        $this->mairie = $mairie;

        return $this;
    }

    /**
     * Get mairie
     *
     * @return \LSI\MarketBundle\Entity\Mairie
     */
    public function getMairie()
    {
        return $this->mairie;
    }

    /**
     * Set statut
     *
     * @param \LSI\MarketBundle\Entity\Statut $statut
     *
     * @return Annonce
     */
    public function setStatut(\LSI\MarketBundle\Entity\Statut $statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \LSI\MarketBundle\Entity\Statut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set categorie
     *
     * @param \LSI\MarketBundle\Entity\Categorie $categorie
     *
     * @return Annonce
     */
    public function setCategorie(\LSI\MarketBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \LSI\MarketBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set images
     *
     * @param \LSI\MarketBundle\Entity\Image $images
     *
     */
    public function setImages(\LSI\MarketBundle\Entity\Image $images)
    {
        $this->images = $images;

        //return $this;
    }

    /**
     * Get images
     *
     * @return \LSI\MarketBundle\Entity\Image
     */
    public function getImages()
    {
        return $this->images;
    }


}
