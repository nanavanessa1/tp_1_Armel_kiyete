<?php
 function motDepasseEstValid($motDepasseValid)
 {
   $longueur = strlen($motDepasseValid); //cette fonction commence par calculer la longueur du nom en utilisant la fonction strlen()
   // et stocke cette longueur dans la variable $longueur.
   var_dump ($longueur);
   $reponse=
   [
   "valid" => true ,
   "message" => ""
   ];
   if ($longueur < 6) 
   {
    $reponse=
   [
   "valid" => false ,
   "message" => "le nom n'est pas correct"
   ];
   }

  elseif ($longueur >10)
   {
    $reponse=[
        'Valid'=>false,
        "msg"=> "le nom n'est pas correct",
    ];
    return $response;
  }
}
 ?>
    

