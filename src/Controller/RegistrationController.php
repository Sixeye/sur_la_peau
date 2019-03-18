<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 11:09
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     *@Route("/registration", name="registration")
     *@return Response
     */
    public function registration()
    {
        return $this->render(
            'ADMIN/registration.html.twig',
            ['title' => "ENREGISTREMENT - SUR LA PEAU"]
        );
    }
}