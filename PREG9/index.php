<?php
include "Conexion.php";
$pdo = new Conexion();

	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET['ci']))
		{
			$sql = $pdo->prepare("SELECT * FROM persona WHERE ci=:ci");
			$sql->bindValue(':ci', $_GET['ci']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 existen datos");
			echo json_encode($sql->fetchAll());
			exit;				
			
			} else {
			
			$sql = $pdo->prepare("SELECT * FROM persona");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 existen datos");
			echo json_encode($sql->fetchAll());
			exit;		
		}
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$sql =  $pdo->prepare("INSERT INTO persona (ci, nombre_completo, fecha_nacimiento, departamento) 
								VALUES(:ci, :nombre_completo, :fecha_nacimiento, :departamento)");
		$sql->bindValue(':ci', $_POST['ci']);
		$sql->bindValue(':nombre_completo', $_POST['nombre_completo']);
		$sql->bindValue(':fecha_nacimiento', $_POST['fecha_nacimiento']);
		$sql->bindValue(':departamento', $_POST['departamento']);
		$sql->execute();
		$idPost = $pdo->lastInsertId(); 
		if($idPost)
		{
			header("HTTP/1.1 200 Ok");
			echo json_encode($idPost);
			exit;
		}
	}
	

	if($_SERVER['REQUEST_METHOD'] == 'PUT')
	{		
		$sql = $pdo->prepare("UPDATE persona set ci=:ci, nombre_completo=:nombre_completo, 
		fecha_nacimiento=:fecha_nacimiento, departamento=:departamento WHERE ci=:id");
		$sql->bindValue(':ci', $_GET['ci']);
		$sql->bindValue(':nombre_completo', $_GET['nombre_completo']);
		$sql->bindValue(':fecha_nacimiento', $_GET['fecha_nacimiento']);
		$sql->bindValue(':departamento', $_GET['departamento']);
		$sql->bindValue(':id', $_GET['id']);
		$sql->execute();
		header("HTTP/1.1 200 Ok");
		exit;
	}
	

	if($_SERVER['REQUEST_METHOD'] == 'DELETE')
	{
		$sql = $pdo->prepare("DELETE FROM persona WHERE ci=:ci");
		$sql->bindValue(':ci', $_GET['ci']);
		$sql->execute();
		header("HTTP/1.1 200 Ok");
		exit;
	}

	header("HTTP/1.1 400 Bad Request");
?>