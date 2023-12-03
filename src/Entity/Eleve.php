<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EleveRepository::class)
 */
class Eleve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Certificat::class, inversedBy="eleves")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Certificat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $classe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $certificat_postulé;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCertificat(): ?Certificat
    {
        return $this->Certificat;
    }

    public function setCertificat(?Certificat $Certificat): self
    {
        $this->Certificat = $Certificat;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getCertificatPostulé(): ?string
    {
        return $this->certificat_postulé;
    }

    public function setCertificatPostulé(string $certificat_postulé): self
    {
        $this->certificat_postulé = $certificat_postulé;

        return $this;
    }
}
