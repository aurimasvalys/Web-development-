<?php
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']); //trim funkcija pasalina tarpus, kurie netycia gali nusikopijuoti, todel trim funkcija pasalina juos
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($message)){ //cia parasome sia eilute su !emptyy (kas reiskia "not empty"), kad spausdintu duomenis tik tuo atveju, jei visi formos laukeliai buvo uzpildyti
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // cia mes susikuriame if salyga su FILTER_VALIDATE_EMAIL konstanta, ko pasekoje pradzioje patikrina, ar tai, kas ivesta yra emailas, ir tik po to spausdins informacija
                $from = "$email";
                $to = "aurimassive@gmail.com";
                $subject = "New message";
                $author = 'From: '. $name . ', ' . $email;
                $message = htmlspecialchars($message); //htmlspecialchars funkcija pavercia viska, ka vartotojas iraso i message laukeli paprastu tekstu, kad nebutu galima irasyti kokio nors MALICIOUS CODE
                //mail($to, $subject, $author, $message, $from);
                //echo "<script>alert('Thank you. Your message was received and we will get back to you shortly.');</script>";
            }
        }
        include('db.php');
    }
    

//kadangi cia php tipo kodas, php kodo uzdarymo zymes cia rasyti NEBUTINA!!!!!