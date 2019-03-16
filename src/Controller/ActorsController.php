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


class ActorsController extends AbstractController
{
    /**
     *@Route
     *@Route("/actors", name="actors")
     *@return Response
     */
    public function actors()
    {
        return $this->render(
            'actors.html.twig',
            ['title' => "Acteurs - SUR LA PEAU"]
        );
    }

}
