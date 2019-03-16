<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 11:00
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     *@Route("/login", name="login")
     *@return Response
     */
    public function login()
    {
        return $this->render(
            'login.html.twig',
            ['title' => "LOGIN - SUR LA PEAU"]
        );
    }
}