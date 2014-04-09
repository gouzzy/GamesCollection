<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gouzzy\GamesCollectionBundle\Entity\GenericGame;
use Gouzzy\GamesCollectionBundle\Form\GenericGameType;


class GenericGameController extends Controller
{
    public function indexAction()
    {
        $games = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('GouzzyGamesCollectionBundle:GenericGame')
                      ->findAllOrderByConsole();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericGameList.html.twig', array(
          'games' => $games
        ));
    }
    
    public function genericGameListByConsoleAction($consoleId)
    {
        $games = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('GouzzyGamesCollectionBundle:GenericGame')
                      ->findByConsole($consoleId, array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericGameList.html.twig', array(
          'games' => $games
        ));
    }
    
    public function genericGameListByGenreAction($genreId)
    {
        $games = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('GouzzyGamesCollectionBundle:GenericGame')
                      //->findByGenre($genreId, array('name' => 'ASC'));
                      ->findByGenreOrderByConsole($genreId);
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericGameList.html.twig', array(
          'games' => $games
        ));
    }
    
    public function genericGameListByDevelopperAction($developperId)
    {
        $games = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('GouzzyGamesCollectionBundle:GenericGame')
                      //->findByDevelopper($developperId, array('name' => 'ASC'));
                      ->findByDevelopperOrderByConsole($developperId);
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericGameList.html.twig', array(
          'games' => $games
        ));
    }
    
    public function genericGameListByEditorAction($editorId)
    {
        $games = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('GouzzyGamesCollectionBundle:GenericGame')
                      //->findByEditor($editorId, array('name' => 'ASC'));
                      ->findByEditorOrderByConsole($editorId);
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericGameList.html.twig', array(
          'games' => $games
        ));
    }
    
    public function addGenericGameAction()
    {
        $game    = new GenericGame;  

        $form    = $this->createForm(new GenericGameType, $game);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);
            
            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($game);
                $em->flush();
            
                //return $this->redirect($this->generateUrl('gouzzy_games_collection_generic_game_list'));
                return $this->redirect($this->generateUrl('gouzzy_games_collection_generic_game_add'));
            }
        }

        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:addGenericGame.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
