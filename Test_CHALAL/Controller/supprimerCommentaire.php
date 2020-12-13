<?php
session_start();
require "Commentaire.php";

$_SESSION[$_POST['idProduit']] = null;

header("Location: ../index.php");
