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

class ActorsController extends Controller
{
    /**
     *@Route("/actors", name="actors")
     */
    public function actors()
    {
        return $this->render(
            'actors.html.twig',
            ['title' => "Acteurs - SUR LA PEAU"]
        );
    }

}