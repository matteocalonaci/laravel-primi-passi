<?php

//dati di configurazione

$DB_SERVERNAME = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME ="db_hotel";

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
    <h1 class="text-center p-1" style="color:red">WELCOME LARAVEL WORLD</h1>
    <hr style="color: white;">

    <p>
        <?php
        // check connection
        if ($conn && $conn->connect_error) {
            echo "Connessione fallita" . $conn->connect_error;
        } else {
            echo "<span>". "Connessione eseguita con successo come ci fa presente Joost" . "</span>";
        }
        ?>
    </p>
    </div>
    
<div class="img-container">
<img src="/img/JoostKlein_OK.png" alt="">
</div>
</body>

</html>