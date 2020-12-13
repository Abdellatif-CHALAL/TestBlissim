<?php

require "reponse.php";
require "question.php";
require "Commentaire.php";

$commentaire = new Commentaire($_POST['reponse1'], $_POST['commentaire']);

header("Location: index.php");
