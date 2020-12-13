<?php
session_start();
require "Commentaire.php";

$_SESSION[$_POST['idProduit']] = new Commentaire($_POST['commentaire']);

header("Location: ../index.php");
