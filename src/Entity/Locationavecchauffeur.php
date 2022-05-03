<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationavecchauffeur
 *
 * @ORM\Table(name="LOCATIONAVECCHAUFFEUR")
 * @ORM\Entity(repositoryClass=App\Repository\LocationavecchauffeurRepository::class)
 */
class Locationavecchauffeur
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
