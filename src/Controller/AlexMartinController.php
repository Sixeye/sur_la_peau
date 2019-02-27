<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 21:38
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlexMartinController extends Controller
{
    /**
     *@Route("/alexmartin", name="alexmartin")
     */
    public function alexmartin()
    {
        return $this->render(
            'alexmartin.html.twig',
            ['title' => "Alex Martin - SUR LA PEAU"]
        );
    }

}