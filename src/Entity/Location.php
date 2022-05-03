<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="LOCATION", indexes={@ORM\Index(name="I_FK_LOCATION_VEHICULE", columns={"IMMATRICULATION"}), @ORM\Index(name="I_FK_LOCATION_CLIENT", columns={"ID"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMLOCATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numlocation;

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
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IMMATRICULATION", referencedColumnName="IMMATRICULATION")
     * })
     */
    private $immatriculation;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;



    /**
     * Get the value of numlocation
     *
     * @return  int
     */ 
    public function getNumlocation()
    {
        return $this->numlocation;
    }

    /**
     * Set the value of numlocation
     *
     * @param  int  $numlocation
     *
     * @return  self
     */ 
    public function setNumlocation(int $numlocation)
    {
        $this->numlocation = $numlocation;

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

    /**
     * Get the value of immatriculation
     *
     * @return  \Vehicule
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @param  \Vehicule  $immatriculation
     *
     * @return  self
     */ 
    public function setImmatriculation(Vehicule $immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  \Client
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  \Client  $id
     *
     * @return  self
     */ 
    public function setId(Client $id)
    {
        $this->id = $id;

        return $this;
    }
}
