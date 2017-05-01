<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * EstadoFormulario
 *
 * @ORM\Table(name="estado_formulario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstadoFormularioRepository")
 */
class EstadoFormulario
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
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @ORM\OneToMany(targetEntity="Formulario", mappedBy="estado")
     */
    private $formularios;


    public function __construct()
    {
        $this->formularios = new ArrayCollection();
    }

    public function __toString(){
        return $this->getEstado();
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

    
}

