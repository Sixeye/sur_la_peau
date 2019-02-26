<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 14:18
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TournageController extends Controller
{
    /**
     *@Route("/tournage", name="tournage")
     */
    public function scenario()
    {
        return $this->render(
            'tournage.html.twig',
            ['title' => "Lieux de tournage - SUR LA PEAU"]
        );
    }
}