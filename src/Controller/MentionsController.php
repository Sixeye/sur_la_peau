<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 11:15
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MentionsController extends Controller
{
    /**
     *@Route("/mentions", name="mentions")
     */
    public function mentions()
    {
        return $this->render(
            'mentions.html.twig',
            ['title' => "MENTIONS LEGALES - SUR LA PEAU"]
        );
    }
}