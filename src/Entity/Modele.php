<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="MODELE", indexes={@ORM\Index(name="I_FK_MODELE_TARIFICATION", columns={"IDTARIFICATION"})})
 * @ORM\Entity(repositoryClass=App\Repository\ModeleRepository::class)
 */
class Modele
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
     * @var Tarification
     *
     * @ORM\ManyToOne(targetEntity="Tarification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDTARIFICATION", referencedColumnName="ID")
     * })
     */
    private $idtarification;



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
     * Get the value of idtarification
     *
     * @return  \Tarification
     */ 
    public function getIdtarification()
    {
        return $this->idtarification;
    }

    /**
     * Set the value of idtarification
     *
     * @param  \Tarification  $idtarification
     *
     * @return  self
     */ 
    public function setIdtarification(Tarification $idtarification)
    {
        $this->idtarification = $idtarification;

        return $this;
    }
}
