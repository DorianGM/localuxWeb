<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarification
 *
 * @ORM\Table(name="TARIFICATION")
 * @ORM\Entity
 */
class Tarification
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
     * @ORM\Column(name="TARIF", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $tarif = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
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


}
