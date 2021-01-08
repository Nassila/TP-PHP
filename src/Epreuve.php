<?php
declare(strict_types=1);
namespace App;

class Epreuve
{
    private $nomEpreuve;
    private $heure;
    private $noteDeEleve = array();

    public function __construct($nomEpreuve, $heure, ...$noteDeEleve)
    {
        $this->nomEpreuve = $nomEpreuve;
        $this->heure = $heure;
        $this->noteDeEleve = $noteDeEleve;
    }

    public function __get_nomEpreuve()
    {
        return $this->nomEpreuve;
    }

    public function __get_heure()
    {
        return $this->heure;
    }

    public function __get_noteDeEleve()
    {
        return $this->noteDeEleve;
    }
}
