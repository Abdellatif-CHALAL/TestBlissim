<?php
include './Controller/Commentaire.php';
session_start();
?>
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
            <h1 id="t1" class='mb-5 mt-5'>Liste des produits</h1>
            <?php
                include "./Controller/curlAPI.php";
            ?>
            <div class='row mb-5'>
                <?php
                include "./View/listProduits.php";
                ?>
            </div>
        </div>
    </div>
</body>

</html>