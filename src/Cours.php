<?php
declare(strict_types=1);
namespace App;

use App\Personnes\Prof;

class Cours 
{
    private $nomCours;
    private $prof;
    private $noteDeEleve = [];

    public function __construct(string $nomCours, Prof $prof,array ...$noteDeEleve)
    {
        $this->nomCours = $nomCours;
        $this->prof = $prof;
        $this->noteDeEleve = $noteDeEleve;
    }

    public function __get_nomCours(): string
    {
        return $this->nomCours;
    }

    public function __get_prof(): string
    {
        return $this->prof;
    }

    public function __get_noteDeEleve(): array
    {
        return $this->noteDeEleve;
    }

    public function __set_noteDeEleve(array ...$noteDeEleve): void
    {
        $this->noteDeEleve = $noteDeEleve;
    }
}
