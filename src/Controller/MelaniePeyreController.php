<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 10:16
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MelaniePeyreController extends Controller
{
    /**
     *@Route("/melaniepeyre", name="melaniepeyre")
     */
    public function melaniepeyre()
    {
        return $this->render(
            'melaniepeyre.html.twig',
            ['title' => "Mélanie Peyre - SUR LA PEAU"]
        );
    }

}