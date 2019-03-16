<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 22:05
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChristianmController extends AbstractController
{
    /**
     *@Route("/christianm", name="christianm")
     *@return Response
     */
    public function christianm()
    {
        return $this->render(
            'christianm.html.twig',
            ['title' => "Christian Mupondo - SUR LA PEAU"]
        );
    }

}