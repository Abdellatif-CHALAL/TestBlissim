<?php


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://fakestoreapi.com/products',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
var_dump($response);

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1 id="t1">Création d'un questionnaire</h1>
        </div>
        <br>
        <form action="postQuestion.php" method="post">
            <div class="col center-block ">
                <input type="text" name="question" class="form-control" placeholder="Description de la question ?">
            </div>
            <br><br>
            <div class="row">
                <div class="col">
                    <input type="text" name="reponse1" class="form-control" placeholder="Ajouter la première reponse">
                </div>
                <div class="col">
                    <input type="number" name="bonneReponse1" class="form-control" placeholder="0 mauvause réponse sinon une reponse réponse">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="reponse2" class="form-control" placeholder="Ajouter la deuxième reponse">
                </div>
                <div class="col">
                    <input type="number" name="bonneReponse2" class="form-control" placeholder="0 mauvause réponse sinon une reponse réponse">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="text" name="explications" class="form-control" placeholder="Explications pour la réponse" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Ajouter question</button>
        </form>
    </div>
</body>
</html>