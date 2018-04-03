<?php


$errors =[];

if (!array_key_exists('lastname', $_POST) || $_POST ['lastname'] == ""){
    $errors['lastname'] = "vous n'avez pas renseigné votre nom correctement";
}


if (!array_key_exists('firstname', $_POST) || $_POST ['firstname'] == ""){
    $errors['firstname'] = "vous n'avez pas renseigné votre prénom correctement";
}

if (!array_key_exists('civility', $_POST) || $_POST ['civility'] == "" || !filter_var($_POST['civility'], FILTER_VALIDATE_INT)){
    $errors['civility'] = "vous n'avez pas renseigné votre civilité correctement";
}


session_start();

if(!empty($errors)) {

    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location:index.php');




} else {
    $_SESSION['success'] = 1;
    $_SESSION['inputs'] = $_POST;
    header('location:index.php');




    }


