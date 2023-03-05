<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/examen_atelier/Controllers/EtudiantController.php');
$title = "Inscription";
if ($_POST) {
    $etudiant = new etudiant();
    
    $etudiant->nom = $_POST['nom'];
    $etudiant->prenom = $_POST['prenom'];
    $etudiant->adresse = $_POST['adresse'];
    $etudiant->date_naissance = $_POST['date_naissance'];
    $etudiant->email = $_POST['email'];
    $etudiant->telephone = $_POST['telephone'];
    EtudiantController::create($etudiant);
     
    header('location: index.php?save=1');exit;
}



ob_start(); 
?><br>
<h3>Nouvelle Inscription</h3>
<div class="wrapper col-md-8" style=" margin-left: auto; margin-right: auto; width: 500px;">
    <div class="inner">
       
        <form method="POST">
            
            <div class="form-holder mt-5">
                <input type="text" class="form-control" name="nom" placeholder="Nom">
            </div>
            <div class="form-holder mt-2">
                <input type="text" class="form-control" name="prenom" placeholder="Prénom">
            </div>
            <div class="form-holder  mt-2">
                <input type="text" class="form-control" name="adresse" placeholder="Adresse">
            </div>
            <div class="form-holder  mt-2">
                <label for="">Date Naissance</label>
                <input type="date" class="form-control" name="date_naissance" placeholder="Date Naissance">
            </div>
            <div class="form-holder  mt-2 mb-2">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-holder  mt-2 mb-2">
                <input type="number" class="form-control" name="telephone" placeholder="Télephone">
            </div>
           <button type="submit" class="btn btn-success">Valider</button>
        </form>
       
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>


