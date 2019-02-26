<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 14:40
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogPostController extends Controller
{
    /**
     *@Route("/blog-post", name="blog-post")
     */
    public function blogpost()
    {
        return $this->render(
            'blog-post.html.twig',
            ['title' => "Blog Posts - SUR LA PEAU"]
        );
    }
}