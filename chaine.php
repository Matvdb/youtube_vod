<?php
require_once "db/connexion.php";
require_once 'db/parametre.php';
require_once "db/secure.php";
$db = connect($config);
if ($db == null){
    echo "Revenez dans quelques instants";
} else {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="https://icones.pro/wp-content/uploads/2021/02/youtube-logo-icone.png" />
<link rel="icon" type="image/png" href="https://icones.pro/wp-content/uploads/2021/02/youtube-logo-icone.png" />
<title>Youtube Template</title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="background-color: #0d0d0d;" >
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php"><i class="bi bi-youtube" style="color: red;" ></i>  <img class="text-center" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Logo_of_YouTube_%282015-2017%29.svg/1024px-Logo_of_YouTube_%282015-2017%29.svg.png" style="width: 40%;" ></a>
            <!-- Navbar Search-->
            <div class="input-group container text-center" style="width: 20%;" >
                <input type="text" class="form-control" placeholder="Recherchez" aria-label="Recherchez" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
            </div>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./pages/profil.php">Profil</a></li>
                            <li><a class="dropdown-item" href="./pages/creerProfil.php">Créer un compte</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="./db/deconnexion.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>Accueil
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="bi bi-film"></i></div>Shorts
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-video3"></i></i></div>Abonnements
                            </a>
                            <div class="sb-nav-link-icon text-center">_________________________</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"></div><strong>Vous</strong>
                            </a>
                            <a class="nav-link" style="background-color: #636363;" href="index.html">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-circle"></i></div>Votre chaîne
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="bi bi-clock-history"></i></div>Historique
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="bi bi-play-btn"></i></div>Vos vidéos
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="bi bi-clock"></i></div>À regarder plus tard
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-angle-down"></i></div>
                                Plus
                            </a>
                            <!-- Afficher sous forme de liste les inventaires pour l'user connecté -->
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./pages/tickets/attentePEC.php">Vidéos "J'aime"</a>
                                    <a class="nav-link" href="./pages/tickets/attentePEC.php">Edit</a>
                                    <a class="nav-link" href="./pages/tickets/attentePEC.php">Best-Of <?php echo $pseudo; ?></a>
                                </nav>
                            </div>
                            <div class="sb-nav-link-icon text-center">_________________________</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"></div><strong>Abonnements</strong>
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>Votre châine
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <div class="text-center" >
                    <i class="bi bi-person-circle"></i>
                    <div id="inner-header-container" class="style-scope ytd-c4-tabbed-header-renderer"><?php echo $pseudo;?></div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
<?php
}
?>