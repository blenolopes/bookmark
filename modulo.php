<?php
$pagina = $_GET['modulo'];

switch($pagina) {
	case 'home':
		include("includes/home.php");
		break;
	case 'cadastro':
		include("includes/cadastro.php");
		break;
	case 'login':
		include("includes/login.php");
		break;
	case 'sobre':
		include("includes/sobre.php");
		break;
	case 'sucesso':
		include("includes/cadastro_sucesso.php");
		break;
	case 'admin':
		include("includes/admin.php");
		break;
	case 'adminsenhas':
		include("includes/admin_senhas.php");
		break;
	case 'adminsenhasok':
		include("includes/admin_senhas_ok.php");
		break;
	case 'admin_add':
		include("includes/admin_add.php");
		break;
	case 'erroMAIL':
		include("includes/erro001.php");
		break;
	case 'erroLOGIN':
		include("includes/erro002.php");
		break;
	case 'sessionERROR':
		include("includes/admin_no_session.php");
		break;
	default:
		include("includes/erro404.php");
}
?>
