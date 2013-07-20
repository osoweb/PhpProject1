<?php

namespace Oso\OsoWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


use Oso\OsoWebBundle\Entity\Site;
use Oso\OsoWebBundle\Form\SiteType;

/**
 * Site controller.
 *
 */
class SiteController extends Controller
{
    /**
     * @Route("/oso_site/", name="oso_site")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OsoOsoWebBundle:Site')->findAll();

        return $this->render('OsoOsoWebBundle:Site:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * @Route("/oso_site/create", name="oso_site_create")
     *
     */
    public function createAction()
    {
        $request = $this->get('Request');/*Request $request,*/
        $entity  = new Site();
        $form = $this->createForm(new SiteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('oso_site_show', array('id' => $entity->getId())));
        }

        return $this->render('OsoOsoWebBundle:Site:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Route("/oso_site/new", name="oso_site_new")
     *
     */
    public function newAction()
    {
        $entity = new Site();
        $form   = $this->createForm(new SiteType(), $entity);

        return $this->render('OsoOsoWebBundle:Site:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * @Route("/oso_site/show/{id}", name="oso_site_show")
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OsoOsoWebBundle:Site')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Site entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OsoOsoWebBundle:Site:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     *  @Route("/oso_site/edit/{id}", name="oso_site_edit")
     *  @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OsoOsoWebBundle:Site')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Site entity.');
        }

        $editForm = $this->createForm(new SiteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OsoOsoWebBundle:Site:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/oso_site/update/{id}", name="oso_site_update")
     * @Template()
     */
    public function updateAction( $id)
    {
        $request = $this->get('Request');/*Request $request,*/
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OsoOsoWebBundle:Site')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Site entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SiteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('oso_site_edit', array('id' => $id)));
        }

        return $this->render('OsoOsoWebBundle:Site:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/oso_site/delete/{id}", name="oso_site_delete")
     *
     */
    public function deleteAction($id)
    {
        $request = $this->get('Request');/*Request $request,*/
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OsoOsoWebBundle:Site')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Site entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('oso_site'));
    }

    /**
     * Creates a form to delete a Site entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
