<?php

namespace AppBundle\Controller;

use AppBundle\Entity\EstadoNota;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estadonotum controller.
 *
 * @Route("admin/estadonota")
 */
class EstadoNotaController extends Controller
{
    /**
     * Lists all estadoNotum entities.
     *
     * @Route("/", name="admin_estadonota_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadoNotas = $em->getRepository('AppBundle:EstadoNota')->findAll();

        return $this->render('estadonota/index.html.twig', array(
            'estadoNotas' => $estadoNotas,
        ));
    }

    /**
     * Creates a new estadoNotum entity.
     *
     * @Route("/new", name="admin_estadonota_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estadoNotum = new Estadonota();
        $form = $this->createForm('AppBundle\Form\EstadoNotaType', $estadoNotum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoNotum);
            $em->flush();

            return $this->redirectToRoute('admin_estadonota_show', array('id' => $estadoNotum->getId()));
        }

        return $this->render('estadonota/new.html.twig', array(
            'estadoNotum' => $estadoNotum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estadoNotum entity.
     *
     * @Route("/{id}", name="admin_estadonota_show")
     * @Method("GET")
     */
    public function showAction(EstadoNota $estadoNotum)
    {
        $deleteForm = $this->createDeleteForm($estadoNotum);

        return $this->render('estadonota/show.html.twig', array(
            'estadoNotum' => $estadoNotum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estadoNotum entity.
     *
     * @Route("/{id}/edit", name="admin_estadonota_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EstadoNota $estadoNotum)
    {
        $deleteForm = $this->createDeleteForm($estadoNotum);
        $editForm = $this->createForm('AppBundle\Form\EstadoNotaType', $estadoNotum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_estadonota_edit', array('id' => $estadoNotum->getId()));
        }

        return $this->render('estadonota/edit.html.twig', array(
            'estadoNotum' => $estadoNotum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estadoNotum entity.
     *
     * @Route("/{id}", name="admin_estadonota_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EstadoNota $estadoNotum)
    {
        $form = $this->createDeleteForm($estadoNotum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadoNotum);
            $em->flush();
        }

        return $this->redirectToRoute('admin_estadonota_index');
    }

    /**
     * Creates a form to delete a estadoNotum entity.
     *
     * @param EstadoNota $estadoNotum The estadoNotum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstadoNota $estadoNotum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_estadonota_delete', array('id' => $estadoNotum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
