<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 10:32
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ZbdsController extends Controller
{
    /**
     *@Route("/zbds", name="zbds")
     */
    public function zbds()
    {
        return $this->render(
            'zbds.html.twig',
            ['title' => "Zoé Besmond de Senneville - SUR LA PEAU"]
        );
    }

}