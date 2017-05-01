<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UsuarioExterno;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Usuarioexterno controller.
 *
 * @Route("admin/usuarioexterno")
 */
class UsuarioExternoController extends Controller
{
    /**
     * Lists all usuarioExterno entities.
     *
     * @Route("/", name="admin_usuarioexterno_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarioExternos = $em->getRepository('AppBundle:UsuarioExterno')->findAll();

        return $this->render('usuarioexterno/index.html.twig', array(
            'usuarioExternos' => $usuarioExternos,
        ));
    }

    /**
     * Creates a new usuarioExterno entity.
     *
     * @Route("/new", name="admin_usuarioexterno_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usuarioExterno = new Usuarioexterno();
        $form = $this->createForm('AppBundle\Form\UsuarioExternoType', $usuarioExterno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuarioExterno);
            $em->flush();

            return $this->redirectToRoute('admin_usuarioexterno_show', array('id' => $usuarioExterno->getId()));
        }

        return $this->render('usuarioexterno/new.html.twig', array(
            'usuarioExterno' => $usuarioExterno,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a usuarioExterno entity.
     *
     * @Route("/{id}", name="admin_usuarioexterno_show")
     * @Method("GET")
     */
    public function showAction(UsuarioExterno $usuarioExterno)
    {
        $deleteForm = $this->createDeleteForm($usuarioExterno);

        return $this->render('usuarioexterno/show.html.twig', array(
            'usuarioExterno' => $usuarioExterno,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuarioExterno entity.
     *
     * @Route("/{id}/edit", name="admin_usuarioexterno_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UsuarioExterno $usuarioExterno)
    {
        $deleteForm = $this->createDeleteForm($usuarioExterno);
        $editForm = $this->createForm('AppBundle\Form\UsuarioExternoType', $usuarioExterno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_usuarioexterno_edit', array('id' => $usuarioExterno->getId()));
        }

        return $this->render('usuarioexterno/edit.html.twig', array(
            'usuarioExterno' => $usuarioExterno,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a usuarioExterno entity.
     *
     * @Route("/{id}", name="admin_usuarioexterno_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UsuarioExterno $usuarioExterno)
    {
        $form = $this->createDeleteForm($usuarioExterno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuarioExterno);
            $em->flush();
        }

        return $this->redirectToRoute('admin_usuarioexterno_index');
    }

    /**
     * Creates a form to delete a usuarioExterno entity.
     *
     * @param UsuarioExterno $usuarioExterno The usuarioExterno entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UsuarioExterno $usuarioExterno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_usuarioexterno_delete', array('id' => $usuarioExterno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
