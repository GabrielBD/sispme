<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Nota;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Notum controller.
 *
 * @Route("admin/nota")
 */
class NotaController extends Controller
{
    /**
     * Lists all notum entities.
     *
     * @Route("/", name="admin_nota_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notas = $em->getRepository('AppBundle:Nota')->findAll();

        return $this->render('nota/index.html.twig', array(
            'notas' => $notas,
        ));
    }

    /**
     * Creates a new notum entity.
     *
     * @Route("/new", name="admin_nota_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $notum = new Nota();
        $form = $this->createForm('AppBundle\Form\NotaType', $notum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notum);
            $em->flush();

            return $this->redirectToRoute('admin_nota_show', array('id' => $notum->getId()));
        }

        return $this->render('nota/new.html.twig', array(
            'notum' => $notum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a notum entity.
     *
     * @Route("/{id}", name="admin_nota_show")
     * @Method("GET")
     */
    public function showAction(Nota $notum)
    {
        $deleteForm = $this->createDeleteForm($notum);

        return $this->render('nota/show.html.twig', array(
            'notum' => $notum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing notum entity.
     *
     * @Route("/{id}/edit", name="admin_nota_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Nota $notum)
    {
        $deleteForm = $this->createDeleteForm($notum);
        $editForm = $this->createForm('AppBundle\Form\NotaType', $notum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_nota_edit', array('id' => $notum->getId()));
        }

        return $this->render('nota/edit.html.twig', array(
            'notum' => $notum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a notum entity.
     *
     * @Route("/{id}", name="admin_nota_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Nota $notum)
    {
        $form = $this->createDeleteForm($notum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($notum);
            $em->flush();
        }

        return $this->redirectToRoute('admin_nota_index');
    }

    /**
     * Creates a form to delete a notum entity.
     *
     * @param Nota $notum The notum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Nota $notum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_nota_delete', array('id' => $notum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
