<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 22:40
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JmgController extends Controller
{
    /**
     *@Route("/jmg", name="jmg")
     */
    public function jmg()
    {
        return $this->render(
            'jmg.html.twig',
            ['title' => "Jean-Marie Godet - SUR LA PEAU"]
        );
    }

}