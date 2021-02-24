<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();

        $user -> setUsername('admin');
        $user -> setPassword('');//todo needs encoding first
        $user -> setEmail('no-reply@wiiw.tn');
        $manager -> persist($user);

        $manager->flush();
    }
}
