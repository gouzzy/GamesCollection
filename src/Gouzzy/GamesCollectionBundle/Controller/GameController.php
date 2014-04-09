<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gouzzy\GamesCollectionBundle\Entity\Game;
use Gouzzy\GamesCollectionBundle\Form\GameType;


class GameController extends Controller
{
    public function indexAction()
    {
        $games = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('GouzzyGamesCollectionBundle:Game')
                      ->findAllOrderByConsole();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:gameList.html.twig', array(
          'games' => $games
        ));
    }
    
    public function gameListByGenericGameAction($genericGameId)
    {
        $games = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('GouzzyGamesCollectionBundle:Game')
                      ->findByGenericGame($genericGameId, array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:gameList.html.twig', array(
          'games' => $games
        ));
    }
    
    public function addGameAction()
    {
        $game    = new Game;  

        $form    = $this->createForm(new GameType, $game);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);
            
            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($game);
                $em->flush();
            
                //return $this->redirect($this->generateUrl('gouzzy_games_collection_console_list'));
                return $this->redirect($this->generateUrl('gouzzy_games_collection_game_add'));
            }
        }

        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:addGame.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
