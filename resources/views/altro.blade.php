<?php

//dati di configurazione

$DB_SERVERNAME = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "db_hotel6";

//connect
$conn = new mysqli("localhost", "root", "", "db_hotel")

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- <link rel="stylesheet" href=".../public/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<!-- Styles -->
<link href="/css/style.css" rel="stylesheet">

<body style="background-color: rgb(0,8,47);">
    <h1 class="text-center p-1" style="color:red">{{ $titolo }}</h1>
    <hr style="color: white;">
    <h5 class="text-center pt-5" style="color: violet;">1.  Due amanti felici – Pablo Neruda</h5>
    <p class="poesia">
Due amanti felici fanno un solo pane, <br>
una sola goccia di luna nell’erba,<br>
lascian camminando due ombre che s’unisco,<br>
lasciano un solo sole vuoto in un letto.<br>
<br>
Di tutte le verità scelsero il giorno:<br>
non s’uccisero con fili, ma con un aroma<br>
e non spezzarono la pace né le parole.<br>
È la felicità una torre trasparente.<br>
<br>
L’aria, il vino vanno coi due amanti,<br>
gli regala la notte i suoi petali felici,<br>
hanno diritto a tutti i garofani.<br>
<br>
Due amanti felici non hanno fine né morte,<br>
nascono e muoiono più volte vivendo,<br>
hanno l’eternità della natura.<br>
</p>

</body>

</html>