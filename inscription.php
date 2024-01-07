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
<link rel="icon" href="assets/img/favicon.ico" />
<link rel="icon" type="image/png" href="assets/img/favicon.png" />
<title>Youtube Template</title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body style="background-color: #0d0d0d;" >
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="text-center">
                    <img class="text-center" src="https://logos-marques.com/wp-content/uploads/2021/03/YouTube-logo.png" style="width: 30%;" >
                    </div>
                    
                    <form action="./controller/inscriptrionController.php" method="post" class="form-example">
                        <div class="container-fluid text-center px-4">
                            <div class="form-example">
                                <label for="email">Email :</label>
                                <input type="email" name="email" id="email" required />
                            </div>
                            <div class="form-example">
                                <label for="password">Mot de passe :</label>
                                <input type="password" name="password" id="password" required />
                            </div>
                            <div class="form-example">
                                <label for="pseudo">Pseudo :</label>
                                <input type="text" name="pseudo" id="pseudo" required />
                            </div>
                            <div class="form-example">
                                <label for="dateCreation">Date de création :</label>
                                <input name="dateCreation" id="dateCreation" value="<?php date_default_timezone_set('Europe/Paris'); $date = date('d-m-y'); echo $date; ?>" disabled />
                            </div>
                            <div class="form-example">
                                <input type="submit" name="btnInscrire" value="S'inscrire" />
                            </div>
                        </div>
                    </form>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Gest<sup>In</sup> 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
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