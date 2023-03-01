<?php

namespace App\Entity;

use App\Repository\EauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EauRepository::class)]
class Eau extends Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
