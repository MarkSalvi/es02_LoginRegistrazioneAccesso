<?php
function connesione($credenzialiDatabase){
    $conn = mysqli_connect($credenzialiDatabase['ip'],$credenzialiDatabase['root'],$credenzialiDatabase['pass'],$credenzialiDatabase['db']);
    if (mysqli_connect_errno()) {
        throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
    }

    return $conn;
}

function registrautente($credenzialiDatabase,array $datiUtente){

    $conn = connesione($credenzialiDatabase);
    $sql= ("select mail from credenziali");
    $ris = mysqli_query($conn,$sql);
    while($dato=mysqli_fetch_array($ris)){
        IF ($dato==$datiUtente['mail']){
            $messaggio = "Esiste gia una mail uguale, per favore cambiala";
            $risultato = false;
            $campierrati = "mail";
        }
    }


    //return
    //con risultato, messaggio e campi errati
}
