<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 11:09
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    /**
     *@Route("/registration", name="registration")
     */
    public function registration()
    {
        return $this->render(
            'registration.html.twig',
            ['title' => "ENREGISTREMENT - SUR LA PEAU"]
        );
    }
}