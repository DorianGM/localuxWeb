<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR", indexes={@ORM\Index(name="IDX_A178D1B9FC42FF9D", columns={"ID_LOCATIONSANS"})})
 * @ORM\Entity(repositoryClass=App\Repository\FormulesanschauffeurRepository::class)
 */
class Formulesanschauffeur extends Formule
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DUREE", type="time", nullable=true)
     */
    private $duree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMSINCLUS", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $nbkmsinclus;


    /**
     * @var Locationsanschauffeur
     *
     * @ORM\ManyToOne(targetEntity="Locationsanschauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_LOCATIONSANS", referencedColumnName="NUMLOCATION")
     * })
     */
    private $idLocationsans;



    /**
     * Get the value of duree
     *
     * @return  \DateTime|null
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @param  \DateTime|null  $duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of nbkmsinclus
     *
     * @return  string|null
     */ 
    public function getNbkmsinclus()
    {
        return $this->nbkmsinclus;
    }

    /**
     * Set the value of nbkmsinclus
     *
     * @param  string|null  $nbkmsinclus
     *
     * @return  self
     */ 
    public function setNbkmsinclus($nbkmsinclus)
    {
        $this->nbkmsinclus = $nbkmsinclus;

        return $this;
    }



    /**
     * Get the value of idLocationsans
     *
     * @return  Locationsanschauffeur
     */ 
    public function getIdLocationsans()
    {
        return $this->idLocationsans;
    }

    /**
     * Set the value of idLocationsans
     *
     * @param  Locationsanschauffeur  $idLocationsans
     *
     * @return  self
     */ 
    public function setIdLocationsans(Locationsanschauffeur $idLocationsans)
    {
        $this->idLocationsans = $idLocationsans;

        return $this;
    }
}
