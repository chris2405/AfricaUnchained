<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{

    /**
     * @Route("/test",name="test")
     */
    public function test()
    {

        return $this->render('@Main/Default/test.html.twig');
    }

    /**
     * @Route("/test2",name="test2")
     */
    public function test2()
    {

        return $this->render('@Main/Default/test2.html.twig');
    }

    /**
     * @Route("/",name="home")
     */
    public function indexAction()
    {
//        dump('ok');
//        phpinfo();
//        die();
        return $this->render('@Main/Default/home.html.twig');
    }


    /**
     * @Route("/menu",name="menu")
     */
    public function menu()
    {

        return $this->render('@Main/Default/menu.html.twig');
    }


/**
 * @Route("/projet",name="projet")
 */
public function project()
{

    return $this->render('@Main/Default/projet.html.twig');
}

    /**
     * @Route("/form",name="form")
     */
    public function form()
    {

        return $this->render('@Main/Default/form.html.twig');
    }
}