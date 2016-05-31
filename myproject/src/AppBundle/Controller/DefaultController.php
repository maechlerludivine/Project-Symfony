<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\CatArticle;
use AppBundle\Entity\User;
use AppBundle\Form\Type\ArticleType;
use AppBundle\Form\Type\CatArticleType;
use AppBundle\Form\Type\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;




class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $articles = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findAll();

        return $this->render('articles/list.html.twig', [
                'articles' => $articles, 
        ]);

        // return $this->render('default/index.html.twig', [
        //     'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        // ]);
    }

    /**
     * @Route("/new", name="article_new")
     */
    public function postCreateAction(Request $request) 
    {

        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->add('submit', SubmitType::class)
             ->add('catarticle', EntityType::class, array(
            'class' => 'AppBundle:CatArticle',
            'choice_label' => 'name',
        ));

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $slug = $this->get('app.slugger')->slugify($article->getTitle());
            $article->setSlug($slug);
            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'Article créé !');

            return $this->redirectToRoute('article_new');
        }

        return $this->render('articles/new.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/article/{id}", name="article_displayed")
     */
    public function postDisplayAction(Article $article) {

        $articles = $this->getDoctrine()
            ->getRepository('AppBundle:Article');
             
        return $this->render('articles/show.html.twig', array(
            'article' => $article,
        ));
    }


    /**
     * @Route("/edit/{id}", name="article_edit")
     */
    public function editAction(Request $request, Article $article)
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->add('submit', SubmitType::class);

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('success', 'Article modifié !');

            return $this->redirectToRoute('homepage', array(
                'id' => $article->getId(),
            ));
        }

        return $this->render('articles/edit.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),            

        ));
    }

    /**
     * @Route("/{id}/delete", name="article_delete")
     */
    public function deleteAction(Article $article) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        $this->addFlash('success', 'Article supprimé !');

        return $this->redirectToRoute('homepage');

        return $this->render('articles/list.html.twig', array(
            'article' => $article,
        ));
    }

    /**
     * @Route("/article/{id}", name="article_displayed")
     */
    public function uploadAction(Request $request)
    {

        $file = new File();
        $form = $this->createForm(UploadType::class, $file);
        $form->add('submit', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($file);
            $em->flush();

            return $this->redirectToRoute('homepage', array(
                'id' => $article->getId(),
            ));
        }

        return $this->render('articles/show.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),            

        ));
    }
}
