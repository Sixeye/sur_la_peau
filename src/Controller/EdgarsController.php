<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 22:21
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EdgarsController extends AbstractController
{
    /**
     *@Route("/edgars", name="edgars")
     *@return Response
     */
    public function edgars()
    {
        return $this->render(
            'edgars.html.twig',
            ['title' => "Edgar Sekloka - SUR LA PEAU"]
        );
    }

}