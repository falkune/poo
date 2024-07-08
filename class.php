<?php
// definition d'une classe : por definir une class on utilise le mot "class" ensuite le nom de la classe avec la premiere lettre en majuscule.
class Voiture{ # debut de la classe
    // declarer les attributs d'une voiture (attribut = variable)
    public $marque;
    public $model;
    public $typeCarburant;

    // definition du constructeur
    public function __construct($ma, $mo, $ca){
        $this->marque = $ma;
        $this->model =$mo;
        $this->typeCarburant = $ca;
    }

    // creer les methodes 
    public function demarrer(){
        echo "la voiture demare...";
    }

    public function rouler(){
        echo "la voiture roule...";
    }

} # fin de la classe

// instancier un objet de la classe Voiture = creer une variable de type Voiture.
$voiture1 = new Voiture("peugeot", "308", "diesel");
// la $voiture1 dit etre de marque peugeot, model 308, type carburant diesel
// $voiture1->marque = "peugeot";
// $voiture1->model = "308";
// $voiture1->typeCarburant = "diesel";
var_dump($voiture1);
// creer une voiture de marque renault, model megane, type carburant essence
echo "<br>";
$voiture2 = new Voiture("renault", "megane", "essence");
var_dump($voiture2);
echo "<br>";
// faire demarrer voiture1
$voiture1->demarrer();
