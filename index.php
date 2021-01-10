<?php

use App\Classe;
use App\Epreuve;
use App\Cours;
use App\Personnes\Eleve;
use App\Personnes\Prof;

require __DIR__.'/vendor/autoload.php';


$eleve1 = new Eleve('Jean', 'A');
$eleve2 = new Eleve('Paul', 'B');
$eleve3 = new Eleve('Tim', 'C');
$eleve4 = new Eleve('Celine', 'D');
$eleve5 = new Eleve('Nicolas', 'E');
$eleve6 = new Eleve('Thomas', 'F');

$classe1 = new Classe(
    ...[
       $eleve1,
       $eleve2,
       $eleve3,
       $eleve4,
       $eleve5,
       $eleve6,
    ]
);


$notesEpreuve = [
    $eleve1->__get_nom(). ' ' . $eleve1->__get_prenom()  => 12,
    $eleve2->__get_nom(). ' ' . $eleve2->__get_prenom() => 15,
    $eleve3->__get_nom(). ' ' . $eleve3->__get_prenom() => 10,
    $eleve4->__get_nom(). ' ' . $eleve4->__get_prenom()  => 11,
    $eleve5->__get_nom(). ' ' . $eleve5->__get_prenom() => 18,
    $eleve6->__get_nom(). ' ' . $eleve6->__get_prenom() => 14
];

$epreuve1 = new Epreuve(
    "PHP",
    "13h",
    $notesEpreuve
);

$epreuve1->get_classement();

$prof1 = new Prof("Pierre", "De");

$notesCours = [
    $eleve1->__get_nom(). ' ' . $eleve1->__get_prenom()  => 0,
    $eleve2->__get_nom(). ' ' . $eleve2->__get_prenom() => 0,
    $eleve3->__get_nom(). ' ' . $eleve3->__get_prenom() => 0,
    $eleve4->__get_nom(). ' ' . $eleve4->__get_prenom()  => 0,
    $eleve5->__get_nom(). ' ' . $eleve5->__get_prenom() => 0,
    $eleve6->__get_nom(). ' ' . $eleve6->__get_prenom() => 0
];

$cours1 = new Cours("Python", $prof1, $notesCours);

$prof1->noter_eleves($cours1);


echo " <br>\n  ===== Les notes du cours " . $cours1->__get_nomCours() ." sont : ===== <br>\n";

foreach ($cours1->__get_noteDeEleve()[0] as $cle => $valeur) {
    echo $cle. ' a eu la note de ' .$valeur."<br>\n";
}
