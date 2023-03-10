<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/bootstrap/template/css/styles.css" rel="stylesheet" />
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/bootstrap/template/css/styles2.css" rel="stylesheet" />
    
    
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Gestion Scolaire</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Accueil
                        </a>
                        
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Etudiant
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="index.php">Liste des Etudiants</a>
                                        <a class="nav-link" href="create.php">Insciption</a>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Classes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="layout-static.html">Tous les classes</a>
                                        <a class="nav-link" href="layout-sidenav-light.html">Ajouter une classe</a>
                                    </nav>
                                </div>
                                
                            </nav>
                        </div>

                    

                    </div>
                </div>
            </nav>
        </div>
        <!-- Contenu de la page -->
        <div id="layoutSidenav_content">
                <main>
                    <?= $content ?>
                </main>
                <footer class="py-1 bg-light mt-auto">
                    <div class="container-fluid px-1">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">D??velopper par Aboubacar Bagayoko</div>
                        </div>
                    </div>
                </footer>
            </div>
    </div> 




<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/bootstrap/template/assets/demo/chart-area-demo.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/bootstrap/template/assets/demo/chart-bar-demo.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/bootstrap/template/js/scripts.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/bootstrap/template/js/datatables-simple-demo.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/examen_atelier/bootstrap/template/js/all.js" crossorigin="anonymous"></script>
</body>

</html>