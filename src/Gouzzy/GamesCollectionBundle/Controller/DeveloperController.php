<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gouzzy\GamesCollectionBundle\Entity\Developer;
use Gouzzy\GamesCollectionBundle\Form\DeveloperType;


class DeveloperController extends Controller
{
    public function indexAction()
    {
        $developpers = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('GouzzyGamesCollectionBundle:Developer')
                            ->findBy(array(), array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:developperList.html.twig', array(
          'developpers' => $developpers
        ));
    }
    
    public function addDeveloperAction()
    {
        $developper = new developer;  

        $form    = $this->createForm(new DeveloperType, $developper);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);
            
            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($developper);
                $em->flush();
            
                //return $this->redirect($this->generateUrl('gouzzy_games_collection_editor_list'));
                return $this->redirect($this->generateUrl('gouzzy_games_collection_developper_add'));
            }
        }

        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:addDevelopper.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
