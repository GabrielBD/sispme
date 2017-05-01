<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * EstadoNota
 *
 * @ORM\Table(name="estado_nota")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstadoNotaRepository")
 */
class EstadoNota
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
     * @ORM\OneToMany(targetEntity="Nota", mappedBy="estado")
     */
    private $notas;


    public function __construct()
    {
        $this->notas = new ArrayCollection();
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

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return EstadoNota
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add nota
     *
     * @param \AppBundle\Entity\Nota $nota
     *
     * @return EstadoNota
     */
    public function addNota(\AppBundle\Entity\Nota $nota)
    {
        $this->notas[] = $nota;

        return $this;
    }

    /**
     * Remove nota
     *
     * @param \AppBundle\Entity\Nota $nota
     */
    public function removeNota(\AppBundle\Entity\Nota $nota)
    {
        $this->notas->removeElement($nota);
    }

    /**
     * Get notas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotas()
    {
        return $this->notas;
    }
}
