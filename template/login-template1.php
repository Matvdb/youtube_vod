<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GestIn - Bienvenue</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
<div class="sidenav">
	<div class="text-white m-5">
		<h1>
			<br/>
		</h1>
		<p><br/></p>
	</div>
</div>
<div class="main">
	<div
		class="d-flex flex-column justify-content-center align-items-center">
		<div class="col-md-6 col-sm-12">
			<div class="login-form">
				<form name="login" action="" method="post" class="m-3">
					<div class="form-group">
						<label>Email</label> <input type="text"
							class="form-control mt-1 mb-3" placeholder="email"
							name="email">
					</div>
					<div class="form-group  mb-3">
						<label>Mot de passe</label> <input type="password"
							class="form-control mt-1" placeholder="mot de passe" name="password">
					</div>
					<input type="submit" class="btn text-white bg-dark  w-25 login"
						value="Login" name="login-btn">
                  <?php if(!empty($loginResult)){?>
                <div class="text-danger"><?php echo $loginResult;?></div>
                <?php }?>
            </form>
			</div>
			<div class="container text-right">
				<a href="/GestIn_Web/pages/creerProfil.php" >Tu ne possèdes pas de compte ?</a>
			</div>
		</div>
	</div>
</div>
</html>