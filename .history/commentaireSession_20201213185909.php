<?php
session_start();
require "Commentaire.php";

echo $_POST['id'];
die();
$_SESSION[$_POST['id']] = $commentaire = new Commentaire($_POST['commentaire']);

// header("Location: index.php");
