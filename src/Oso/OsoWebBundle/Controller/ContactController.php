<?php

namespace Oso\OsoWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Oso\OsoWebBundle\Form\Type\ContactType;
use Oso\OsoWebBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ContactController extends Controller
{
   /**
     * @Route("/contact", name="contact_show")
     * @Template()
     */    
    public function contactAction()
{
    $contact = new Contact();
    $form = $this->createForm(new ContactType(), $contact);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);
        //$data = $form->getData();
        if ($form->isValid()) {
            // Perform some action, such as sending an email

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            //return $this->redirect($this->generateUrl('OsoOsoWebBundle_contact'));
            //
            //$data = $form->getData();
             
             $message = \Swift_Message::newInstance()
                    //->setContentType('text/html')
                    ->setSubject('sujet')
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo(/*'osoosoweb@gmail.com'*/$this->container->getParameter('oso.emails.contact_email'))
                    ->setBody(/*'message'*/$this->render('OsoOsoWebBundle:Contact:email.txt.twig', array('contact' => $contact )));
 
             $this->get('mailer')->send($message);

           //$this->get('session')->setFlash('Your contact enquiry was successfully sent. Thank you!', 'oso-notice');
             
            // On envoi une 'flash' pour indiquer à l'utilisateur que le bureau est ajouté
            $this->get('session')->getFlashBag()->add('Message envoyer: Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.', 'success');
            
            return $this->redirect($this->generateUrl('OsoBundle_contact'));
            // On redirige vers la page de modification du bureau
            //return new RedirectResponse($this->generateUrl('contact_edit', array(return new RedirectResponse($this->generateUrl('contact_edit', array('contactId' => $contact->getId())));
        }
    }

    return $this->render('OsoOsoWebBundle:Contact:show.html.twig', array('form' => $form->createView()));
}
}
 /* public function showAction()
    {
        return array();
    }*/