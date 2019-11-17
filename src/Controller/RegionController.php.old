<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Room;
use App\Entity\Region;
/**
 * Controleur Region
 * @Route("/region")
 */
class RegionController extends AbstractController
{
  /**
   * Lists all rooms entities in a region
   * @Route("/{id}", name = "rooms_list", methods="GET")
   */
    public function index(Region $region)
    {


      $rooms = $region->getRooms();

      dump($rooms);

      return $this->render('region/index.html.twig', [
          'rooms' => $rooms,
      ]);
    }
}
