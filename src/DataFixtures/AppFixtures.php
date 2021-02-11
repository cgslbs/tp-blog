<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Author;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create("fr_FR");

        $Authors = [];
        for($j=0; $j<10; $j++){
            $author = new Author();
            $author
            ->setName($faker->firstName())
            ->setLastName($faker->lastName);
            $manager->persist($author);
            $Authors[] = $author;
        }
        $manager->flush();

        $Categories = [];
        for($j=0; $j<10; $j++){
            $cat = new Category();
            $cat
            ->setName($faker->word);
            $manager->persist($cat);
            $Categories[] = $cat;
        }
        $manager->flush();

        $nbAuthors = count($Authors) -1;
        $nbCategories = count($Categories) -1;

        for ($i=0; $i < 50; $i++) { 
            $startDate = $faker->dateTimeBetween('-6 month','+6 month', 'Europe/Paris');
            $article = new Article();
            $article
                ->setTitre($faker->sentence(rand(1,4)))
                ->setContent($faker->text())
                ->setAuthorId($faker->numberBetween(0, $nbAuthors))
                ->setCategorieId($faker->numberBetween(0, $nbCategories))
                ->setPublishedDate($startDate)
                ->setImage("https://picsum.photos/720/480?random=".random_int(1,9999))
            ;
            $manager->persist($article);
        }
        $manager->flush();
    }
}
