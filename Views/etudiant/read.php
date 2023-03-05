<?php
require($_SERVER['DOCUMENT_ROOT'] . '/examen_atelier/Controllers/EtudiantController.php');

 $etudiants = EtudiantController::index();

$title = "liste des etudiants";
ob_start(); ?>
 
   <h1>salut</h1>


<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>