<?php
    require __DIR__ . '/../app/src/app.php'; // cia pateikiame nuoroda (konstanta) i app.php faila. DIR yra sutrumpinimas, kad nereiketu rasyti pilno kelio
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projektas10</title>
        <script src="https://kit.fontawesome.com/002248db05.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="../app/css/normalize.css">
        <link rel="stylesheet" href="../app/css/style.css">
    </head>

    <body>
        <?php

            include('../app/views/header.php'); // cia pateikiame nuoroda i header turini pasinaudodami "include" funkcija (kitos - include once, require, require once)
            include('../app/views/content.php'); // cia pateikiame nuoroda i content turini pasinaudodami "include" funkcija (kitos - include once, require, require once)
            include('../app/views/footer.php'); //cia pateikiame nuoroda i footer turini pasinaudodami "include" funkcija (kitos - include once, require, require once)
            

        ?>


