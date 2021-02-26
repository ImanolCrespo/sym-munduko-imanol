<?php

namespace App\Controller;

use App\Entity\Actividades;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/default", name="default")
     */
   public function indexAction(Request $request)
 {
    $actividades = $this->getDoctrine()
        ->getRepository(Actividades::class)
        ->findAllActive();
        return $this->render('default/index.html.twig', array('actividades' => $actividades,));
 }

}
