<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
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
     * @Route("/follow",name="follow")
     */
    public function follow()
    {

        return $this->render('@Main/Default/follow.html.twig');
    }

}