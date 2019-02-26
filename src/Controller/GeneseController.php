<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 11:27
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneseController extends Controller
{
    /**
     *@Route("/genese", name="genese")
     */
    public function genese()
    {
        return $this->render(
            'genese.html.twig',
            ['title' => "Génèse - SUR LA PEAU"]
        );
    }

}