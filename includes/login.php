<?php
session_start();

if(isset($_SESSION['usuario'])) {
	header("Location: inicio.php?modulo=admin");
}
?>

<script language="javascript">
function valida_formulario() {
	if(document.form_login.login_nome.value == "") {
		alert("Ops, informe o login!");
		document.form_login.login_nome.focus();
		return false;
	}
	
	if(document.form_login.login_passwd.value == "") {
		alert("Ops, informe sua senha!");
		document.form_login.login_passwd.focus();
		return false;
	}
		
	return true;
}
</script>

<table width="60%"  border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td><div align="center">
      <table width="100%"  border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td align="left" class=meio_titulo>::: Acessar administra&ccedil;&atilde;o</td>
        </tr>
        <tr>
          <td class=meio_base><form name="form_login" method="post" action="includes/processa_login.php" onSubmit="return valida_formulario();">
            <table width="60%"  border="0" align="center" cellpadding="4" cellspacing="2" class=formulario_login>
              <tr>
                <td width="25%" align="left" valign="top">Login</td>
                <td width="75%" align="left" valign="top"><input class=formulario_cadastro name="login_nome" type="text" id="login_nome" size="15" maxlength="50"></td>
              </tr>
              <tr>
                <td width="25%" align="left" valign="top">Senha</td>
                <td width="75%" align="left" valign="top"><input class=formulario_cadastro name="login_passwd" type="password" id="login_passwd" size="15" maxlength="50"></td>
              </tr>
              <tr>
                <td width="25%" align="left" valign="top">&nbsp;</td>
                <td width="75%" align="left" valign="top"><input class=formulario_cadastro type="submit" name="Submit" value="Logar"></td>
              </tr>
            </table>
          </form></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
