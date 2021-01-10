<?php
declare(strict_types=1);
namespace App\Personnes;
use App\Interfaces\Enseignement;
use App\Cours;

class Prof extends Personne implements Enseignement
{
    public function __construct(string $nom, string $prenom)
    {
        parent::__construct($nom, $prenom);
    }

    public function noter_eleves(Cours $cours): void 
    {       
        $tepm_array = $cours->__get_noteDeEleve()[0];
        foreach($tepm_array as $cle => $valeur){
            $tepm_array[$cle] = rand(0, 20);
        }
        $cours->__set_noteDeEleve($tepm_array);
    }

}
