<?php
declare(strict_types=1);
namespace App;

use App\Personnes\Eleve;
use App\Epreuve;

class Classe
{
    private $eleves = [];

    public function __construct(Eleve ...$eleves)
    {
        $this->eleves = $eleves;
    }
}
