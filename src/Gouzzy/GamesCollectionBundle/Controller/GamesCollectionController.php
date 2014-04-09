<?php

namespace Gouzzy\GamesCollectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GamesCollectionController extends Controller
{
    public function indexAction()
    {
        return $this->render('GouzzyGamesCollectionBundle:GamesCollection:index.html.twig');
    }
}
