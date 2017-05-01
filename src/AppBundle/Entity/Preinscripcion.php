<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preinscripcion
 *
 * @ORM\Table(name="preinscripcion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreinscripcionRepository")
 */
class Preinscripcion
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaApertura", type="datetime")
     */
    private $fechaApertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCierre", type="datetime")
     */
    private $fechaCierre;

    /**
     * @var int
     *
     * @ORM\Column(name="ultimoNroSorteo", type="integer")
     */
    private $ultimoNroSorteo;

    /**
     * @var int
     *
     * @ORM\Column(name="vacantes", type="integer")
     */
    private $vacantes;


    //private $formularios;


    public function __construct(){
        $this->setUltimoNroSorteo(0);
    }

    public function asignarNroSorteo(){
        $nro =  $this->getUltimoNroSorteo() + 1;
        $this->setUltimoNroSorteo($nro);
        return $this->getUltimoNroSorteo();
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
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     *
     * @return Preinscripcion
     */
    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;

        return $this;
    }

    /**
     * Get fechaApertura
     *
     * @return \DateTime
     */
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     *
     * @return Preinscripcion
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set ultimoNroSorteo
     *
     * @param integer $ultimoNroSorteo
     *
     * @return Preinscripcion
     */
    public function setUltimoNroSorteo($ultimoNroSorteo)
    {
        $this->ultimoNroSorteo = $ultimoNroSorteo;

        return $this;
    }

    /**
     * Get ultimoNroSorteo
     *
     * @return int
     */
    public function getUltimoNroSorteo()
    {
        return $this->ultimoNroSorteo;
    }

    /**
     * Set vacantes
     *
     * @param integer $vacantes
     *
     * @return Preinscripcion
     */
    public function setVacantes($vacantes)
    {
        $this->vacantes = $vacantes;

        return $this;
    }

    /**
     * Get vacantes
     *
     * @return int
     */
    public function getVacantes()
    {
        return $this->vacantes;
    }
}

