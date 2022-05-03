<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formuleavecchauffeur
 *
 * @ORM\Table(name="FORMULEAVECCHAUFFEUR")
 * @ORM\Entity
 */
class Formuleavecchauffeur
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $lieu = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIF", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $tarif = 'NULL';

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
