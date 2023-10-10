<?php
require_once("fonctions.php");
var_dump($_POST);

if($_POST){
    $name=$_POST["name"]; //Cette ligne extrait la valeur du champ de formulaire nommé "name" et la stocke dans la variable $name.
    if(empty($name))//Cette structure if vérifie si la variable $name est vide (c'est-à-dire si aucun nom n'a été saisi dans le champ de formulaire). Si c'est le cas, elle affiche "Nom vide".
    {
        echo"</br> champ vide</br>";
    }
    else{
        echo"</br> Mon mot de passe est le suivant :" . $name ;
    }
}
echo"</br>";
$saltedMotDePasse= addSalt($_POST["name"]);
echo"<p>  Voici donc la valeur de mon mot de passe apres ajout du sel :".$saltedMotDePasse; // permets affichage 
 echo"</br>";
 $encodeMotDePasse = encodeMotDePasse($saltedMotDePasse);
 echo"</br>";
 echo "<p> Voici donc la valeur de mon mot de passe apres encodage:".$encodeMotDePasse;
echo"</br>";
?>
<a href ="./index.php" > Retour </a>