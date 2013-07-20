<?php

namespace Oso\OsoWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FolioController extends Controller
{
    /**
     * @Route("/show", name="folio_show")
     * @Template()
     */
    public function showAction()
    {
        return array();
    }

    // public function ajouterAction()
    //{
        // On teste que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        //if( ! $this->get('security.context')->isGranted('ROLE_AUTEUR') )
        //{
            // Sinon on déclenche une exception "Accès Interdit"
            //throw new AccessDeniedHttpException('Accès limité aux auteurs');
        //}
 
        // Ici le code d'ajout d'un article qu'on a déjà fait
 
        //return $this->render('OsowebOsoBundle:Site:ajouter.html.twig', array(
        //    'form' => $form->createView(),
        //));
    //}
}