<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-27
 * Time: 11:15
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentionsController extends AbstractController
{
    /**
     *@Route("/mentions", name="mentions")
     *@return Response
     */
    public function mentions()
    {
        return $this->render(
            'mentions.html.twig',
            ['title' => "MENTIONS LEGALES - SUR LA PEAU"]
        );
    }
}