<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="TEL", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $tel = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $email = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $rue = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="CP", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cp = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $ville = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMEROCARTEBANCAIRE", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numerocartebancaire = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DATEEXPIRATION", type="string", length=5, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $dateexpiration = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="CRYTPOGRAMME", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $crytpogramme = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $prenom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $login = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOTDEPASSE", type="string", length=255, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $motdepasse = 'NULL';

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;



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
     * Get the value of numerocartebancaire
     *
     * @return  int|null
     */
    public function getNumerocartebancaire()
    {
        return $this->numerocartebancaire;
    }

    /**
     * Set the value of numerocartebancaire
     *
     * @param  int|null  $numerocartebancaire
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
     * @return  int|null
     */
    public function getCrytpogramme()
    {
        return $this->crytpogramme;
    }

    /**
     * Set the value of crytpogramme
     *
     * @param  int|null  $crytpogramme
     *
     * @return  self
     */
    public function setCrytpogramme($crytpogramme)
    {
        $this->crytpogramme = $crytpogramme;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string|null  $nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return  string|null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string|null  $prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of login
     *
     * @return  string|null
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @param  string|null  $login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of motdepasse
     *
     * @return  string|null
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set the value of motdepasse
     *
     * @param  string|null  $motdepasse
     *
     * @return  self
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  \User
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  \User  $id
     *
     * @return  self
     */
    public function setId(User $id)
    {
        $this->id = $id;

        return $this;
    }

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
     * @see PasswordAuthenticatedUserInterface */
    public function getPassword(): string
    {
        // à remplacer éventuellement par la propriété contenant le mot de passe
        return $this->motdepasse;
    }

    public function setPassword(string $motdepasse): self
    {
        // à remplacer éventuellement par la propriété contenant le mot de passe
        $this->motdepasse = $motdepasse;
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
}
