<?
include("secure.php");
session_start();

$usuario = $_POST['login_nome'];
$senha   = $_POST['login_senha'];

if (isset($usuario) && isset($senha)) {
	$consulta = 'SELECT usuario, senha FROM usuarios '
				. "WHERE usuario = '$usuario' "
				. "AND senha = '$senha'";
				
	$conexao  = mysql_connect($hostdb, $userdb, $passdb);
	mysql_select_db('bookmark', $conexao);
	$resultado = mysql_query($consulta, $conexao);
}
