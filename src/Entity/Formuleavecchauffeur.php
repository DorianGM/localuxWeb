<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formuleavecchauffeur
 *
 * @ORM\Table(name="FORMULEAVECCHAUFFEUR")
 * @ORM\Entity(repositoryClass=App\Repository\FormulaireavecchauffeurRepository::class)
 */
class Formuleavecchauffeur
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIF", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tarif;

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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): self
    {
        $this->tarif = $tarif;

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
