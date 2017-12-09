<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventosController extends Controller
{
    /**
     * @Route("/eventos/", name="eventos")
     */
    public function indexAction(Request $request)
    {
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Eventos:eventos.html.twig');
        return $this->render('AppBundle:Boletos:boletos.html.twig');
    }

}
