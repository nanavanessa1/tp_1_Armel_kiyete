<?php
require_once("fonctions.php");
var_dump($_POST);

if($_POST){
    $name=$_POST["name"];
    if(empty($name))
    {
        echo"</br>Nom vide</br>";
    }
    else{
        echo"</br> Mon mot de passe est :" . $name ;
    }
}
echo"</br>";
$saltedMotDePasse= addSalt($_POST["name"]);
var_dump($saltedMotDePasse);
 echo"</br>Mon mot de passe apres avoir ajouter du sel:".$saltedMotDePasse;

 $encodeMotDePasse = encodeMotDePasse($saltedMotDePasse);
 echo"</br>";
 echo "</br> Mon mot de passe apres encodage :".$encodeMotDePasse;
 echo "</br>";
    

    






?>
<a href ="./index.php" > Retour </a>