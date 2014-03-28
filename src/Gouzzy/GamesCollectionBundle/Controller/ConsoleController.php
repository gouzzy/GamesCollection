<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gouzzy\GamesCollectionBundle\Entity\Console;
use Gouzzy\GamesCollectionBundle\Form\ConsoleType;


class ConsoleController extends Controller
{
    public function indexAction()
    {
        $consoles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('GouzzyGamesCollectionBundle:Console')
                         //->findBy(array(), array('brand.name' => 'ASC'));
                         ->findAllOrderByBrand();
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:consoleList.html.twig', array(
          'consoles' => $consoles
        ));
    }
    
    public function consoleListByBrandAction($brandId)
    {
        $consoles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('GouzzyGamesCollectionBundle:Console')
                         ->findByBrand($brandId, array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:consoleList.html.twig', array(
          'consoles' => $consoles
        ));
    }
    
    public function addConsoleAction()
    {
        $console = new Console;  

        $form    = $this->createForm(new ConsoleType, $console);
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
                return $this->redirect($this->generateUrl('gouzzy_games_collection_console_add'));
            }
        }

        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:addConsole.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
