<?php

namespace App\DataFixtures;

use app\Entity\Categorie;
use app\Entity\Article;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Articlefixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
                      // $product = new Product();
                     // $manager->persist($product);
        for($i=1; $i <5; $i++) {
            $category = new Categorie();
            $category->setTitle("Langage de programmationInformatique $i");
            
            $manager->persist($category);

            for($j=1; $j <5; $j++){
                $article = new Article();
                $article->setTitle("Java")
                        ->setContent(" Python est le langage de programmation open source le plus employé par les informaticiens. Ce langage s’est propulsé en tête de la
                        gestion d’infrastructure")
                        ->setImage("");


            $manager->persist($article);

            }
        }
        

        $manager->flush();
    }
}
