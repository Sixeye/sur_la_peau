<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 22:30
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JmcController extends Controller
{
    /**
     *@Route("/jmc", name="jmc")
     */
    public function jmc()
    {
        return $this->render(
            'jmc.html.twig',
            ['title' => "Jean-Michel Correia - SUR LA PEAU"]
        );
    }

}