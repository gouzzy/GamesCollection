<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenreController extends Controller
{
    public function indexAction()
    {
        $genres = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('GouzzyGamesCollectionBundle:Genre')
                       ->findAll();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genreList.html.twig', array(
          'genres' => $genres
        ));
    }
    
    public function genreListAction($masterGenreId)
    {
        $genres = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('GouzzyGamesCollectionBundle:Genre')
                       ->findByMasterGenre($masterGenreId);
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genreList.html.twig', array(
          'genres' => $genres
        ));
    }
}
