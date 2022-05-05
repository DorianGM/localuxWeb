<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="FORMULE", indexes={@ORM\Index(name="I_FK_FORMULE_TARIFICATION", columns={"ID_TARIFICATION"})})
 * @ORM\Entity(repositoryClass=App\Repository\FormuleRepository::class)
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"formule" = "Formule", "avecchauffeur" = "Formuleavecchauffeur", "sanschauffeur" = "Formulesanschauffeur"})
 */
class Formule
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $image;

    /**
     * @var Tarification
     *
     * @ORM\ManyToOne(targetEntity="Tarification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TARIFICATION", referencedColumnName="ID")
     * })
     */
    private $idTarification;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     *
     * @return  string|null
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @param  string|null  $libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of idTarification
     *
     * @return  \Tarification
     */ 
    public function getIdTarification()
    {
        return $this->idTarification;
    }

    /**
     * Set the value of idTarification
     *
     * @param  \Tarification  $idTarification
     *
     * @return  self
     */ 
    public function setIdTarification(Tarification $idTarification)
    {
        $this->idTarification = $idTarification;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return  string|null
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  string|null  $image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }   
}
