<?php

namespace App\DataFixtures;

use App\Entity\Formula;
use App\Entity\Hours;
use App\Entity\Menu;
use App\Entity\Pictures;
use Faker\Factory;
use Faker\Generator;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{

    /**
     * @var Generator
     */
    //faker est un générateur de fixtures qui permet de donner des valeurs factices à nos entités
    //à des fins de test.
    private Generator $faker;


    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        //Création de du role administrateur donnant accès à la gestion du site via l'espace d'administration.
        $admin = new User();
        $admin->setEmail('admin@quaiantique.com')
            ->setRoles(['ROLE_USER', 'ROLE_ADMIN'])
            ->setPlainPassword('password')
            ->setCustomersNb(1);

        $users[] = $admin;
        $manager->persist($admin);

        // Création d'une boucle qui va créer 20 utilisateurs aléatoires
        // Chaque utilisateur aura un email, un role, un nombre de convives préféré,
        // une mention d'allergie et un mot de passe qui seront générés aléatoirement.
        for ($i=1; $i <= 20; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email())
                ->setRoles(['ROLE_USER'])
                ->setCustomersNb($this->faker->numberBetween($int1 = 0,$int2 = 6))
                ->setAllergy($this->faker->text())
                ->setPlainPassword('password');

            $manager->persist($user);
        }

        //Création des plats et boissons de la carte, ils seront modifiables depuis l'espace d'administration.
        $menu1 = new Menu();
        $menu1->setCategory('Entrée')
            ->setTitle('Œuf cocotte au fromage et lardons')
            ->setDescription('Œuf cocotte au fromage et lardons')
            ->setPrice(8);

        $menu[] = $menu1;
        $manager->persist($menu1);

        $menu2 = new Menu();
        $menu2->setCategory('Entrée')
            ->setTitle('Soupe à l\'oignon gratinée')
            ->setDescription('Soupe à l\'oignon gratinée')
            ->setPrice(8);

        $menu[] = $menu2;
        $manager->persist($menu2);

        $menu3 = new Menu();
        $menu3->setCategory('Entrée')
            ->setTitle('Toastine du Chef jambon cru et raclette gratinée')
            ->setDescription('Toastine du Chef jambon cru et raclette gratinée')
            ->setPrice(8);

        $menu[] = $menu3;
        $manager->persist($menu3);

        $menu4 = new Menu();
        $menu4->setCategory('Entrée')
            ->setTitle('Salade Seguin toast de chèvre et lardons')
            ->setDescription('Salade Seguin toast de chèvre et lardons')
            ->setPrice(9);

        $menu[] = $menu4;
        $manager->persist($menu4);

        $menu5 = new Menu();
        $menu5->setCategory('Entrée')
            ->setTitle('Salade Auvergnate Bleu d\'Auvergne et noix')
            ->setDescription('Salade Auvergnate Bleu d\'Auvergne et noix')
            ->setPrice(9);

        $menu[] = $menu5;
        $manager->persist($menu5);

        $menu6 = new Menu();
        $menu6->setCategory('Plat')
            ->setTitle('Tartiflette au Reblochon de Savoie, pommes de terre, oignons et lardons')
            ->setDescription('Tartiflette au Reblochon de Savoie, pommes de terre, oignons et lardons')
            ->setPrice(18);

        $menu[] = $menu6;
        $manager->persist($menu6);

        $menu7 = new Menu();
        $menu7->setCategory('Plat')
            ->setTitle('Tartiflette aux cèpes et Reblochon de Savoie')
            ->setDescription('Tartiflette aux cèpes et Reblochon de Savoie')
            ->setPrice(19);

        $menu[] = $menu7;
        $manager->persist($menu7);

        $menu8 = new Menu();
        $menu8->setCategory('Plat')
            ->setTitle('Croziflette aux crozets, jambon cru et Reblochon')
            ->setDescription('Croziflette aux crozets, jambon cru et Reblochon')
            ->setPrice(19);

        $menu[] = $menu8;
        $manager->persist($menu8);

        $menu9 = new Menu();
        $menu9->setCategory('Plat')
            ->setTitle('Fondue Savoyarde Beaufort, Abondance et meule de Savoie')
            ->setDescription('Fondue Savoyarde Beaufort, Abondance et meule de Savoie')
            ->setPrice(20);

        $menu[] = $menu9;
        $manager->persist($menu9);

        $menu10 = new Menu();
        $menu10->setCategory('Plat')
            ->setTitle('Fondue Savoyarde au bleu')
            ->setDescription('Fondue Savoyarde au bleu')
            ->setPrice(21);

        $menu[] = $menu10;
        $manager->persist($menu10);

        $menu11 = new Menu();
        $menu11->setCategory('Dessert')
            ->setTitle('Fondant au chocolat')
            ->setDescription('Fondant au chocolat')
            ->setPrice(7);

        $menu[] = $menu11;
        $manager->persist($menu11);

        $menu12 = new Menu();
        $menu12->setCategory('Dessert')
            ->setTitle('Crème brûlée à la vanille')
            ->setDescription('Crème brûlée à la vanille')
            ->setPrice(7);

        $menu[] = $menu12;
        $manager->persist($menu12);

        $menu13 = new Menu();
        $menu13->setCategory('Dessert')
            ->setTitle('Profiteroles au chocolat')
            ->setDescription('Profiteroles au chocolat')
            ->setPrice(8);

        $menu[] = $menu13;
        $manager->persist($menu13);

        $menu14 = new Menu();
        $menu14->setCategory('Dessert')
            ->setTitle('Café gourmand')
            ->setDescription('Café gourmand')
            ->setPrice(9);

        $menu[] = $menu14;
        $manager->persist($menu14);

        $menu15 = new Menu();
        $menu15->setCategory('Dessert')
            ->setTitle('Fondue au chocolat surprise')
            ->setDescription('Fondue au chocolat surprise')
            ->setPrice(9);

        $menu[] = $menu15;
        $manager->persist($menu15);

        $menu16 = new Menu();
        $menu16->setCategory('Boisson')
            ->setTitle('Kir Royal')
            ->setDescription('Kir Royal')
            ->setPrice(6);

        $menu[] = $menu16;
        $manager->persist($menu16);

        $menu17 = new Menu();
        $menu17->setCategory('Boisson')
            ->setTitle('Bière pression')
            ->setDescription('Bière pression')
            ->setPrice(4);

        $menu[] = $menu17;
        $manager->persist($menu17);

        $menu18 = new Menu();
        $menu18->setCategory('Boisson')
            ->setTitle('Cidre')
            ->setDescription('Cidre')
            ->setPrice(4);

        $menu[] = $menu18;
        $manager->persist($menu18);

        $menu19 = new Menu();
        $menu19->setCategory('Boisson')
            ->setTitle('Jus de fruits')
            ->setDescription('Orange, Pomme, Raisin, Ananas')
            ->setPrice(3);

        $menu[] = $menu19;
        $manager->persist($menu19);

        $menu20 = new Menu();
        $menu20->setCategory('Boisson')
            ->setTitle('Soda')
            ->setDescription('Coca-cola, Sprite, Fanta')
            ->setPrice(3);

        $menu[] = $menu20;
        $manager->persist($menu20);

        //Création des menus proposés, ils seront modifiables depuis l'espace d'administration.
        $formula1 = new Formula();
        $formula1->setTitle('Menu découverte')
            ->setFormulaType('Entrée + Plat ou Plat + Dessert')
            ->setDescription('Menu à la carte')
            ->setPrice(25);

        $formula[] = $formula1;
        $manager->persist($formula1);

        $formula2 = new Formula();
        $formula2->setTitle('Menu complet')
            ->setFormulaType('Entrée + Plat + Dessert')
            ->setDescription('Menu à la carte')
            ->setPrice(30);

        $formula[] = $formula2;
        $manager->persist($formula2);

        //Création des horaires d'ouverture, ils seront modifiables depuis l'espace d'administration.
        $ophours1 = new Hours();
        $ophours1->setDay('Lundi')
            ->setTime('Fermé')
            ->setAfternoon('Fermé');

        $ophours[] = $ophours1;
        $manager->persist($ophours1);

        $ophours2 = new Hours();
        $ophours2->setDay('Mardi')
            ->setTime('12:00 - 14:00')
            ->setAfternoon('19:00 - 22:00');

        $ophours[] = $ophours2;
        $manager->persist($ophours2);

        $ophours3 = new Hours();
        $ophours3->setDay('Mercredi')
            ->setTime('12:00 - 14:00')
            ->setAfternoon('19:00 - 22:00');

        $ophours[] = $ophours3;
        $manager->persist($ophours3);

        $ophours4 = new Hours();
        $ophours4->setDay('Jeudi')
            ->setTime('12:00 - 14:00')
            ->setAfternoon('19:00 - 22:00');

        $ophours[] = $ophours4;
        $manager->persist($ophours4);

        $ophours5 = new Hours();
        $ophours5->setDay('Vendredi')
            ->setTime('12:00 - 14:00')
            ->setAfternoon('19:00 - 22:00');

        $ophours[] = $ophours5;
        $manager->persist($ophours5);

        $ophours6 = new Hours();
        $ophours6->setDay('Samedi')
            ->setTime('12:00 - 14:00')
            ->setAfternoon('19:00 - 22:00');

        $ophours[] = $ophours6;
        $manager->persist($ophours6);

        $ophours7 = new Hours();
        $ophours7->setDay('Dimanche')
            ->setTime('12:00 - 14:00')
            ->setAfternoon('Fermé');

        $ophours[] = $ophours7;
        $manager->persist($ophours7);

        $picture1 = new Pictures();
        $picture1->setTitle('Tartiflette')
            ->setPreview('tartiflette.jpg')
            ->setCardTitle('Notre tartiflette')
            ->setDescription('Savourez ce classique de la cuisine savoyarde en version gastronomique.');

        $picture[] = $picture1;
        $manager->persist($picture1);

        $picture2 = new Pictures();
        $picture2->setTitle('Fondue Savoyarde')
            ->setPreview('fondue-savoyarde.jpg')
            ->setCardTitle('Notre fondue savoyarde')
            ->setDescription('Dégustez notre fondue savoyarde à base de Beaufort, Abondance et meule de Savoie.');

        $picture[] = $picture2;
        $manager->persist($picture2);

        $picture3 = new Pictures();
        $picture3->setTitle('Croziflette')
            ->setPreview('croziflette.jpg')
            ->setCardTitle('Notre croziflette')
            ->setDescription('Découvrez cette spécialité savoyarde à base de crozets, de jambon cru et de Reblochon.');

        $picture[] = $picture3;
        $manager->persist($picture3);

        $manager->flush();
    }
}
