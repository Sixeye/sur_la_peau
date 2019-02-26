<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 13:09
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExtraitsController extends Controller
{
    /**
     *@Route("/extraits", name="extraits")
     */
    public function extraits()
    {
        return $this->render(
            'extraits.html.twig',
            ['title' => "Extraits - SUR LA PEAU"]
        );
    }

}