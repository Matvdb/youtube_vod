<?php
require_once "../GestIn_Web/db/connexion.php";
require_once '../GestIn_Web/db/parametre.php';
$db = connect($config);
if ($db == null){
    echo "Revenez dans quelques instants";
} else {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GestIn</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
    </head>
    <body class="sb-nav-fixed">
            <form method="post" action="./controller/inscription.php" >
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
            <input type="text" name="prenom" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
            <input type="number" name="age" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tel</label>
            <div class="col-sm-10">
            <input type="number" name="tel" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" name="btInscrire" class="btn btn-primary">Sign in</button>
            </div>
        </div>
        </form>
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