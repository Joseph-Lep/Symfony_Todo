<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Task;

require_once 'vendor/autoload.php';

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 33; $i++) {
            $task = new task();
            $task
                ->setName($faker->words(nb: $faker->numberBetween(int1: 3, int2: 5), asText: true))
                ->setType($faker->word())
                ->setDone($faker->boolean(25));

            // Chainer les appels. Interface fluide (fluent interface)

            $manager->persist(object: $task);
        }
        $manager->flush();
        // methode flush de ObjetManager ?
        // envoyer les modif en bdd
    }
}
