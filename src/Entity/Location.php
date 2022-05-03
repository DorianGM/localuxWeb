<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="LOCATION", indexes={@ORM\Index(name="I_FK_LOCATION_VEHICULE", columns={"IMMATRICULATION"}), @ORM\Index(name="I_FK_LOCATION_CLIENT", columns={"ID"})})
 * @ORM\Entity(repositoryClass=App\Repository\LocationRepository::class)
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
     * @var Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

    /**
     * @var Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IMMATRICULATION", referencedColumnName="IMMATRICULATION")
     * })
     */
    private $immatriculation;

    public function getNumlocation(): ?int
    {
        return $this->numlocation;
    }

    public function getDatelocation(): ?\DateTimeInterface
    {
        return $this->datelocation;
    }

    public function setDatelocation(?\DateTimeInterface $datelocation): self
    {
        $this->datelocation = $datelocation;

        return $this;
    }

    public function getMontantregle(): ?string
    {
        return $this->montantregle;
    }

    public function setMontantregle(?string $montantregle): self
    {
        $this->montantregle = $montantregle;

        return $this;
    }

    public function getDatehredepartprevu(): ?\DateTimeInterface
    {
        return $this->datehredepartprevu;
    }

    public function setDatehredepartprevu(?\DateTimeInterface $datehredepartprevu): self
    {
        $this->datehredepartprevu = $datehredepartprevu;

        return $this;
    }

    public function getDatehreretourprevu(): ?\DateTimeInterface
    {
        return $this->datehreretourprevu;
    }

    public function setDatehreretourprevu(?\DateTimeInterface $datehreretourprevu): self
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

    public function getId(): ?Client
    {
        return $this->id;
    }

    public function setId(?Client $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getImmatriculation(): ?Vehicule
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?Vehicule $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }


}
