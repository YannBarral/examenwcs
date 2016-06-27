<?php





namespace FruitBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class FirstController extends Controller

{
    public function indexAction()
    {
        return $this->render('FruitBundle:Default:page1.html.twig');
    }
}

