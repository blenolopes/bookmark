<?php
include("admin_session.php");
include("secure.php");

$banco = 'bookmark';
$info_link = $_POST['link'];

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

$sql_r = "DELETE FROM tb_links WHERE link = '" . $info_link . "'";
$sql_remove = mysql_query($sql_r, $conexao);

if(!$sql_remove) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
} else {
	mysql_free_result($sql_remove);
	header("Location: ../inicio.php?modulo=admin_add");
	exit();
}
?>