<?php

require 'connect.php';
require 'function.php';




//include 'function.php';
//penser à faire une fonction function.php


$resultat = mysqli_query($bdd, 'SELECT * FROM `contact`
INNER JOIN civility
WHERE contact.civility_id = civility.id
ORDER BY firstname asc');




session_start();


$firstname = mysqli_real_escape_string($bdd, $_SESSION['inputs']['firstname']);
$lastname = mysqli_real_escape_string($bdd, $_SESSION['inputs']['lastname']);
$civility = mysqli_real_escape_string($bdd, $_SESSION['inputs']['civility']);


$query = "INSERT INTO contact(lastname, firstname, civility_id) VALUES ('$firstname', '$lastname', '$civility')";
mysqli_query($bdd, $query);



?>





<!DOCTYPE HTML>
<html>
<head>

    <title>index</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>


</head>
<body>





<!-- Page Content -->
<div class="container">

    <?php if (array_key_exists('errors', $_SESSION)):?>
        <div class="alert alert-danger">
            <?= implode('<br>',$_SESSION['errors'])?>
        </div>

    <?php endif; ?>

    <?php if (array_key_exists('success', $_SESSION)):?>
        <div class="alert alert-success">
            Votre message nous est bien parvenu
        </div>

    <?php endif; ?>

    <div class="row">
        <div class="col-xs-12">
            <table style="width:100%">
                <tr>
                    <th>Civilité</th>
                    <th>NOM Prénom</th>
                </tr>

                    <?php
                    while($donnees = mysqli_fetch_assoc($resultat))
                    {
                        echo ('<tr>');
                        echo ('<td>' . $donnees['civility'] . '</td>');
                        echo ('<td>' . fullname($donnees['firstname'], $donnees['lastname']) . '<td>');
                        echo ('</tr>');
                    }
                    ?>
            </table>
        </div>
    </div>

    <hr>

    <form action="post_contact.php" method="POST">
        <div class="row">
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="lastname">Name</label>
                    <input type="text" name="lastname" id="lastname" class ="form control" value="<?=isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname']:''; ?>" required>
                </div>
            <div>

            <div class="col-xs-4">
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname" class ="form control" value="<?=isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname']:''; ?>" required>
                </div>
            <div>

            <div class="col-xs-4">
                <div class="form-group">
                    <label for="civility">Civility</label>
                    <select name="civility" class ="form control" required>
                        <option value="1" selected>M.</option>
                        <option value="2">Mme</option>
                    </select>
                </div>
            <div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class ="btn btn-primary">Envoyer</button>
                </div>
            </div>

    </form>
</div>


</body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['success']);
unset($_SESSION['inputs']);



