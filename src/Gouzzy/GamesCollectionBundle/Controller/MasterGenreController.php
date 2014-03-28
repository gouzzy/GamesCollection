<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class MasterGenreController extends Controller
{
    public function indexAction()
    {
        $masterGenres = $this->getDoctrine()
                             ->getManager()
                             ->getRepository('GouzzyGamesCollectionBundle:MasterGenre')
                             ->findAll();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:masterGenreList.html.twig', array(
          'masterGenres' => $masterGenres
        ));
    }
}
