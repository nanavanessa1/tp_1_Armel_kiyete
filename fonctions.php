<?php
function motDePasseEstValid($motDePasseValid)
{
    $longueur=strlen($motDePasseValid);
    $reponse=[
        'valid'=>true,
        'message'=>''
    ];
    if($longueur<6 ) & ($longueur >10)
    {
        $reponse=[
            'Valid'=>false,
            'message' =>'le mot de passe est incorrect'
        ];
    }
    return $reponse ;
    
}
?>