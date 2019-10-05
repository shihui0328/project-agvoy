<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Room;
/**
 * Controleur Room
 * @Route("/room")
 */
class RoomController extends AbstractController
{
  /**
   * Lists all properties of a room
   * @Route("/{id}", name = "rooms_properties", methods="GET")
   */
    public function index(Room $room)
    {
        return $this->render('room/index.html.twig', [
          'room' => $room,
        ]);
    }
}
