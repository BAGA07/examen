<?php
include($_SERVER['DOCUMENT_ROOT'].'/examen_atelier/Controllers/ArticleController.php');

if ($_POST) {
    $article = new Article();
    
    $article->titre = $_POST['titre'];
    $article->description = $_POST['description'];
    $article->price = $_POST['price'];
    ArticleController::create($article);
       
    header('location: index.php?save=1');exit;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script href="../bootstrap/js/bootstrap.js"></script>
    <style>
        body{
            background-color: yellowgreen;
        }
        .input-group{
            margin-bottom: 10px;
        }
        .input-group-text{
            color: #ffffff;
            background-color: black;
            width: 150px;
        }
        .form-contol{
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar-light bg-dark">
        <a class="navbar-brand color-light" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
    </nav>
    <h2>Formulaire d'ajout</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="#" method="POST">
                    <div class="input-group">
                        <span class="input-group-text">Titre</span>
                        <input type="text" name="titre" class="form-contol">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Description</span>
                        <input type="text" name="description" class="form-contol">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Prix</span>
                        <input type="text" name="price" class="form-contol">
                    </div>
                    <div>
                        <button class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
            
        </div>
    
</body>
</html>