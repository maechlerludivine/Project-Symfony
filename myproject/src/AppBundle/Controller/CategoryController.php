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

class CategoryController extends Controller
{
    /**
     * @Route("/new-category", name="category_new")
     */
    public function createCategoryAction(Request $request) {

        $catarticle = new CatArticle();
        $form = $this->createForm(CatArticleType::class, $catarticle);
        $form->add('submit', SubmitType::class);

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($catarticle);
            $em->flush();

            $this->addFlash('success', 'Categorie créée !');

            return $this->redirectToRoute('category_list');
        }
        return $this->render('category/newcategory.html.twig', array(
            'form' => $form->createView(),   
        ));
    }

    /**
     * @Route("/list-category", name="category_list")
     */
    public function listCategoryAction(Request $request) {

        $category = $this->getDoctrine()
            ->getRepository('AppBundle:CatArticle')
            ->findAll();

        return $this->render('category/listcategory.html.twig', array(
                'catarticle' => $category, 
        ));
    }

    /**
     * @Route("/edit/category/{id}", name="category_edit")
     */
    public function editCategoryAction(Request $request, CatArticle $catarticle)
    {
        $form = $this->createForm(CatArticleType::class, $catarticle);
        $form->add('submit', SubmitType::class);

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('success', 'Catégorie modifiée !');

            return $this->redirectToRoute('category_list', array(
                'id' => $catarticle->getId(),
            ));
        }

        return $this->render('category/editcategory.html.twig', array(
            'catarticle' => $catarticle,
            'form' => $form->createView(),            

        ));
    }
}