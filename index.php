<?php
require_once "db/connexion.php";
require_once 'db/parametre.php';
require_once "db/secure.php";

use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/db/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}

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
                    
                    <?php
                    if (! empty($_GET["i"])) {
                        $template = intval($_GET["i"]);
                    }

                    if(empty($template)) {
                        $template = 1;
                    }

                    require_once __DIR__ . '/template/login-template' . $template . '.php';

                    ?>
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