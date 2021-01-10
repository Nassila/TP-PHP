<?php
declare(strict_types=1);
namespace App\Personnes;

class Personne
{
    private $nom;
    private $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __get_nom(): string
    {
        return $this->nom;
    }

    public function __get_prenom(): string
    {
        return $this->prenom;
    }
}