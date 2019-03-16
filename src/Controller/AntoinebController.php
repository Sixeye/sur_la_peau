<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 21:50
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AntoinebController extends AbstractController
{
    /**
     *@Route("/antoineb", name="antoineb")
     *@return Response
     */
    public function antoineb()
    {
        return $this->render(
            'antoineb.html.twig',
            ['title' => "Antoine Basler - SUR LA PEAU"]
        );
    }

}