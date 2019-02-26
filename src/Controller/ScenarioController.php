<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 12:27
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScenarioController extends Controller
{
    /**
     *@Route("/scenario", name="scenario")
     */
    public function scenario()
    {
        return $this->render(
            'scenario.html.twig',
            ['title' => "Extraits - SUR LA PEAU"]
        );
    }

}