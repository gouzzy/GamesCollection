<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gouzzy\GamesCollectionBundle\Entity\Editor;
use Gouzzy\GamesCollectionBundle\Form\EditorType;


class EditorController extends Controller
{
    public function indexAction()
    {
        $editors = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('GouzzyGamesCollectionBundle:Editor')
                       ->findBy(array(), array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:editorList.html.twig', array(
          'editors' => $editors
        ));
    }
    
    public function addEditorAction()
    {
        $editor = new Editor;  

        $form    = $this->createForm(new EditorType, $editor);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);
            
            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($editor);
                $em->flush();
            
                //return $this->redirect($this->generateUrl('gouzzy_games_collection_editor_list'));
                return $this->redirect($this->generateUrl('gouzzy_games_collection_editor_add'));
            }
        }

        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:addEditor.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
