<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-25
 * Time: 14:05
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     *@Route("/", name="homepage")
     */
    public function home()
    {
        return $this->render(
            'home.html.twig',
            ['title' => "Home - SUR LA PEAU"]
        );
    }

    }