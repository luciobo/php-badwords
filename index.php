<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-badwords</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>


    <div class="text-center py-3">
        <h1>Il mio primo form in php</h1>
    </div>
    <div class="row justify-content-center py-3">
        <div class="col-6">
            <form action="dati.php" method="GET">
                <div class="mb-3">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nomeUtente">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Messaggio</label>
                    <textarea class="form-control" name="messaggio"></textarea>
                </div>
                <button class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>

    <!-- javascript -->
    <script src="js/main.js"></script>
</body>

</html>