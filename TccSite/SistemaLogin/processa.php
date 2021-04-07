<?php
	session_start();
	include_once("conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$data = filter_input(INPUT_POST, 'DataDeNascimento', FILTER_SANITIZE_STRING);
	$turma = filter_input(INPUT_POST, 'turma', FILTER_SANITIZE_STRING);
	$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

			//IMPRIMIR NA TELA 
	//echo "Nome: $nome <br>";
	//echo "E-mail: $email <br>";

	$result_usuario = "INSERT INTO usuarios (nome, sexo, cpf, DataDeNascimento, turma, curso, email, senha, created) VALUES ('$nome', '$sexo', '$cpf', '$data', '$turma', '$curso', '$email', md5('$senha') , NOW())";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<p style ='background-color: green; color: white; text-align: center;'> Usuário cadastrado com sucesso </p>";
		header("Location: cadastro.php");
	}else{
		$_SESSION['msg'] = "<p style ='background-color: red; color: white; text-align: center;'> Usuário não foi cadastrado com sucesso </p>";
		header("Location: cadastro.php");
	}

?>

<!--php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
