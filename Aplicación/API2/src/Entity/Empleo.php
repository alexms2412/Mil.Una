<?php

namespace App\Entity;

use App\Repository\EmpleoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmpleoRepository::class)
 */
class Empleo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="idEmpleo")
     */
    private $idEmpleo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreEmpleo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $empresaEmpleo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $enlaceEmpleo;

    public function __construct()
    {
        $this->solicitas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->idEmpleo;
    }

    public function getNombreEmpleo(): ?string
    {
        return $this->nombreEmpleo;
    }

    public function setNombreEmpleo(string $nombreEmpleo): self
    {
        $this->nombreEmpleo = $nombreEmpleo;

        return $this;
    }

    public function getEmpresaEmpleo(): ?string
    {
        return $this->empresaEmpleo;
    }

    public function setEmpresaEmpleo(?string $empresaEmpleo): self
    {
        $this->empresaEmpleo = $empresaEmpleo;

        return $this;
    }

    public function getEnlaceEmpleo(): ?string
    {
        return $this->enlaceEmpleo;
    }

    public function setEnlaceEmpleo(?string $enlaceEmpleo): self
    {
        $this->enlaceEmpleo = $enlaceEmpleo;

        return $this;
    }

   
}
