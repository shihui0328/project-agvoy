<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Region;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
      $em = $this->getDoctrine()->getManager();

      $regions = $em->getRepository(Region::class)->findAll();

      dump($regions);

      return $this->render('index/index.html.twig', array(
          'regions' => $regions,
      ));

    }
}
