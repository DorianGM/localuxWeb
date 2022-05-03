<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationsanschauffeur
 *
 * @ORM\Table(name="LOCATIONSANSCHAUFFEUR")
 * @ORM\Entity
 */
class Locationsanschauffeur
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMDEPART", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $nbkmdepart = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMRETOUR", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $nbkmretour = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATELOCATION", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datelocation = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANTREGLE", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $montantregle = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHREDEPARTPREVU", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datehredepartprevu = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHRERETOURPREVU", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datehreretourprevu = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHREDEPARTREEL", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datehredepartreel = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHRERETOURREEL", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datehreretourreel = 'NULL';

    /**
     * @var Location
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;



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

    public function getDatehredepartreel(): ?\DateTimeInterface
    {
        return $this->datehredepartreel;
    }

    public function setDatehredepartreel(?\DateTimeInterface $datehredepartreel): self
    {
        $this->datehredepartreel = $datehredepartreel;

        return $this;
    }

    public function getDatehreretourreel(): ?\DateTimeInterface
    {
        return $this->datehreretourreel;
    }

    public function setDatehreretourreel(?\DateTimeInterface $datehreretourreel): self
    {
        $this->datehreretourreel = $datehreretourreel;

        return $this;
    }

    public function getNumlocation(): ?Location
    {
        return $this->numlocation;
    }

    public function setNumlocation(?Location $numlocation): self
    {
        $this->numlocation = $numlocation;

        return $this;
    }
}
