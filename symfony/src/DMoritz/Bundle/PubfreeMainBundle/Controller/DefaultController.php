<?php

namespace DMoritz\Bundle\PubfreeMainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        var_dump('In here');die;
        return $this->render('DMoritzPubfreeMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
