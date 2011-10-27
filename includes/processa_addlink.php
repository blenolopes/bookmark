<?php
include("admin_session.php");
include("secure.php");

$link = $_POST['addlink'];
$user = $_SESSION['usuario'];

$banco = 'bookmark';
$sql_id = "SELECT id FROM tb_usuarios WHERE email = '" . $user . "'";

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

$q_id = mysql_query($sql_id, $conexao);
if(!$q_id) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
}

$resultado = mysql_fetch_array($q_id, MYSQL_BOTH);
$id_dono = $resultado["id"];
mysql_free_result($q_id);

$sql_inserir = "INSERT INTO tb_links (id_dono, link) VALUES ('" . $id_dono . "', '" . $link . "')";

$q_inserir = mysql_query($sql_inserir, $conexao);
if(!$q_inserir) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
} else {
	header("Location: ../inicio.php?modulo=admin_add");
	exit();
}

mysql_close($conexao);
?>