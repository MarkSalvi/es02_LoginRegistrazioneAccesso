<?php
$datiUtente = [
    "nome" => $_POST['input_nome'],
    "cognome" => $_POST['input_cognome'],
    "dataNascita" => $_POST['input_dataNascita'],
    "ruolo" => $_POST['select_ruolo'],
    "password" => $_POST['input_password'],
    "conferma_password" => $_POST['input_confermaPassword'],
    "mail" => $_POST['input_mail']
];

registraUtente($conn,$datiUtente);



?>

<html>

</html>
