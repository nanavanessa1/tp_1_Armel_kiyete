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
        echo"</br> Mon mot de passe " . $name ;
    }
}
?>