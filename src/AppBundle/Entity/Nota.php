<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 *
 * @ORM\Table(name="nota")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotaRepository")
 */
class Nota
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
     * @var datetime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=255)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="EstadoNota", inversedBy="notas")
     * @ORM\JoinColumn(name="estadonota_id", referencedColumnName="id")
     */
    private $estado;

     /**
     * @ORM\ManyToOne(targetEntity="Destinatario", inversedBy="notas")
     * @ORM\JoinColumn(name="destinatario_id", referencedColumnName="id")
     */
    private $destinatario;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    public function __construct()
    {
        //$this->setDestinatario();
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Nota
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return Nota
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Nota
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado
     *
     * @param \AppBundle\Entity\EstadoNota $estado
     *
     * @return Nota
     */
    public function setEstado(\AppBundle\Entity\EstadoNota $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \AppBundle\Entity\EstadoNota
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set destinatario
     *
     * @param \AppBundle\Entity\Destinatario $destinatario
     *
     * @return Nota
     */
    public function setDestinatario(\AppBundle\Entity\Destinatario $destinatario = null)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return \AppBundle\Entity\Destinatario
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}
