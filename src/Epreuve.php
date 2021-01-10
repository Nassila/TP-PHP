<?php
declare(strict_types=1);
namespace App;
use App\Interfaces\Evaluation;

class Epreuve implements Evaluation
{
    private $nomEpreuve;
    private $heure;
    private $noteDeEleve = [];

    public function __construct(string $nomEpreuve, string $heure,array ...$noteDeEleve)
    {
        $this->nomEpreuve = $nomEpreuve;
        $this->heure = $heure;
        $this->noteDeEleve = $noteDeEleve;
    }

    public function __get_nomEpreuve(): string
    {
        return $this->nomEpreuve;
    }

    public function __get_heure(): string
    {
        return $this->heure;
    }

    public function __get_noteDeEleve(): array
    {
        return $this->noteDeEleve;
    }

    public function get_classement(): void
    {
        echo "===== Le classement de l epreuve " . $this->nomEpreuve . " passé à  " .  $this->heure." : ===== <br>\n";
        
        arsort($this->noteDeEleve[0]);
        
        foreach($this->noteDeEleve[0] as $cle => $valeur){
            echo $cle. ' a eu la note de ' .$valeur."<br>\n";
        }
    }
}
