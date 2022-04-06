<?php
    $timestamp = time();
?>

<html lang="it">
<head>
    <title>Registrazione utente</title>
    <link href="fontawesome/all.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
<div class="container">

    <?php
    include 'navBar.php';
    ?>

    <div class="row my-3">
        <div class="col">
            <h1>Registrazione utente</h1>
        </div>
    </div>


    <!-- form registrazione -->
    <form action="verificaRegistrazioneUtente.php" method="post">
        <div class="row my-3 justify-content-center">
            <div class="col-4">
                <div class="col">
                    <label for="input_nome">Nome:</label>
                    <input type="text" name="input_nome" class="form-control">
                </div>

                <div class="w-100 my-3"></div>

                <div class="col my-3">
                    <label for="input_cognome">Cognome:</label>
                    <input type="text" name="input_cognome" class="form-control">
                </div>
                <div class="w-100 my-3"></div>
                <div class="col">
                    <label for="input_dataNascita">Data di nascita:</label>
                    <input type="date" name="input_dataNascita" class="form-control">
                </div>
            </div>
            <div class="col-1"></div>

            <div class="col-4">
                <div class="col">
                    <label for="select_ruolo">Ruolo:</label>
                    <select name="select_ruolo" class="form-control form-select">
                        <option selected disabled value="">Seleziona...</option>
                        <option value="viewer">Visualizzatore</option>
                        <option value="editor">Editore</option>
                        <option value="admin">Amministratore</option>
                    </select>
                </div>
                <div class="w-100 my-3"></div>
                <div class="col">
                    <label for="input_password">Password:</label>
                    <input type="password" name="input_password" class="form-control">
                </div>
                <div class="w-100 my-3"></div>
                <div class="col">
                    <label for="input_confermaPassword">Conferma password:</label>
                    <input type="password" name="input_confermaPassword" class="form-control">
                </div>
                <div class="w-100 my-3"></div>
                <div class="col">
                    <label for="input_mail">mail:</label>
                    <input type="mail" name="input_mail" class="form-control">
                </div>
            </div>

        </div>


        <div class="row my-5 justify-content-center">
            <div class="col-3">
                <button type="reset" class="btn btn-outline-secondary form-control">Sbianca campi</button>
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-primary form-control">Registra utente</button>
            </div>
        </div>
    </form>


</div>

</div>
</body>
</html>
