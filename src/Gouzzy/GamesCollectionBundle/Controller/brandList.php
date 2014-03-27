<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $brands = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('GouzzyGamesCollectionBundle:Brand')
                       ->findAll();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:brandList.html.twig', array(
          'brands' => $brands
        ));
    }
}
