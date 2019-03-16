<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 12:27
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScenarioController extends AbstractController
{
    /**
     *@Route("/scenario", name="scenario")
     *@return Response
     */
    public function scenario()
    {
        return $this->render(
            'scenario.html.twig',
            ['title' => "Extraits - SUR LA PEAU"]
        );
    }

}