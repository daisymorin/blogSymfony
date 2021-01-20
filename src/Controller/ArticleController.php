<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article/search-json", name="article_search_json", methods={"GET"})
     */
    public function searchJson(Request $request, ArticleRepository $articleRepository): Response
    {
        $terms = $request->get('terms');
        $articles = $articleRepository->findByTerms($terms);
        return new JsonResponse($articles);
        var_dump($articles);exit;
    }

     /**
     * @Route("/article/search", name="article_search", methods={"GET"})
     */
    public function search(): Response
    {
        return $this->render('front/article/search.html.twig');
    }
}
