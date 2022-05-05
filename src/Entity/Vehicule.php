<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="VEHICULE", indexes={@ORM\Index(name="index1", columns={"IDMODELE"})})
 * @ORM\Entity(repositoryClass=App\Repository\VehiculeRepository::class)
 */
class Vehicule
{
    /**
     * @var string
     *
     * @ORM\Column(name="IMMATRICULATION", type="string", length=9, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $immatriculation;

    /**
     * @var Modele
     *
     * @ORM\ManyToOne(targetEntity="Modele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMODELE", referencedColumnName="ID")
     * })
     */
    private $idmodele;



    /**
     * Get the value of immatriculation
     *
     * @return  string
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @param  string  $immatriculation
     *
     * @return  self
     */ 
    public function setImmatriculation(string $immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get the value of idmodele
     *
     * @return  Modele
     */ 
    public function getIdmodele()
    {
        return $this->idmodele;
    }

    /**
     * Set the value of idmodele
     *
     * @param  Modele  $idmodele
     *
     * @return  self
     */ 
    public function setIdmodele(Modele $idmodele)
    {
        $this->idmodele = $idmodele;

        return $this;
    }
}
