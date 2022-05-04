<?php

namespace App\Entity;

use App\Repository\ClientRepository;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT")
 * @ORM\Entity(repositoryClass=App\Repository\ClientRepository::class)
 */
class Client extends User implements UserInterface, PasswordAuthenticatedUserInterface
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
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOTDEPASSE", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $motdepasse;

    /**
     * @ORM\Column(type="json") */
    private $roles = [];
    /**
     * A visual identifier that represents this user. * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->login;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCp(): ?int
    {
        return $this->cp;
    }

    public function setCp(?int $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNumerocartebancaire(): ?string
    {
        return $this->numerocartebancaire;
    }

    public function setNumerocartebancaire(?string $numerocartebancaire): self
    {
        $this->numerocartebancaire = $numerocartebancaire;

        return $this;
    }

    public function getDateexpiration(): ?string
    {
        return $this->dateexpiration;
    }

    public function setDateexpiration(?string $dateexpiration): self
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }

    public function getCrytpogramme(): ?string
    {
        return $this->crytpogramme;
    }

    public function setCrytpogramme(?string $crytpogramme): self
    {
        $this->crytpogramme = $crytpogramme;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->motdepasse;
    }

    public function setPassword(?string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml. *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }
    /**
     * @see UserInterface */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it he // $this->plainPassword = null;
    }
}
