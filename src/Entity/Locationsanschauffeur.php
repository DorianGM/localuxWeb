<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationsanschauffeur
 *
 * @ORM\Table(name="LOCATIONSANSCHAUFFEUR")
 * @ORM\Entity(repositoryClass=App\Repository\LocationsanschauffeurRepository::class)
 */
class Locationsanschauffeur extends Location
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMDEPART", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $nbkmdepart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMRETOUR", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $nbkmretour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATELOCATION", type="date", nullable=true)
     */
    private $datelocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANTREGLE", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantregle;

    

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHREDEPARTREEL", type="datetime", nullable=true)
     */
    private $datehredepartreel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHRERETOURREEL", type="datetime", nullable=true)
     */
    private $datehreretourreel;

    /**
     * Get the value of nbkmdepart
     *
     * @return  string|null
     */ 
    public function getNbkmdepart()
    {
        return $this->nbkmdepart;
    }

    /**
     * Set the value of nbkmdepart
     *
     * @param  string|null  $nbkmdepart
     *
     * @return  self
     */ 
    public function setNbkmdepart($nbkmdepart)
    {
        $this->nbkmdepart = $nbkmdepart;

        return $this;
    }

    /**
     * Get the value of nbkmretour
     *
     * @return  string|null
     */ 
    public function getNbkmretour()
    {
        return $this->nbkmretour;
    }

    /**
     * Set the value of nbkmretour
     *
     * @param  string|null  $nbkmretour
     *
     * @return  self
     */ 
    public function setNbkmretour($nbkmretour)
    {
        $this->nbkmretour = $nbkmretour;

        return $this;
    }

    /**
     * Get the value of montantregle
     *
     * @return  string|null
     */ 
    public function getMontantregle()
    {
        return $this->montantregle;
    }

    /**
     * Set the value of montantregle
     *
     * @param  string|null  $montantregle
     *
     * @return  self
     */ 
    public function setMontantregle($montantregle)
    {
        $this->montantregle = $montantregle;

        return $this;
    }

    /**
     * Get the value of datehredepartreel
     *
     * @return  \DateTime|null
     */ 
    public function getDatehredepartreel()
    {
        return $this->datehredepartreel;
    }

    /**
     * Set the value of datehredepartreel
     *
     * @param  \DateTime|null  $datehredepartreel
     *
     * @return  self
     */ 
    public function setDatehredepartreel($datehredepartreel)
    {
        $this->datehredepartreel = $datehredepartreel;

        return $this;
    }

    /**
     * Get the value of datehreretourreel
     *
     * @return  \DateTime|null
     */ 
    public function getDatehreretourreel()
    {
        return $this->datehreretourreel;
    }

    /**
     * Set the value of datehreretourreel
     *
     * @param  \DateTime|null  $datehreretourreel
     *
     * @return  self
     */ 
    public function setDatehreretourreel($datehreretourreel)
    {
        $this->datehreretourreel = $datehreretourreel;

        return $this;
    }

}
