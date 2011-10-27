<?php
include("admin_session.php");
?>

<script language="javascript">
function valida_formulario() {
	if(document.form_nsenha.nova_senha.value == "") {
		alert("Ops, informe a senha!");
		document.form_nsenha.nova_senha.focus();
		return false;
	}
	
	if(document.form_nsenha.rnova_senha.value == "") {
		alert("Ops, repita a senha!");
		document.form_nsenha.rnova_senha.focus();
		return false;
	}
	
	if(document.form_nsenha.nova_senha.value != document.form_nsenha.rnova_senha.value) {
		alert("Ops, as senhas não conferem!");
		document.form_nsenha.nova_senha.focus();
		return false;
	}
		
	return true;
}
</script>

<table width="61%"  border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td><div align="center">
      <table width="100%"  border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td align="left" class=meio_titulo>::: Gerenciamento de senhas</td>
        </tr>
        <tr>
          <td align="left" valign="top" class=meio_base><p><strong><?php echo $_SESSION['usuario'] ?></strong>, aqui voc&ecirc; pode modificar sua senha de acesso &agrave; administra&ccedil;&atilde;o do bookmark. </p>
            <form action="includes/processa_nsenha.php" method="post" name="form_nsenha" id="form_nsenha" onSubmit="return valida_formulario();">
              <table class=formulario_nsenha width="80%"  border="0" align="center" cellpadding="4" cellspacing="2">
                <tr align="left" valign="top">
                  <td width="50%" valign="bottom">Nova senha </td>
                  <td width="50%"><input class=formulario_nsenha name="nova_senha" type="password" id="nova_senha" size="20" maxlength="50"></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="50%" valign="bottom">Repita a nova senha </td>
                  <td width="50%"><input class=formulario_nsenha name="rnova_senha" type="password" id="rnova_senha" size="20" maxlength="50"></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="50%">&nbsp;</td>
                  <td width="50%"><input class=formulario_nsenha type="submit" name="Submit" value="Gravar altera&ccedil;&otilde;es!"></td>
                </tr>
              </table>
            </form>
            <p align="center">&nbsp;</p>
            <p align="right">[ <a href="includes/admin_logout.php">logout</a> ] </p></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
