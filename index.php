<?php

use App\Classe;
use App\Eleve;
use App\Epreuve;

require __DIR__.'/vendor/autoload.php';


$eleve1 = new Eleve('Jean', 'A');
$eleve2 = new Eleve('Paul', 'B');
$eleve3 = new Eleve('Tim', 'C');

$classe1 = new Classe(
    ...[
       $eleve1,
       $eleve2,
       $eleve3,
    ]
);


$notes = array($eleve1->__get_nom() => 12, $eleve2->__get_nom() => 15, $eleve3->__get_nom() => 10);

$epreuve1 = new Epreuve(
    "PHP",
    "13h",
    $notes
);

$classe1->get_classement($epreuve1);
