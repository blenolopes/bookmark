<?php
include("secure.php");

$l = $_POST['login_nome'];
$p = $_POST['login_passwd'];

$banco = 'bookmark';
$sql_p = "SELECT COUNT(*) FROM tb_usuarios WHERE email = '" . $l . "' AND senha = '" . sha1($p) . "'";

$conexao = mysql_connect($host_db, $user_db, $pass_db);
if(!$conexao) {
	echo "ERRO: Não foi possível conectar: " . mysql_error();
	exit();
}

$db = mysql_select_db($banco, $conexao);
if(!$db) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
}

$query = mysql_query($sql_p, $conexao);
if(!$query) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
}

$resultado = mysql_result($query, 0, 0);
if($resultado > 0) {
	session_start();
	$_SESSION['usuario'] = $l;
	header("Location: ../inicio.php?modulo=admin");
} else {
	header("Location: ../inicio.php?modulo=erroLOGIN");
}

mysql_close($conexao);
?>