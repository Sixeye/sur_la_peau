<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 11:27
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneseController extends AbstractController
{
    /**
     *@Route("/genese", name="genese")
     *@return Response
     */
    public function genese()
    {
        return $this->render(
            'genese.html.twig',
            ['title' => "Génèse - SUR LA PEAU"]
        );
    }

}