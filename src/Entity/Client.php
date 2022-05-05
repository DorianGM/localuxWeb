<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT")
 * @ORM\Entity(repositoryClass=App\Repository\ClientRepository::class)
 */
class Client extends User
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="TEL", type="integer", nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $rue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CP", type="integer", nullable=true)
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMEROCARTEBANCAIRE", type="string", length=16, nullable=true)
     */
    private $numerocartebancaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DATEEXPIRATION", type="string", length=5, nullable=true, options={"fixed"=true})
     */
    private $dateexpiration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CRYTPOGRAMME", type="string", length=3, nullable=true)
     */
    private $crytpogramme;




    /**
     * Get the value of tel
     *
     * @return  int|null
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @param  int|null  $tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string|null
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string|null  $email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of rue
     *
     * @return  string|null
     */ 
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set the value of rue
     *
     * @param  string|null  $rue
     *
     * @return  self
     */ 
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get the value of cp
     *
     * @return  int|null
     */ 
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @param  int|null  $cp
     *
     * @return  self
     */ 
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get the value of ville
     *
     * @return  string|null
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @param  string|null  $ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of numerocartebancaire
     *
     * @return  string|null
     */ 
    public function getNumerocartebancaire()
    {
        return $this->numerocartebancaire;
    }

    /**
     * Set the value of numerocartebancaire
     *
     * @param  string|null  $numerocartebancaire
     *
     * @return  self
     */ 
    public function setNumerocartebancaire($numerocartebancaire)
    {
        $this->numerocartebancaire = $numerocartebancaire;

        return $this;
    }

    /**
     * Get the value of dateexpiration
     *
     * @return  string|null
     */ 
    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }

    /**
     * Set the value of dateexpiration
     *
     * @param  string|null  $dateexpiration
     *
     * @return  self
     */ 
    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }

    /**
     * Get the value of crytpogramme
     *
     * @return  string|null
     */ 
    public function getCrytpogramme()
    {
        return $this->crytpogramme;
    }

    /**
     * Set the value of crytpogramme
     *
     * @param  string|null  $crytpogramme
     *
     * @return  self
     */ 
    public function setCrytpogramme($crytpogramme)
    {
        $this->crytpogramme = $crytpogramme;

        return $this;
    }


}
