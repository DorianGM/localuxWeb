<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="MODELE", indexes={@ORM\Index(name="I_FK_MODELE_TARIFICATION", columns={"ID_PAYER"}), @ORM\Index(name="I_FK_MODELE_VEHICULE", columns={"IMMATRICULATION"})})
 * @ORM\Entity(repositoryClass=App\Repository\ModeleRepository::class)
 */
class Modele
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
     *   @ORM\JoinColumn(name="ID_PAYER", referencedColumnName="ID")
     * })
     */
    private $idPayer;

    /**
     * @var Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IMMATRICULATION", referencedColumnName="IMMATRICULATION")
     * })
     */
    private $immatriculation;

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

    public function getIdPayer(): ?Tarification
    {
        return $this->idPayer;
    }

    public function setIdPayer(?Tarification $idPayer): self
    {
        $this->idPayer = $idPayer;

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
