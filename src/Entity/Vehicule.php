<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="VEHICULE")
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var string
     *
     * @ORM\Column(name="IMMATRICULATION", type="string", length=9, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $immatriculation;

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }


}
