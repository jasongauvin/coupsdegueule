<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();

            $post->setTitle("Test");
            $post->setContent("loremipsumloremipsumloremipsumloremipsumloremipsumloremipsumloremipsumloremipsum");
            $post->setCreationDate(new \DateTime());
            $post->setEditDate(new \DateTime());

            $manager->persist($post);
        }


        $manager->flush();
    }
}
