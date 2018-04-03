<?php

function fullname($lastname, $firstname){

    $Upperlastname=$str = strtoupper($lastname);
    $First=ucfirst($firstname);

    return $Upperlastname . ' ' . $First;


}

