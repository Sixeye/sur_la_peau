<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 22:21
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EdgarsController extends Controller
{
    /**
     *@Route("/edgars", name="edgars")
     */
    public function edgars()
    {
        return $this->render(
            'edgars.html.twig',
            ['title' => "Edgar Sekloka - SUR LA PEAU"]
        );
    }

}