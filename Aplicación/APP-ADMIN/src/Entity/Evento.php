<?php

namespace App\Entity;

use App\Repository\EventoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventoRepository::class)
 */
class Evento
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="idEvento")
     */
    private $idEvento;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TipoEvento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NombreEvento;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $DescripcionEvento;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $FechaEvento;

    public function getId(): ?int
    {
        return $this->idEvento;
    }

    public function getTipoEvento(): ?string
    {
        return $this->TipoEvento;
    }

    public function setTipoEvento(?string $TipoEvento): self
    {
        $this->TipoEvento = $TipoEvento;

        return $this;
    }

    public function getNombreEvento(): ?string
    {
        return $this->NombreEvento;
    }

    public function setNombreEvento(string $NombreEvento): self
    {
        $this->NombreEvento = $NombreEvento;

        return $this;
    }

    public function getDescripcionEvento(): ?string
    {
        return $this->DescripcionEvento;
    }

    public function setDescripcionEvento(?string $DescripcionEvento): self
    {
        $this->DescripcionEvento = $DescripcionEvento;

        return $this;
    }

    public function getFechaEvento(): ?\DateTimeInterface
    {
        return $this->FechaEvento;
    }

    public function setFechaEvento(?\DateTimeInterface $FechaEvento): self
    {
        $this->FechaEvento = $FechaEvento;

        return $this;
    }

}
