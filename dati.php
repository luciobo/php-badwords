<?php

$parolaDaCensurare = $_POST["parolaDaCensurare"];
$messaggio = $_POST["messaggio"];


// var_dump($parolaDaCensurare);
// var_dump($messaggio);

// echo "Parola da censurare:" . $parolaDaCensurare . "<br>";
// echo "Messaggio ricevuto:" . $messaggio . "<br>";

// echo str_replace($parolaDaCensurare, "***", "$messaggio");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>vue-email-list</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="text-center pt-5">
        <div>
            <h2 class="text-success">Parola Da Censurare</h2>
            <h4 class="text-danger"><?php echo $parolaDaCensurare ?></h4>
            <span>dettagli tecnici: <span><?php var_dump($parolaDaCensurare) ?></span></span>
        </div>
        <div class="pt-5">
            <h2 class="text-success">Messaggio Scritto</h2>
            <h4 class="text-danger"><?php echo str_replace($parolaDaCensurare, "****", "$messaggio") ?></h4>
            <span>dettagli tecnici: <span><?php var_dump($messaggio) ?></span></span>
        </div>
    </div>

</body>

</html>