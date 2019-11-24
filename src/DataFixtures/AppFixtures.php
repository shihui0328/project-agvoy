<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Region;
use App\Entity\Room;


class AppFixtures extends Fixture
{

  public const IDF_REGION_REFERENCE = 'idf-region';
    public function load(ObjectManager $manager)
    {

    $region = new Region();
    $region->setCountry("FR");
    $region->setName("Paris");
    $region->setPresentation("The capital of France");
    $manager->persist($region);

    $region_beijing = new Region();
    $region_beijing->setCountry("CN");
    $region_beijing->setName("Beijing");
    $region_beijing->setPresentation("The capital of China");
    $manager->persist($region_beijing);

    $region_shanghai = new Region();
    $region_shanghai->setCountry("CN");
    $region_shanghai->setName("Shanghai");
    $region_shanghai->setPresentation("Big city in China");
    $manager->persist($region_shanghai);



    $region_washington = new Region();
    $region_washington->setCountry("US");
    $region_washington->setName("Washington");
    $region_washington->setPresentation("The capital of the United States");
    $manager->persist($region_washington);


    $region_tokyo = new Region();
    $region_tokyo->setCountry("JP");
    $region_tokyo->setName("Tokyo");
    $region_tokyo->setPresentation("The capital of Japan");
    $manager->persist($region_tokyo);


    $region_lisbon = new Region();
    $region_lisbon->setCountry("PT");
    $region_lisbon->setName("Lisbon");
    $region_lisbon->setPresentation("The capital of Portugal");
    $manager->persist($region_lisbon);


    $region_moscow = new Region();
    $region_moscow->setCountry("RU");
    $region_moscow->setName("Moscow");
    $region_moscow->setPresentation("La région française capitale");
    $manager->persist($region_moscow);


    $manager->flush();
    // Une fois l'instance de Region sauvée en base de données,
    // elle dispose d'un identifiant généré par Doctrine, et peut
    // donc être sauvegardée comme future référence.
    $this->addReference(self::IDF_REGION_REFERENCE, $region);

    // $product = new Product();
    // $manager->persist($product);

    $room = new Room();
    $room->setSummary("Beau poulailler ancien à Évry");
    $room->setDescription("très joli espace sur paille");
    //$room->addRegion($region);
    // On peut plutôt faire une référence explicite à la référence
    // enregistrée précédamment, ce qui permet d'éviter de se
    // tromper d'instance de Region :
    $room->addRegion($region_shanghai);

    $room = new Room();
    $room->setSummary("It's near the center of the city");
    $room->setDescription("The landlord is French, can speak English, French and Portuguese, like Chinese culture");
    $room->setPrice(500);
    $room->setBed(3);
    $room->setSuperficy(24);
    $room->setCapacity(3);
    $room->addRegion($region_washington);
    $manager->persist($room);

    $room = new Room();
    $room->setSummary("New House");
    $room->setDescription("Three minutes from the subway");
    $room->setBed(3);
    $room->setPrice(500);
    $room->setSuperficy(32);
    $room->setCapacity(2);
    $room->addRegion($region_washington);
    $manager->persist($room);

    $room = new Room();
    $room->setSummary("Old House");
    $room->setDescription("Tradition house in Washington");
    $room->setBed(4);
    $room->setSuperficy(21);
    $room->setPrice(500);
    $room->setCapacity(4);
    $room->addRegion($region_washington);
    $manager->persist($room);

    $room = new Room();
    $room->setSummary("Old House");
    $room->setDescription("Tradition house in Beijing");
    $room->setBed(1);
    $room->setPrice(400);
    $room->setSuperficy(16);
    $room->setCapacity(2);
    $room->addRegion($region_beijing);
    $manager->persist($room);

    $room = new Room();
    $room->setSummary("Old House");
    $room->setDescription("Tradition house in Beijing");
    $room->setBed(6);
    $room->setSuperficy(23);
    $room->setCapacity(6);
    $room->setPrice(500);
    $room->addRegion($region_beijing);
    $manager->persist($room);


    $room = new Room();
    $room->setSummary("Seven minutes from the subway");
    $room->setDescription("Tradition house in Shanghai");
    $room->setBed(3);
    $room->setPrice(200);
    $room->setSuperficy(32);
    $room->setCapacity(3);
    $room->addRegion($region_shanghai);
    $manager->persist($room);


        $room = new Room();
        $room->setSummary("Seven minutes from the subway");
        $room->setDescription("Tradition house in Lisbon");
        $room->setBed(3);
        $room->setPrice(200);
        $room->setSuperficy(32);
        $room->setCapacity(3);
        $room->addRegion($region_lisbon);
        $manager->persist($room);

        $room = new Room();
        $room->setSummary("Seven minutes from the subway");
        $room->setDescription("Tradition house in Lisbon");
        $room->setBed(3);
        $room->setPrice(200);
        $room->setSuperficy(32);
        $room->setCapacity(3);
        $room->addRegion($region_lisbon);
        $manager->persist($room);

        $room = new Room();
        $room->setSummary("It's near the center of Lisbon");
        $room->setDescription("The landlord is Portuguese, can speak English, French and Portuguese");
        $room->setBed(3);
        $room->setPrice(200);
        $room->setSuperficy(32);
        $room->setCapacity(3);
        $room->addRegion($region_lisbon);
        $manager->persist($room);

        $room = new Room();
        $room->setSummary("Seven minutes from the subway");
        $room->setDescription("The landlord is Portuguese, can speak English, French and Portuguese");
        $room->setBed(3);
        $room->setPrice(200);
        $room->setSuperficy(32);
        $room->setCapacity(3);
        $room->addRegion($region_tokyo);
        $manager->persist($room);

    $room = new Room();
    $room->setSummary("Seven minutes from the subway");
    $room->setDescription("Tradition house in Paris");
    $room->setBed(3);
    $room->setPrice(200);
    $room->setSuperficy(32);
    $room->setCapacity(3);
    $room->addRegion($region);
    $manager->persist($room);

    $room = new Room();
    $room->setSummary("Seven minutes from the subway");
    $room->setDescription("The landlord is Portuguese, can speak English, French and Portuguese");
    $room->setBed(3);
    $room->setSuperficy(32);
    $room->setPrice(530);
    $room->setCapacity(3);
    $room->addRegion($region_moscow);
    $manager->persist($room);

        $manager->flush();
    }
}
