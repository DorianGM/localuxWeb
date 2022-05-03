<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="FORMULE", indexes={@ORM\Index(name="I_FK_FORMULE_TARIFICATION", columns={"ID_CONCERNER"})})
 * @ORM\Entity(repositoryClass=App\Repository\FormuleRepository::class)
 */
class Formule
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var Tarification
     *
     * @ORM\ManyToOne(targetEntity="Tarification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONCERNER", referencedColumnName="ID")
     * })
     */
    private $idConcerner;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdConcerner(): ?Tarification
    {
        return $this->idConcerner;
    }

    public function setIdConcerner(?Tarification $idConcerner): self
    {
        $this->idConcerner = $idConcerner;

        return $this;
    }


}
