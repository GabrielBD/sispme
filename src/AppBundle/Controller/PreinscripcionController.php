<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Preinscripcion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Preinscripcion controller.
 *
 * @Route("admin/preinscripcion")
 */
class PreinscripcionController extends Controller
{
    /**
     * Lists all preinscripcion entities.
     *
     * @Route("/", name="admin_preinscripcion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $preinscripcions = $em->getRepository('AppBundle:Preinscripcion')->findAll();

        return $this->render('preinscripcion/index.html.twig', array(
            'preinscripcions' => $preinscripcions,
        ));
    }

    /**
     * Creates a new preinscripcion entity.
     *
     * @Route("/new", name="admin_preinscripcion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $preinscripcion = new Preinscripcion();
        $form = $this->createForm('AppBundle\Form\PreinscripcionType', $preinscripcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($preinscripcion);
            $em->flush();

            return $this->redirectToRoute('admin_preinscripcion_show', array('id' => $preinscripcion->getId()));
        }

        return $this->render('preinscripcion/new.html.twig', array(
            'preinscripcion' => $preinscripcion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a preinscripcion entity.
     *
     * @Route("/{id}", name="admin_preinscripcion_show")
     * @Method("GET")
     */
    public function showAction(Preinscripcion $preinscripcion)
    {
        $deleteForm = $this->createDeleteForm($preinscripcion);

        return $this->render('preinscripcion/show.html.twig', array(
            'preinscripcion' => $preinscripcion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing preinscripcion entity.
     *
     * @Route("/{id}/edit", name="admin_preinscripcion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Preinscripcion $preinscripcion)
    {
        $deleteForm = $this->createDeleteForm($preinscripcion);
        $editForm = $this->createForm('AppBundle\Form\PreinscripcionType', $preinscripcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_preinscripcion_edit', array('id' => $preinscripcion->getId()));
        }

        return $this->render('preinscripcion/edit.html.twig', array(
            'preinscripcion' => $preinscripcion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a preinscripcion entity.
     *
     * @Route("/{id}", name="admin_preinscripcion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Preinscripcion $preinscripcion)
    {
        $form = $this->createDeleteForm($preinscripcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($preinscripcion);
            $em->flush();
        }

        return $this->redirectToRoute('admin_preinscripcion_index');
    }

    /**
     * Creates a form to delete a preinscripcion entity.
     *
     * @param Preinscripcion $preinscripcion The preinscripcion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Preinscripcion $preinscripcion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_preinscripcion_delete', array('id' => $preinscripcion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
