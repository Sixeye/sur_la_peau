<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 10:09
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MassimobController extends Controller
{
    /**
     *@Route("/massimob", name="massimob")
     */
    public function massimob()
    {
        return $this->render(
            'massimob.html.twig',
            ['title' => "Massimo Bellini - SUR LA PEAU"]
        );
    }

}