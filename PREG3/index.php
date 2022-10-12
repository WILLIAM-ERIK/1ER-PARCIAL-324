<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="styleslogin.css">
</head>
<?php
	
	$alert = '';
	if(!empty($_POST['usuario']) && !empty($_POST['password']))
	
	{
		require_once "conexion.inc.php";
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$query = mysqli_query($con, "SELECT * FROM acceso WHERE usuario = '$usuario' and password = '$password'");
		$user = mysqli_num_rows($query);
		
		if($user > 0)
		{
			$data = mysqli_fetch_array($query);
			session_start();
			$_SESSION['active'] = true;
			$_SESSION['idusuario'] = $data['usuario'];
			$_SESSION['ciusuario'] = $data['ci'];
			
			header('location: index2.php');
		}
	}	
	
?>

<body>
    <div class="login-clean">
        <form method="post" action="" name="login-form">
            <div class="illustration"><i class="icon"><img src="./imagenes/01LOGOFCPN.JPG" alt=""></i></div>
            <div class="form-group"><input class="form-control" type="user" name="usuario" placeholder="Usuario"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-danger btn-block" type="submit">Ingresar</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>