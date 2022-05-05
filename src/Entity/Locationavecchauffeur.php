<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationavecchauffeur
 *
 * @ORM\Table(name="LOCATIONAVECCHAUFFEUR")
 * @ORM\Entity(repositoryClass=App\Repository\LocationavecchauffeurRepository::class)
 */
class Locationavecchauffeur extends Location
{
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
     * @ORM\Column(name="DATEHREDEPARTPREVU", type="datetime", nullable=true)
     */
    private $datehredepartprevu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHRERETOURPREVU", type="datetime", nullable=true)
     */
    private $datehreretourprevu;

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
     * Get the value of datelocation
     *
     * @return  \DateTime|null
     */ 
    public function getDatelocation()
    {
        return $this->datelocation;
    }

    /**
     * Set the value of datelocation
     *
     * @param  \DateTime|null  $datelocation
     *
     * @return  self
     */ 
    public function setDatelocation($datelocation)
    {
        $this->datelocation = $datelocation;

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
     * Get the value of datehredepartprevu
     *
     * @return  \DateTime|null
     */ 
    public function getDatehredepartprevu()
    {
        return $this->datehredepartprevu;
    }

    /**
     * Set the value of datehredepartprevu
     *
     * @param  \DateTime|null  $datehredepartprevu
     *
     * @return  self
     */ 
    public function setDatehredepartprevu($datehredepartprevu)
    {
        $this->datehredepartprevu = $datehredepartprevu;

        return $this;
    }

    /**
     * Get the value of datehreretourprevu
     *
     * @return  \DateTime|null
     */ 
    public function getDatehreretourprevu()
    {
        return $this->datehreretourprevu;
    }

    /**
     * Set the value of datehreretourprevu
     *
     * @param  \DateTime|null  $datehreretourprevu
     *
     * @return  self
     */ 
    public function setDatehreretourprevu($datehreretourprevu)
    {
        $this->datehreretourprevu = $datehreretourprevu;

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
