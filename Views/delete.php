<?php 
include($_SERVER['DOCUMENT_ROOT'].'/examen_atelier/Controllers/ArticleController.php');
if ($_GET['id']) {
    ArticleController::delete($_GET['id']);
    header('location: index.php?save=1');exit;
}