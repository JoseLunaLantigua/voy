<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * eventos
 *
 * @ORM\Table(name="eventos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\eventosRepository")
 */
class eventos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="creada_por", type="integer")
     */
    private $creadaPor;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_de_evento", type="integer")
     */
    private $tipoDeEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcin", type="text", nullable=true)
     */
    private $descripcin;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_boletos", type="integer", nullable=true)
     */
    private $cantidadBoletos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_evento", type="date")
     */
    private $fechaEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="Latitud", type="string", length=255, nullable=true)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="string", length=255, nullable=true)
     */
    private $longitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set creadaPor
     *
     * @param integer $creadaPor
     *
     * @return eventos
     */
    public function setCreadaPor($creadaPor)
    {
        $this->creadaPor = $creadaPor;

        return $this;
    }

    /**
     * Get creadaPor
     *
     * @return int
     */
    public function getCreadaPor()
    {
        return $this->creadaPor;
    }

    /**
     * Set tipoDeEvento
     *
     * @param integer $tipoDeEvento
     *
     * @return eventos
     */
    public function setTipoDeEvento($tipoDeEvento)
    {
        $this->tipoDeEvento = $tipoDeEvento;

        return $this;
    }

    /**
     * Get tipoDeEvento
     *
     * @return int
     */
    public function getTipoDeEvento()
    {
        return $this->tipoDeEvento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return eventos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcin
     *
     * @param string $descripcin
     *
     * @return eventos
     */
    public function setDescripcin($descripcin)
    {
        $this->descripcin = $descripcin;

        return $this;
    }

    /**
     * Get descripcin
     *
     * @return string
     */
    public function getDescripcin()
    {
        return $this->descripcin;
    }

    /**
     * Set cantidadBoletos
     *
     * @param integer $cantidadBoletos
     *
     * @return eventos
     */
    public function setCantidadBoletos($cantidadBoletos)
    {
        $this->cantidadBoletos = $cantidadBoletos;

        return $this;
    }

    /**
     * Get cantidadBoletos
     *
     * @return int
     */
    public function getCantidadBoletos()
    {
        return $this->cantidadBoletos;
    }

    /**
     * Set fechaEvento
     *
     * @param \DateTime $fechaEvento
     *
     * @return eventos
     */
    public function setFechaEvento($fechaEvento)
    {
        $this->fechaEvento = $fechaEvento;

        return $this;
    }

    /**
     * Get fechaEvento
     *
     * @return \DateTime
     */
    public function getFechaEvento()
    {
        return $this->fechaEvento;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     *
     * @return eventos
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     *
     * @return eventos
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return eventos
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return eventos
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return eventos
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return eventos
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}

