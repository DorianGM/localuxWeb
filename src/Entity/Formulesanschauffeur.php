<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR")
 * @ORM\Entity
 */
class Formulesanschauffeur
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DUREE", type="time", nullable=true, options={"default"="NULL"})
     */
    private $duree = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMSINCLUS", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $nbkmsinclus = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $libelle = 'NULL';

    /**
     * @var \Formule
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Formule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;



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
     * @return  \Formule
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  \Formule  $id
     *
     * @return  self
     */ 
    public function setId(Formule $id)
    {
        $this->id = $id;

        return $this;
    }
}
