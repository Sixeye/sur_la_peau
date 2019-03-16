<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 10:38
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     *@Route("/contact", name="contact")
     *@return Response
     */
    public function contact()
    {
        return $this->render(
            'contact.html.twig',
            ['title' => "CONTACT - SUR LA PEAU"]
        );
    }

}