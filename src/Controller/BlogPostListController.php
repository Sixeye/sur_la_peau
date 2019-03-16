<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 14:31
 */

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostListController extends AbstractController
{

    /**
     * @Route
     * @Route("/blog-post-list", name="blog-post-list")
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function blogpostlist(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->twoLastArticles();
        return $this->render(
            'blog-post-list.html.twig',
            ['title' => "Blog - SUR LA PEAU", 'article'=> $articles]
        );
    }

}