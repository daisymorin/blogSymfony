<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;
use App\Entity\Comment;
use App\Form\CommentType;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(ArticleRepository $articleRepository): Response
    {
        $listArticles = $articleRepository->findBy([], ['created_at' => 'DESC'], 3);
        return $this->render('front/default/home.html.twig', [
            'articles' => $listArticles,
        ]);
    }

    /**
     * @Route("/article/{id}", name="showHome", methods={"GET", "POST"})
     */
     public function show(Request $request, Article $article): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(New \DateTime())
                ->setArticle($article);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('showHome', ['id' =>$article->getId()]);
        }

        return $this->render('front/default/show.html.twig', [
            'article' => $article,
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }

     /**
     * @Route("/cgu", name="cgu")
     */
    public function cgu(): Response
    {
        return $this->render('front/default/cgu.html.twig', [
        
        ]);
    }

     /**
     * @Route("/mentions-legales", name="mentions-legales")
     */
    public function mentionsLegales(): Response
    {
        return $this->render('front/default/mentions-legales.html.twig', [
        
        ]);
    }
}
