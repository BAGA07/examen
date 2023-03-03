<?php
include($_SERVER['DOCUMENT_ROOT'].'/examen_atelier/Controllers/ArticleController.php');
$articles = ArticleController::index();
$_GET['save'] = false;
/* var_dump($article);die; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script href="../bootstrap/js/bootstrap.js"></script>
    <title>Article</title>
    <style>
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
            <a class="navbar-brand color-light" href="#">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>

    </nav>
    <div>
        <a href="form.php"><button class="btn btn-success"  style="text-align: center;">Ajouter un article</button></a>
    </div>
    
    <?php if ($_GET['save']): ?>
        <div class="row">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Super !!! Article Ajouter avec success
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>    
    <?php endif ?>

    <div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-stiped mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col-3">#</th>
                            <th scope="col-3">Titre</th>
                            <th scope="col-3">Description</th>
                            <th scope="col-3">Prix</th>
                            <th scope="col-3" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($articles as $article):?> 
                        <tr>
                            <td scope="row"><?= $article->id ?></td>
                            <td><?= $article->titre ?></td>
                            <td><?= $article->description ?></td>
                            <td><?= $article->price ?></td>
                            <td>
                           
                                <a href="show.php?id=<?= $article->id?>"><img src="../images/regardez.png" alt="" width="25"></a>
                                <a href="update.php?id=<?= $article->id?>"><img src="../images/pen.png" alt="" width="25"></a>
                                <a href="delete.php?id=<?= $article->id?>" onclick="return confirm('Vouler vous supprimer <?= $article->description?> ?')"><img src="../images/corbeille.png" alt="" width="25"></a>
                            </td>
                        </tr>   
                        
                    <?php endforeach; ?>    
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    
</body>
</html>