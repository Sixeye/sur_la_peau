<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 10:38
 */

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Notification\ContactNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ContactController
 * @package App\Controller
 */
class ContactController extends AbstractController
{
    /**
     *@Route("/contact", name="contact")
     *@return Response
     */
    public function contact(Request $request, ContactNotification $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $notification->notify($contact);

            $this->addFlash('success', 'Votre message a bien été envoyé.');
            return $this->redirectToRoute('contact');
        }

        return $this->render(
            'contact.html.twig',
            [
                'title' => "CONTACT - SUR LA PEAU",
                'form'  => $form->createView()
            ]
        );
    }

}