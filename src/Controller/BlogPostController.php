<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 14:40
 */

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogPostController extends AbstractController
{
    /**
     *@Route
     *@Route("/blog-post", name="blog-post")
     *@return Response
     */
    public function blogpost(ArticleRepository $articleRep)
    {
        $articles = $articleRep->getAllArticles();
        return $this->render(
            'blog-post.html.twig',
            ['title' => "Blog Posts - SUR LA PEAU", 'article' => $articles]
        );
    }
}