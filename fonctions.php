<?php
 function motDepasseEstValid($motDepasseValid)
 {
   $longueur = strlen($motDepasseValid); //cette fonction commence par calculer la longueur du nom en utilisant la fonction strlen()
   // et stocke cette longueur dans la variable $longueur.
   var_dump ($longueur);
   $reponse= //Création d'un tableau associatif $reponse avec deux clés :
    [
   "valid" => true ,
   "message" => ""
   ];
   if ($longueur < 6) 
   {
    $reponse=
   [
   "valid" => false ,
   "message" => "le mot de passe  n'est pas correct"
   ];
   }

  elseif ($longueur >10)
   {
    $reponse=[
        'Valid'=>false,
        "msg"=> "le mot de passe n'est pas correct",
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
 ?>
    

