<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="FORMULE", indexes={@ORM\Index(name="I_FK_FORMULE_TARIFICATION", columns={"ID_CONCERNER"})})
 * @ORM\Entity
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
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $libelle = 'NULL';

    /**
     * @var \Tarification
     *
     * @ORM\ManyToOne(targetEntity="Tarification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONCERNER", referencedColumnName="ID")
     * })
     */
    private $idConcerner;



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
     * Get the value of idConcerner
     *
     * @return  \Tarification
     */ 
    public function getIdConcerner()
    {
        return $this->idConcerner;
    }

    /**
     * Set the value of idConcerner
     *
     * @param  \Tarification  $idConcerner
     *
     * @return  self
     */ 
    public function setIdConcerner(Tarification $idConcerner)
    {
        $this->idConcerner = $idConcerner;

        return $this;
    }
}
