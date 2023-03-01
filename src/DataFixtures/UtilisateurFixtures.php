<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\Constraints\Date;

class UtilisateurFixtures extends Fixture
{
  private $encoder;
  public function  __construct(UserPasswordHasherInterface $encoder){
    $this->encoder=$encoder;
  }
    public function load(ObjectManager $manager): void
    {
      $roles=["ROLE_ADMIN","ROLE_GESTIONNAIRE","ROLE_PARTICULIER"];
      $plainPassword = 'passer@123';
     for ($i = 1; $i <=4; $i++) {
         $user = new Utilisateur();
         $pos= rand(0,2);
         $user->setNomComplet('User  '.$i);
         $user->setEmail("user" .$i ."@gmail.com");
         $encoded = $this->encoder->hashPassword($user, $plainPassword);
         $user->setPassword($encoded);
         $user->setDateNaiss(new DateTime());
         $user->setRoles([$roles[$pos]]);
         $manager->persist($user);
         $this->addReference("User".$i, $user);
     }

        $manager->flush();
    }
}



