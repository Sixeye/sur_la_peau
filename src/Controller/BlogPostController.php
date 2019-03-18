<?php
/**
 * Created by PhpStorm.
 * User: srinathchristophersamarasinghe
 * Date: 2019-02-26
 * Time: 14:40
 */

namespace App\Controller;

use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogPostController extends AbstractController
{
    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     *@Route
     *@Route("/blog-post", name="blog-post")
     *@return Response
     */
    public function blogpost(PaginatorInterface $paginator, Request $request): Response
    {
        $articles = $paginator->paginate($this->repository->getAllArticles(),
        $request->query->getInt('page', 1), 3
        );
        return $this->render(
            'blog-post.html.twig',
            ['title' => "Blog Posts - SUR LA PEAU", 'article' => $articles]
        );
    }
}