<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="SALARIE")
 * @ORM\Entity(repositoryClass=App\Repository\SalarieRepository::class)
 */
class Salarie extends User
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="POSTE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $poste;




    /**
     * Get the value of poste
     *
     * @return  string|null
     */ 
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set the value of poste
     *
     * @param  string|null  $poste
     *
     * @return  self
     */ 
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }


}
