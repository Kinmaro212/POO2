<?php

include "Titulaire.php";       // Inclusion du fichier Titulaire.php pour accéder à la classe Titulaire
include "CompteBancaire.php";  // Inclusion du fichier CompteBancaire.php pour accéder à la classe CompteBancaire

// Création des objets Titulaire
$titulaire1 = new Titulaire("Hakim", "ZIYECH", "2001-08-15", "Casablanca");
$titulaire2 = new Titulaire("Elon", "MUSC", "1975-06-10", "New-York");
$titulaire3 = new Titulaire("Daryl", "DYXON", "1999-05-15", "Mulhouse");

// Création des comptes bancaires pour chaque titulaire
// Chaque compte a un libellé (ex : Compte courant), un solde initial, une devise et un titulaire associé
$compteCourant = new CompteBancaire("Compte courant", 100, "Dirham", $titulaire1);
$livretA = new CompteBancaire("Livret A", 90, "Dirham", $titulaire1);
$compteCourant2 = new CompteBancaire("Compte courant", 15, "Dollars", $titulaire2);
$livretA2 = new CompteBancaire("Livret A", 70, "Dollars", $titulaire2);

$compteCourant3 = new CompteBancaire("Compte courant", 1957, "Euros", $titulaire3);
$livretA3 = new CompteBancaire("Livret A", 400, "Euros", $titulaire3);

// $titulaire1 -> infosTitulaire();
// $titulaire2 -> infosTitulaire();
// $titulaire3 -> infosTitulaire();

// $compteCourant3-> Virement($livretA3, 100);
// echo $compteCourant->getSoldeInitial()."<br>";
// $compteCourant -> crediterCompte(500)."<br>";
// echo $compteCourant->getSoldeInitial()."<br>";




// echo $compteCourant3->getSoldeInitial()."<br>";
// $compteCourant3-> Virement($livretA3, 7);
// echo $compteCourant3->getSoldeInitial()."<br>";

echo $titulaire1 ->calculerAge();

















//   echo $compteCourant;
//TEST 
// echo $titulaire1->getPrenom() $titulaire1->getNom() "possède" $compteCourant->getSoldeInitial() {$compteCourant->getDevise()} 'dans son compte courant'.;
// echo $titulaire1->getPrenom() $titulaire1->getNom() "possède" $livretA->getSoldeInitial() {$livretA->getDevise()} 'dans son Livret A'.;

// echo $titulaire2->getPrenom() $titulaire2->getNom() "possède" $compteCourant->getSoldeInitial() {$compteCourant->getDevise()} 'dans son compte courant'.;
// echo $titulaire2->getPrenom() $titulaire2->getNom() "possède" $livretA->getSoldeInitial() {$livretA->getDevise()} 'dans son Livret A'.;

// echo $titulaire3->getPrenom() $titulaire3->getNom() "possède" $compteCourant->getSoldeInitial() {$compteCourant->getDevise()} 'dans son compte courant'.;
// echo $titulaire3->getPrenom() $titulaire3->getNom() "possède" $livretA->getSoldeInitial() {$livretA->getDevise()} 'dans son Livret A'.;


// var_dump permet d'afficher le contenu détaillé de la variable, ici les détails du titulaire1
// var_dump($titulaire1);


// var_dump($titulaire1);