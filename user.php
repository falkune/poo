<?php
/**
 * Creez une classe User avec les attributs: nom, prenom, email, password
 * 
 * definir le constructeur de la classe
 * definir les methodes inscription, connexion et deconnexion
 * la methode inscription prndra parametres (le nom, prenom, email et password) et va afficher le message "votre inscription est prise en compte..."
 * la methode connexion va prendre 2 parametres (email, password)  et va afficher le message "vous ete bien connecte"
 * la methode deconnexion affiche le message "session terminee"
 */
class User{
    // definition des attributs
    private $nom;
    public $prenom;
    public $email;
    public $password;

    // definition du constructeur
    public function __construct($nom, $prenom, $email, $pswd){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $pswd;
    }

    // definition de la methode inscription
    public function inscription($nom, $prenom, $email, $pswd){
        echo "Bonjour vous etes inscrit...<br>";
    }

    // definition de la methode connexion
    public function connexion($email, $pswd){
        echo "Vous etes connecte...<br>";
    }

    // definition de la methode deconnexion
    public function deconnexion(){
        echo "Session terminee...<br>";
    }

    // definir le getter de l'attribut $nom servira a retourner ou afficher la valeur du nom
    public function getNom(){
        return $this->nom;
    }
    // definir le setter de l'attribut $nom servira a modifier la valeur de l'attribut
    public function setNom($n){
        if(!empty($n)){
            $this->nom = $n;
        }else{
            echo "le nom ne doit pa s etre vide!";
        }
    }

}

// instancier un objet de la classe User
$user1 = new User("Doe", "John", "johndoe@mail.com", "123456");
var_dump($user1);
echo "<br>";
$user1->inscription("Doe", "John", "johndoe@mail.com", "123456");
$user1->connexion("johndoe@mail.com", "123456");
$user1->deconnexion();
$user1->nom = "TOTO"; // erreur car private
echo $user1->nom;  // erreur car private
var_dump($user1);

