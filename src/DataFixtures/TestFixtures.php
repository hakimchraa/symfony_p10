<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class TestFixtures extends Fixture
{
   
    public function __construct(ManagerRegistry $doctrine, UserPasswordHasherInterface $hasher)
       {
            $this->doctrine = $doctrine;
            $this->faker = FakerFactory::create('fr_FR');
            $this->hasher = $hasher;
       }
   
   
    public function load(ObjectManager $manager): void
    {
             $manager->flush();
    }
}
