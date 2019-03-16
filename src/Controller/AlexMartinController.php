<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 21:38
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlexMartinController extends AbstractController
{
    /**
     *@Route("/alexmartin", name="alexmartin")
     *@return Response
     */
    public function alexmartin()
    {
        return $this->render(
            'alexmartin.html.twig',
            ['title' => "Alex Martin - SUR LA PEAU"]
        );
    }

}