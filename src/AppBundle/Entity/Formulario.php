<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulario
 *
 * @ORM\Table(name="formulario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormularioRepository")
 */
class Formulario
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
     * @var string
     *
     * @ORM\Column(name="nroPreinscripcion", type="string", length=255)
     */
    private $nroPreinscripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaPreinscripcion", type="datetime")
     */
    private $fechaPreinscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=255)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="nroSorteo", type="string", length=255)
     */
    private $nroSorteo;


    /**
     * @ORM\ManyToOne(targetEntity="EstadoFormulario", inversedBy="formularios")
     * @ORM\JoinColumn(name="estadoformulario_id", referencedColumnName="id")
     */
    private $estado;


    /**
     * @ORM\ManyToOne(targetEntity="Postulante", inversedBy="formularios", cascade={"persist"})
     * @ORM\JoinColumn(name="postulante_id", referencedColumnName="id")
     */
    private $postulante;


    public function __construct(){

        $rand =substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
        $this->setNroPreinscripcion($rand);

        $this->setFechaPreinscripcion( new \DateTime );

        $this->setNroSorteo(0);

    }

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
     * Set nroPreinscripcion
     *
     * @param string $nroPreinscripcion
     *
     * @return Formulario
     */
    public function setNroPreinscripcion($nroPreinscripcion)
    {
        $this->nroPreinscripcion = $nroPreinscripcion;

        return $this;
    }

    /**
     * Get nroPreinscripcion
     *
     * @return string
     */
    public function getNroPreinscripcion()
    {
        return $this->nroPreinscripcion;
    }

    /**
     * Set fechaPreinscripcion
     *
     * @param \DateTime $fechaPreinscripcion
     *
     * @return Formulario
     */
    public function setFechaPreinscripcion($fechaPreinscripcion)
    {
        $this->fechaPreinscripcion = $fechaPreinscripcion;

        return $this;
    }

    /**
     * Get fechaPreinscripcion
     *
     * @return \DateTime
     */
    public function getFechaPreinscripcion()
    {
        return $this->fechaPreinscripcion;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return Formulario
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
     * Set nroSorteo
     *
     * @param string $nroSorteo
     *
     * @return Formulario
     */
    public function setNroSorteo($nroSorteo)
    {
        $this->nroSorteo = $nroSorteo;

        return $this;
    }

    /**
     * Get nroSorteo
     *
     * @return string
     */
    public function getNroSorteo()
    {
        return $this->nroSorteo;
    }

    /**
     * Set estado
     *
     * @param \AppBundle\Entity\EstadoFormulario $estado
     *
     * @return Formulario
     */
    public function setEstado(\AppBundle\Entity\EstadoFormulario $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \AppBundle\Entity\EstadoFormulario
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set postulante
     *
     * @param \AppBundle\Entity\Postulante $postulante
     *
     * @return Formulario
     */
    public function setPostulante(\AppBundle\Entity\Postulante $postulante = null)
    {
        $this->postulante = $postulante;

        return $this;
    }

    /**
     * Get postulante
     *
     * @return \AppBundle\Entity\Postulante
     */
    public function getPostulante()
    {
        return $this->postulante;
    }
}
