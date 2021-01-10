<?php
declare(strict_types=1);
namespace App\Personnes;

class Eleve extends Personne
{
    public function __construct(string $nom, string $prenom)
    {
        parent::__construct($nom, $prenom);
    }
}
