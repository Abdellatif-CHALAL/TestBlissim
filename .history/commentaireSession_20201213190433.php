<?php
session_start();
require "Commentaire.php";

var_dump($_POST['commentaire']);
die();
$_SESSION[$_POST['id']] = $commentaire = new Commentaire($_POST['commentaire']);

// header("Location: index.php");
