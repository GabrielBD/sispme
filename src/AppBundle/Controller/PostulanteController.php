<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Postulante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Postulante controller.
 *
 * @Route("admin/postulante")
 */
class PostulanteController extends Controller
{
    /**
     * Lists all postulante entities.
     *
     * @Route("/", name="admin_postulante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $postulantes = $em->getRepository('AppBundle:Postulante')->findAll();

        return $this->render('postulante/index.html.twig', array(
            'postulantes' => $postulantes,
        ));
    }

    /**
     * Creates a new postulante entity.
     *
     * @Route("/new", name="admin_postulante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $postulante = new Postulante();
        $form = $this->createForm('AppBundle\Form\PostulanteType', $postulante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($postulante);
            $em->flush();

            return $this->redirectToRoute('admin_postulante_show', array('id' => $postulante->getId()));
        }

        return $this->render('postulante/new.html.twig', array(
            'postulante' => $postulante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a postulante entity.
     *
     * @Route("/{id}", name="admin_postulante_show")
     * @Method("GET")
     */
    public function showAction(Postulante $postulante)
    {
        $deleteForm = $this->createDeleteForm($postulante);

        return $this->render('postulante/show.html.twig', array(
            'postulante' => $postulante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing postulante entity.
     *
     * @Route("/{id}/edit", name="admin_postulante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Postulante $postulante)
    {
        $deleteForm = $this->createDeleteForm($postulante);
        $editForm = $this->createForm('AppBundle\Form\PostulanteType', $postulante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_postulante_edit', array('id' => $postulante->getId()));
        }

        return $this->render('postulante/edit.html.twig', array(
            'postulante' => $postulante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a postulante entity.
     *
     * @Route("/{id}", name="admin_postulante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Postulante $postulante)
    {
        $form = $this->createDeleteForm($postulante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($postulante);
            $em->flush();
        }

        return $this->redirectToRoute('admin_postulante_index');
    }

    /**
     * Creates a form to delete a postulante entity.
     *
     * @param Postulante $postulante The postulante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Postulante $postulante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_postulante_delete', array('id' => $postulante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
