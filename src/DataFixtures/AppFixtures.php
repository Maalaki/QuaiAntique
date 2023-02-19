<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // Création d'une boucle qui va créer 50 articles aléatoires
        // Chaque article aura un titre, un contenu, une date de publication qui seront générés aléatoirement
        for ($i=1; $i <= 50; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email())
                ->setRoles(['ROLE_USER'])
                ->setCustomersNb($this->faker->numberBetween($int1 = 0,$int2 = 10))
                ->setAllergy($this->faker->text())
                ->setPlainPassword('password');

            $manager->persist($user);
        }
        $manager->flush();
    }
}
