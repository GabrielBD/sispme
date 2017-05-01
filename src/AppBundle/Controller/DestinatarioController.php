<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Destinatario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Destinatario controller.
 *
 * @Route("admin/destinatario")
 */
class DestinatarioController extends Controller
{
    /**
     * Lists all destinatario entities.
     *
     * @Route("/", name="admin_destinatario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $destinatarios = $em->getRepository('AppBundle:Destinatario')->findAll();

        return $this->render('destinatario/index.html.twig', array(
            'destinatarios' => $destinatarios,
        ));
    }

    /**
     * Creates a new destinatario entity.
     *
     * @Route("/new", name="admin_destinatario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $destinatario = new Destinatario();
        $form = $this->createForm('AppBundle\Form\DestinatarioType', $destinatario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($destinatario);
            $em->flush();

            return $this->redirectToRoute('admin_destinatario_show', array('id' => $destinatario->getId()));
        }

        return $this->render('destinatario/new.html.twig', array(
            'destinatario' => $destinatario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a destinatario entity.
     *
     * @Route("/{id}", name="admin_destinatario_show")
     * @Method("GET")
     */
    public function showAction(Destinatario $destinatario)
    {
        $deleteForm = $this->createDeleteForm($destinatario);

        return $this->render('destinatario/show.html.twig', array(
            'destinatario' => $destinatario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing destinatario entity.
     *
     * @Route("/{id}/edit", name="admin_destinatario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Destinatario $destinatario)
    {
        $deleteForm = $this->createDeleteForm($destinatario);
        $editForm = $this->createForm('AppBundle\Form\DestinatarioType', $destinatario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_destinatario_edit', array('id' => $destinatario->getId()));
        }

        return $this->render('destinatario/edit.html.twig', array(
            'destinatario' => $destinatario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a destinatario entity.
     *
     * @Route("/{id}", name="admin_destinatario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Destinatario $destinatario)
    {
        $form = $this->createDeleteForm($destinatario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($destinatario);
            $em->flush();
        }

        return $this->redirectToRoute('admin_destinatario_index');
    }

    /**
     * Creates a form to delete a destinatario entity.
     *
     * @param Destinatario $destinatario The destinatario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Destinatario $destinatario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_destinatario_delete', array('id' => $destinatario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
