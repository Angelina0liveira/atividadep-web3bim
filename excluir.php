<?php
	include "conexao.php";
	$nome = $_POST['nome'];
	$sql = "DELETE FROM usuario WHERE NOME = '$nome'";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>