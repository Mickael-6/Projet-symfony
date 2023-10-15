<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $livre = new Livre();
            $livre->setTitle("l'art de la guerre");
            $livre->setimage("https://m.media-amazon.com/images/I/61gi9XB57pL._SL1220_.jpg");
            $livre->setauthor("Sun Tzu");
            $livre->setcategory("non-fiction");
            $livre->setdate("Ve siècle av. J.-C.");
            $livre->setquantity("0");
            $manager->persist($livre);
            
            $livre = new Livre();
            $livre->setTitle(" Les Naufragés du Wager");
            $livre->setimage("https://m.media-amazon.com/images/I/41F8d6sY-FL._SX195_.jpg");
            $livre->setauthor("David Grann");
            $livre->setcategory("non-fiction");
            $livre->setdate("18 avril 2023");
            $livre->setquantity("12");
            $manager->persist($livre);
            
            $livre = new Livre();
            $livre->setTitle("Le jardin des oiseaux");
            $livre->setimage("https://www.babelio.com/couv/CVT_Le-jardin-des-oiseaux_188.jpg");
            $livre->setauthor("Jean Louis Lovisa");
            $livre->setcategory("non-fiction");
            $livre->setdate("20 septembre2023");
            $livre->setquantity("20");
            $manager->persist($livre);
            
            $livre = new Livre();
            $livre->setTitle("Titeuf, tome 18 : Suivez la mèche");
            $livre->setimage("https://m.media-amazon.com/images/I/51aU+JkaKaL._SX195_.jpg");
            $livre->setauthor("ZEP");
            $livre->setcategory("bande dessinée");
            $livre->setdate("août 2023");
            $livre->setquantity("5");
            $manager->persist($livre);

            $livre = new Livre();
            $livre->setTitle("Les Bijoux de la Castafiore");
            $livre->setimage("https://www.babelio.com/couv/CVT_Les-Bijoux-de-la-Castafiore-edition-du-Journal-de-_2077.jpg");
            $livre->setauthor("Hergé");
            $livre->setcategory("bande dessinée");
            $livre->setdate("4 septembre 1962");
            $livre->setquantity("0");
            $manager->persist($livre);
            
            $livre = new Livre();
            $livre->setTitle("Les Guerres de Lucas");
            $livre->setimage("https://www.babelio.com/couv/CVT_Les-Guerres-de-Lucas_984.jpg");
            $livre->setauthor("Renaud Roche");
            $livre->setcategory("bande dessinée");
            $livre->setdate("4 octobre 2023");
            $livre->setquantity("10");
            $manager->persist($livre);
            
            $livre = new Livre();
            $livre->setTitle("One Piece, tome 105 : Le rêve de Luffy");
            $livre->setimage("https://www.babelio.com/couv/CVT_One-Piece-tome-105_787.jpg");
            $livre->setauthor("Eiichirô Oda");
            $livre->setcategory("manga");
            $livre->setdate("30 septembre 2023");
            $livre->setquantity("100");
            $manager->persist($livre);
            
            $livre = new Livre();
            $livre->setTitle("My Hero Academia, tome 1");
            $livre->setimage("https://www.babelio.com/couv/CVT_My-Hero-Academia-tome-1_2849.jpg");
            $livre->setauthor("Kôhei Horikoshi");
            $livre->setcategory("manga");
            $livre->setdate("4 novembre 2014");
            $livre->setquantity("25");
            $manager->persist($livre);
            
            $livre = new Livre();
            $livre->setTitle("Dragon Ball Super, tome 20");
            $livre->setimage("https://www.babelio.com/couv/CVT_Dragon-Ball-Super-tome-20_4187.jpg");
            $livre->setauthor("Akira Toriyama ");
            $livre->setcategory("manga");
            $livre->setdate("23 août 2023");
            $livre->setquantity("14");
            $manager->persist($livre);

        $manager->flush();
    }
}
