<?php

require "reponse.php";
require "question.php";
require "Commentaire.php";

$qcm = new Qcm();

$question1 = new Question($_POST['question']);
$question1->ajouterReponse(new Reponse($_POST['reponse1'], $_POST['bonneReponse1']));
$question1->ajouterReponse(new Reponse($_POST['reponse2'], $_POST['bonneReponse2']));
$question1->setExplications($_POST['explications']);

$qcm->ajouterQuestion($question1);

header("Location: index.php");
