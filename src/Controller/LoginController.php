<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 11:00
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     *@Route("/login", name="login")
     */
    public function login()
    {
        return $this->render(
            'login.html.twig',
            ['title' => "LOGIN - SUR LA PEAU"]
        );
    }
}