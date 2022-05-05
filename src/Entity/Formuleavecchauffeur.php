<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formuleavecchauffeur
 *
 * @ORM\Table(name="FORMULEAVECCHAUFFEUR", indexes={@ORM\Index(name="IDX_92CC0F7E1781CD3", columns={"ID_LOCATIONAVEC"})})
 * @ORM\Entity(repositoryClass=App\Repository\FormuleavecchauffeurRepository::class)
 */
class Formuleavecchauffeur extends Formule
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIF", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tarif;



    /**
     * @var Locationavecchauffeur
     *
     * @ORM\ManyToOne(targetEntity="Locationavecchauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_LOCATIONAVEC", referencedColumnName="NUMLOCATION")
     * })
     */
    private $idLocationavec;



    /**
     * Get the value of lieu
     *
     * @return  string|null
     */ 
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set the value of lieu
     *
     * @param  string|null  $lieu
     *
     * @return  self
     */ 
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get the value of tarif
     *
     * @return  string|null
     */ 
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set the value of tarif
     *
     * @param  string|null  $tarif
     *
     * @return  self
     */ 
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    

    /**
     * Get the value of idLocationavec
     *
     * @return  Locationavecchauffeur
     */ 
    public function getIdLocationavec()
    {
        return $this->idLocationavec;
    }

    /**
     * Set the value of idLocationavec
     *
     * @param  Locationavecchauffeur  $idLocationavec
     *
     * @return  self
     */ 
    public function setIdLocationavec(Locationavecchauffeur $idLocationavec)
    {
        $this->idLocationavec = $idLocationavec;

        return $this;
    }
}
