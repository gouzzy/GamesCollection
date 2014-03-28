<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gouzzy\GamesCollectionBundle\Entity\Brand;
use Gouzzy\GamesCollectionBundle\Form\BrandType;


class BrandController extends Controller
{
    public function indexAction()
    {
        $brands = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('GouzzyGamesCollectionBundle:Brand')
                       ->findBy(array(), array('name' => 'ASC'));
        
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:brandList.html.twig', array(
          'brands' => $brands
        ));
    }
    
    public function addBrandAction()
    {
        $brand = new Brand;  

        $form    = $this->createForm(new BrandType, $brand);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') 
        {
            $form->bind($request);
            
            if ($form->isValid()) 
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($brand);
                $em->flush();
            
                //return $this->redirect($this->generateUrl('gouzzy_games_collection_brand_list'));
                return $this->redirect($this->generateUrl('gouzzy_games_collection_brand_add'));
            }
        }

        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:addBrand.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
