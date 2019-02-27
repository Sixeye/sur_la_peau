<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 10:38
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     *@Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render(
            'contact.html.twig',
            ['title' => "CONTACT - SUR LA PEAU"]
        );
    }

}