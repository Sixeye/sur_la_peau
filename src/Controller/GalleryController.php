<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 12:47
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     *@Route("/gallery", name="gallery")
     *@return Response
     */
    public function gallery()
    {
        return $this->render(
            'gallery.html.twig',
            ['title' => "Gallerie - SUR LA PEAU"]
        );
    }
}