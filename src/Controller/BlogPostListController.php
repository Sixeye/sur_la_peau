<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 14:31
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogPostListController extends Controller
{
    /**
     *@Route("/blog-post-list", name="blog-post-list")
     */
    public function blogpostlist()
    {
        return $this->render(
            'blog-post-list.html.twig',
            ['title' => "Blog - SUR LA PEAU"]
        );
    }

}