<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 21:50
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AntoinebController extends Controller
{
    /**
     *@Route("/antoineb", name="antoineb")
     */
    public function antoineb()
    {
        return $this->render(
            'antoineb.html.twig',
            ['title' => "Antoine Basler - SUR LA PEAU"]
        );
    }

}