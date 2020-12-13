<?php
session_start();
require "Commentaire.php";

$_SESSION[] = $commentaire = new Commentaire($_POST['commentaire']);

header("Location: index.php");
