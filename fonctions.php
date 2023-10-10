<?php
function motDePasseEstValid($motDePasseValid)
{
    $longueur=strlen($motDePasseVali);
    $reponse=[
        'Valid'=>true,
        'msg'=>''
    ];
    if($longueur<6)
    {
        $reponse=[
            'isValid'=>false,
            'msg' =>'Mot de passe est trop court'
        ];
    }
    elseif ($longueur >10)
    {
        $reponse=[
            'Valid'=>false,
            'msg' => 'Mot de passe est trop long ',
        ];
        return $reponse;
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
    

