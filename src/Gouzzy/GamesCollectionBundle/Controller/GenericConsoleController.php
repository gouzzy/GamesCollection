<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gouzzy\GamesCollectionBundle\Entity\GenericConsole;
use Gouzzy\GamesCollectionBundle\Form\ConsoleType;


class GenericConsoleController extends Controller
{
    public function indexAction()
    {
        $consoles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('GouzzyGamesCollectionBundle:GenericConsole')
                         //->findBy(array(), array('brand.name' => 'ASC'));
                         ->findAllOrderByBrand();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericConsoleList.html.twig', array(
          'consoles' => $consoles
        ));
    } 
    
    public function genericConsoleListForGenericGamesAction()
    {
        $consoles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('GouzzyGamesCollectionBundle:GenericConsole')
                         //->findAll(array(), array('console.generiConsole.brand.name' => 'ASC'));
                         ->findAllOrderByBrand();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericConsoleListFoGenericGames.html.twig', array(
          'consoles' => $consoles
        ));
    }
    
    public function genericConsoleListByBrandAction($brandId)
    {
        $consoles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('GouzzyGamesCollectionBundle:GenericConsole')
                         ->findByBrand($brandId, array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericConsoleList.html.twig', array(
          'consoles' => $consoles
        ));
    }
    
    public function genericConsoleListForGamesAction()
    {
        $consoles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('GouzzyGamesCollectionBundle:GenericConsole')
                         ->findAllOrderByBrand();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericConsoleListForGames.html.twig', array(
          'consoles' => $consoles
        ));
    }


    public function genericConsoleListForGamesByBrandAction($brandId)
    {
        $consoles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('GouzzyGamesCollectionBundle:GenericConsole')
                         ->findByBrand($brandId, array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:genericConsoleListForGames.html.twig', array(
          'consoles' => $consoles
        ));
    }
    
    public function addGenericConsoleAction()
    {
        $console = new GenericConsole;  

        $form    = $this->createForm(new GenericConsoleType, $console);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);
            
            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($console);
                $em->flush();
            
                //return $this->redirect($this->generateUrl('gouzzy_games_collection_console_list'));
                return $this->redirect($this->generateUrl('gouzzy_games_collection_generic_console_add'));
            }
        }

        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:addGenericConsole.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
