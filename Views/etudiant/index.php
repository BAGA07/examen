<?php
require($_SERVER['DOCUMENT_ROOT'] . '/examen_atelier/Controllers/EtudiantController.php');

 $etudiants = EtudiantController::index();

$title = "liste des etudiants";
ob_start(); ?>
 
    <div class="container-fluid px-4">
        <h1 class="mt-4">Accueil</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Liste des etudiants</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des etudiants
            </div>
            <div class="datatable-container">
                <table id="datatablesSimple" class="datatable-table"> 
                    <thead>
                        <tr>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Date Naissance</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Action</th>
                        </tr>
                    </thead> 
                    </tbody>
                    <?php foreach ($etudiants as $etudiant): ?>                                     
                        <tr>
                            <td><?= $etudiant->prenom ?></td>
                            <td><?= $etudiant->nom ?></td>
                            <td><?= $etudiant->adresse ?></td>
                            <td><?= $etudiant->date_naissance ?></td>
                            <td><?= $etudiant->email ?></td>
                            <td><?= $etudiant->telephone ?></td>
                            <td>
                           
                                <a href="read.php?id=<?= $etudiant ->id?>"><img src="../images/regardez.png" alt="" width="25"></a>
                                <a href="update.php?id=<?= $etudiant ->id?>"><img src="../images/pen.png" alt="" width="25"></a>
                                <a href="delete.php?id=<?= $etudiant ->id?>" onclick="return confirm('Vouler vous supprimer <?= $etudiant->prenom.' '.$etudiant->nom?> ?')"><img src="../images/corbeille.png" alt="" width="25"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>