<?php

namespace App\Entity;

use App\Repository\ContenidoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContenidoRepository::class)
 */
class Contenido
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="idContenido")
     */
    private $idContenido;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TipoContenido;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DescripcionContenido;

    /**
     * @ORM\Column(type="string")
     */
    private $EnlaceContenido;

    public function getId(): ?int
    {
        return $this->idContenido;
    }

    public function getTipoContenido(): ?string
    {
        return $this->TipoContenido;
    }

    public function setTipoContenido(string $TipoContenido): self
    {
        $this->TipoContenido = $TipoContenido;

        return $this;
    }

    public function getDescripcionContenido(): ?string
    {
        return $this->DescripcionContenido;
    }

    public function setDescripcionContenido(string $DescripcionContenido): self
    {
        $this->DescripcionContenido = $DescripcionContenido;

        return $this;
    }

    public function getEnlaceContenido(): ?string
    {
        return $this->EnlaceContenido;
    }

    public function setEnlaceContenido(string $EnlaceContenido): self
    {
        $this->EnlaceContenido = $EnlaceContenido;

        return $this;
    }
}
