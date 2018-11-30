<?php

namespace LSI\MarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="administre")
 * @ORM\Entity(repositoryClass="LSI\MarketBundle\Repository\AdministreRepository")
 */
class Administre
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
     * @ORM\Column(name="prenom", type="string", length=50)
     *
     */
    private $prenom;

    /**
     * @var string
     * @ORM\Column(name="langue_mat", type="string", length=4)
     *
     */
    private $langueMat;

    /**
     * @var string
     * @ORM\Column(name="photo_profil", type="string", length=255, nullable=true)
     */
    private $photoProfil;

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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Administre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set langueMat
     *
     * @param string $langueMat
     *
     * @return Administre
     */
    public function setLangueMat($langueMat)
    {
        $this->langueMat = $langueMat;

        return $this;
    }

    /**
     * Get langueMat
     *
     * @return string
     */
    public function getLangueMat()
    {
        return $this->langueMat;
    }

    /**
     * Set photoProfil
     *
     * @param string $photoProfil
     *
     * @return Administre
     */
    public function setPhotoProfil($photoProfil)
    {
        $this->photoProfil = $photoProfil;

        return $this;
    }

    /**
     * Get photoProfil
     *
     * @return string
     */
    public function getPhotoProfil()
    {
        return $this->photoProfil;
    }
}

