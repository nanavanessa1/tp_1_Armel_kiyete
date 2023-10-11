<?php
function motDePasseEstValid($motDePasseValid)
{
    $longueur=strlen($motDePasseValid);
    $longueur = strlen($motDePasse);
    if ($longueur < 6 || $longueur > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }
    
}
 
function addSalt($nameToSalt)
{
    $salt="ajouteDuSel1234";
    $saltedMotDePasse =$salt.$nameToSalt.$salt;

    return $saltedMotDePasse;
}
function encodeMotDePasse($saltedMotDePasse)
{
    $encodeMotDePasse=sha1($saltedMotDePasse);
    return $encodeMotDePasse;
  //SHA-1 est un algorithme d'encodage qui prend une chaîne de caractères en entrée 
  //et génère une chaîne de caractères hexadécimale de 40 caractères en sortie.  
}
 ?>
    

