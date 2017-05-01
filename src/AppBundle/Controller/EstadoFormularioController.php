<?php

namespace AppBundle\Controller;

use AppBundle\Entity\EstadoFormulario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estadoformulario controller.
 *
 * @Route("admin/estadoformulario")
 */
class EstadoFormularioController extends Controller
{
    /**
     * Lists all estadoFormulario entities.
     *
     * @Route("/", name="admin_estadoformulario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadoFormularios = $em->getRepository('AppBundle:EstadoFormulario')->findAll();

        return $this->render('estadoformulario/index.html.twig', array(
            'estadoFormularios' => $estadoFormularios,
        ));
    }

    /**
     * Creates a new estadoFormulario entity.
     *
     * @Route("/new", name="admin_estadoformulario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estadoFormulario = new Estadoformulario();
        $form = $this->createForm('AppBundle\Form\EstadoFormularioType', $estadoFormulario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoFormulario);
            $em->flush();

            return $this->redirectToRoute('admin_estadoformulario_show', array('id' => $estadoFormulario->getId()));
        }

        return $this->render('estadoformulario/new.html.twig', array(
            'estadoFormulario' => $estadoFormulario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estadoFormulario entity.
     *
     * @Route("/{id}", name="admin_estadoformulario_show")
     * @Method("GET")
     */
    public function showAction(EstadoFormulario $estadoFormulario)
    {
        $deleteForm = $this->createDeleteForm($estadoFormulario);

        return $this->render('estadoformulario/show.html.twig', array(
            'estadoFormulario' => $estadoFormulario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estadoFormulario entity.
     *
     * @Route("/{id}/edit", name="admin_estadoformulario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EstadoFormulario $estadoFormulario)
    {
        $deleteForm = $this->createDeleteForm($estadoFormulario);
        $editForm = $this->createForm('AppBundle\Form\EstadoFormularioType', $estadoFormulario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_estadoformulario_edit', array('id' => $estadoFormulario->getId()));
        }

        return $this->render('estadoformulario/edit.html.twig', array(
            'estadoFormulario' => $estadoFormulario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estadoFormulario entity.
     *
     * @Route("/{id}", name="admin_estadoformulario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EstadoFormulario $estadoFormulario)
    {
        $form = $this->createDeleteForm($estadoFormulario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadoFormulario);
            $em->flush();
        }

        return $this->redirectToRoute('admin_estadoformulario_index');
    }

    /**
     * Creates a form to delete a estadoFormulario entity.
     *
     * @param EstadoFormulario $estadoFormulario The estadoFormulario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstadoFormulario $estadoFormulario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_estadoformulario_delete', array('id' => $estadoFormulario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
