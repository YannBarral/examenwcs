<?php

namespace FruitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FruitBundle\Entity\Achat;
use FruitBundle\Form\AchatType;

/**
 * Achat controller.
 *
 */
class AchatController extends Controller
{
    /**
     * Lists all Achat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $achats = $em->getRepository('FruitBundle:Achat')->findAll();

        return $this->render('achat/index.html.twig', array(
            'achats' => $achats,
        ));
    }

    /**
     * Creates a new Achat entity.
     *
     */
    public function newAction(Request $request)
    {
        $achat = new Achat();
        $form = $this->createForm('FruitBundle\Form\AchatType', $achat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($achat);
            $em->flush();

            return $this->redirectToRoute('achat_show', array('id' => $achat->getId()));
        }

        return $this->render('achat/new.html.twig', array(
            'achat' => $achat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Achat entity.
     *
     */
    public function showAction(Achat $achat)
    {
        $deleteForm = $this->createDeleteForm($achat);

        return $this->render('achat/show.html.twig', array(
            'achat' => $achat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Achat entity.
     *
     */
    public function editAction(Request $request, Achat $achat)
    {
        $deleteForm = $this->createDeleteForm($achat);
        $editForm = $this->createForm('FruitBundle\Form\AchatType', $achat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($achat);
            $em->flush();

            return $this->redirectToRoute('achat_edit', array('id' => $achat->getId()));
        }

        return $this->render('achat/edit.html.twig', array(
            'achat' => $achat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Achat entity.
     *
     */
    public function deleteAction(Request $request, Achat $achat)
    {
        $form = $this->createDeleteForm($achat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($achat);
            $em->flush();
        }

        return $this->redirectToRoute('achat_index');
    }

    /**
     * Creates a form to delete a Achat entity.
     *
     * @param Achat $achat The Achat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Achat $achat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('achat_delete', array('id' => $achat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
