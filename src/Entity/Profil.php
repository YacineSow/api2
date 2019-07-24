<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProfilRepository")
 */
class Profil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_profil;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeProfil(): ?string
    {
        return $this->type_profil;
    }

    public function setTypeProfil(string $type_profil): self
    {
        $this->type_profil = $type_profil;

        return $this;
    }
}
