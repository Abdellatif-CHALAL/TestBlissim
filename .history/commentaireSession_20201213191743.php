<?php
session_start();
require "Commentaire.php";

var_dump($_POST['commentaire']);
// var_dump($_POST['idProduit']);
die();
$_SESSION[$_POST['id']] = $commentaire = new Commentaire($_POST['commentaire']);

// header("Location: index.php");
