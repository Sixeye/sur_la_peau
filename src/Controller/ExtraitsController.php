<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 13:09
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExtraitsController extends AbstractController
{
    /**
     *@Route("/extraits", name="extraits")
     *@return Response
     */
    public function extraits()
    {
        return $this->render(
            'extraits.html.twig',
            ['title' => "Extraits - SUR LA PEAU"]
        );
    }

}