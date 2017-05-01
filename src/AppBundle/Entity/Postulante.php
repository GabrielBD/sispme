<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postulante
 *
 * @ORM\Table(name="postulante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostulanteRepository")
 */
class Postulante
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
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=255)
     */
    private $nombres;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimiento", type="datetime")
     */
    private $fechaNacimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var int
     *
     * @ORM\Column(name="edadal30dejunio", type="integer")
     */
    private $edadal30dejunio;

    /**
     * @var string
     *
     * @ORM\Column(name="nacionalidad", type="string", length=255)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonos", type="string", length=255)
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="viveCon", type="string", length=255)
     */
    private $viveCon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hnoMismaEdad", type="boolean")
     */
    private $hnoMismaEdad;


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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Postulante
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Postulante
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Postulante
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Postulante
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set edadal30dejunio
     *
     * @param integer $edadal30dejunio
     *
     * @return Postulante
     */
    public function setEdadal30dejunio($edadal30dejunio)
    {
        $this->edadal30dejunio = $edadal30dejunio;

        return $this;
    }

    /**
     * Get edadal30dejunio
     *
     * @return integer
     */
    public function getEdadal30dejunio()
    {
        return $this->edadal30dejunio;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     *
     * @return Postulante
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Postulante
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     *
     * @return Postulante
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Postulante
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set viveCon
     *
     * @param string $viveCon
     *
     * @return Postulante
     */
    public function setViveCon($viveCon)
    {
        $this->viveCon = $viveCon;

        return $this;
    }

    /**
     * Get viveCon
     *
     * @return string
     */
    public function getViveCon()
    {
        return $this->viveCon;
    }

    /**
     * Set hnoMismaEdad
     *
     * @param boolean $hnoMismaEdad
     *
     * @return Postulante
     */
    public function setHnoMismaEdad($hnoMismaEdad)
    {
        $this->hnoMismaEdad = $hnoMismaEdad;

        return $this;
    }

    /**
     * Get hnoMismaEdad
     *
     * @return boolean
     */
    public function getHnoMismaEdad()
    {
        return $this->hnoMismaEdad;
    }
}
