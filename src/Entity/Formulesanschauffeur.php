<?php

namespace App\Entity;

use App\Repository\FormulairesanschauffeurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR")
 * @ORM\Entity(repositoryClass=App\Repository\FormulesanschauffeurRepository::class)
 */
class Formulesanschauffeur
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DUREE", type="time", nullable=true)
     */
    private $duree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMSINCLUS", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $nbkmsinclus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var Formule
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Formule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(?\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNbkmsinclus(): ?string
    {
        return $this->nbkmsinclus;
    }

    public function setNbkmsinclus(?string $nbkmsinclus): self
    {
        $this->nbkmsinclus = $nbkmsinclus;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getId(): ?Formule
    {
        return $this->id;
    }

    public function setId(?Formule $id): self
    {
        $this->id = $id;

        return $this;
    }


}
