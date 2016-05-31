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

class AdminController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Connecté !</body></html>');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {   
    
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'security/login.html.twig', array(
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );     
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {

        $user= new User();
        $form = $this->createForm(UserType::class, $user);
        $form->add('submit', SubmitType::class);

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }

        return $this->render('user/new-user.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),            

        ));
    }
}