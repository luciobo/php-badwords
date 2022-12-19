<?php

$nome = $_POST["nomeUtente"];
$messaggio = $_POST["messaggio"];


var_dump($nome);
var_dump($messaggio);

echo "Nome ricevuto:" . $nome . "<br>";
echo "Messaggio ricevuto:" . $messaggio . "<br>";

echo str_replace("scoppiare", "  --hai scritto una parolaccia--", "$messaggio");


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
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

<div class="text-center">
    <h2 class="text-success">Nome Utente</h2>
    <h4 class="text-danger"><?php echo $nome?></h4>
    <h2 class="text-success">Messaggio Scritto</h2>
    <h4 class="text-danger"><?php echo str_replace("scoppiare", "  --hai scritto una parolaccia--", "$messaggio") ?></h4>
</div>

    <!-- javascript -->
    <script src="js/main.js"></script>
</body>

</html>