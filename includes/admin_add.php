<?php
include("admin_session.php");
?>

<script language="javascript">
function valida_formulario() {
	if(document.form_add.addlink.value == "") {
		alert("Ops, informe o link!");
		document.form_add.addlink.focus();
		return false;
	}
	
	if(document.form_add.addlink.value == "http://") {
		alert("Ops, você esqueceu sua url!");
		document.form_add.addlink.focus();
		return false;
	}
	
	return true;
}
</script>

<?php
include("secure.php");

$banco = 'bookmark';
$user  = $_SESSION['usuario'];

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

$sql_p = "SELECT link FROM tb_links WHERE id_dono = '" . $id_dono . "'";
$q_p = mysql_query($sql_p, $conexao);
if(!$q_p) {
	echo "ERRO: Não foi possivel conectar: " . mysql_error();
	exit();
}
?>


<table width="61%"  border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td><div align="center">
      <table width="100%"  border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td align="left" class=meio_titulo>::: Adicionar, excluir e visualizar seus links.... </td>
        </tr>
        <tr>
          <td align="left" valign="top" class=meio_base><table width="100%"  border="0" cellspacing="0" cellpadding="4">
              <tr>
                <td bgcolor="#B3EE5D">::: Seus links <strong><?php echo $_SESSION['usuario'] ?></strong></td>
              </tr>
              <tr>
                <td>
                  <table width="100%"  border="0" align="center" cellpadding="4" cellspacing="0">
                    <?php
				  while($r = mysql_fetch_array($q_p, MYSQL_BOTH)) {
				  ?>
				  	<form action="includes/admin_add_remove_item.php" method="post" name="form_remove" id="form_remove">
                    <tr align="left">
                      <td width="80%" valign="baseline"><input name="link" type="text" readonly="true" class=formulario_cadastro id="link" value="<?php echo $r["link"]; ?>" size="50" maxlength="100"></td>
                      <td class=formulario_cadastro width="20%" align="right" valign="baseline"><input class=formulario_cadastro type="submit" name="Submit" value="Excluir"></td>
                    </tr>
					</form>
                    <?php
				  }
				  mysql_free_result($q_p);
				  mysql_close($conexao);
				  ?>
                  </table>
                </td>
              </tr>
            </table>
                        <p>&nbsp;</p>
                        <table width="100%"  border="0" cellspacing="0" cellpadding="4">
              <tr>
                <td bgcolor="#B3EE5D">::: Adicionar link <strong></strong></td>
              </tr>
              <tr>
                <td><form action="includes/processa_addlink.php" method="post" name="form_add" id="form_add" onSubmit="return valida_formulario();">
                  <table width="100%"  border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr align="left">
                      <td width="80%" valign="baseline"><input name="addlink" type="text" class=formulario_cadastro id="addlink" value="http://" size="50" maxlength="100"></td>
                      <td class=formulario_cadastro width="20%" align="right" valign="baseline"><input class=formulario_cadastro type="submit" name="Submit" value="Adicionar"></td>
                    </tr>
                  </table>
                </form></td>
              </tr>
            </table>            
                        <p align="right">[ <a href="includes/admin_logout.php">logout</a> ] </p></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
