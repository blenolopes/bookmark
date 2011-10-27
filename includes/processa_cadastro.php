<?php
include("secure.php");

$u = $_POST['cad_nome'];
$m = $_POST['cad_email'];
$s = $_POST['cad_senha'];

$banco = 'bookmark';
$sql_p = "SELECT email FROM tb_usuarios";
$sql_i = "INSERT INTO tb_usuarios (usuario, email, senha) VALUES ('" . $u . "', '" . $m . "', '" . sha1($s) . "')";

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
	
$query_p = mysql_query($sql_p, $conexao);
if(!$query_p) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
}

while($linha = mysql_fetch_array($query_p, MYSQL_BOTH)) {
	if($linha["email"] == $m) {
		header("Location: ../inicio.php?modulo=erroMAIL");
		exit();
	}
}
mysql_free_result($query_p);


$query_i = mysql_query($sql_i, $conexao);
if(!$query_i) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
} else {
	header("Location: ../inicio.php?modulo=sucesso");
	exit();
}
mysql_free_result($query_i);

mysql_close($conexao);
?>