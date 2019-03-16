<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 22:40
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JmgController extends AbstractController
{
    /**
     *@Route("/jmg", name="jmg")
     *@return Response
     */
    public function jmg()
    {
        return $this->render(
            'jmg.html.twig',
            ['title' => "Jean-Marie Godet - SUR LA PEAU"]
        );
    }

}