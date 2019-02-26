<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 12:47
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    /**
     *@Route("/gallery", name="gallery")
     */
    public function gallery()
    {
        return $this->render(
            'gallery.html.twig',
            ['title' => "Gallerie - SUR LA PEAU"]
        );
    }
}