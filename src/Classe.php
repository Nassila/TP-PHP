<?php
declare(strict_types=1);
namespace App;

use App\Eleve;
use App\Epreuve;

class Classe
{
    private $eleves = [];

    public function __construct(Eleve ...$eleves)
    {
        $this->eleves = $eleves;
    }

    public function get_classement(Epreuve $epreuve)
    {

        //sort($epreuve->__get_noteDeEleve());

        echo "Le classement de l epreuve " . $epreuve->__get_nomEpreuve() . " passé à : " . $epreuve->__get_heure() . "\n";
        
        foreach($epreuve->__get_noteDeEleve() as $nom => $note) {
            echo $nom;
        }
    }
}
