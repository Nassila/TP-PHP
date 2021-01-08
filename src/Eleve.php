<?php
declare(strict_types=1);
namespace App;

class Eleve
{
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __get_nom()
    {
        return $this->nom;
    }

    public function __get_prenom()
    {
        return $this->prenom;
    }
}
