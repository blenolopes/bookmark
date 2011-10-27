<script language="javascript">
function valida_formulario() {
	if(document.form_cadastro.cad_nome.value == "") {
		alert("Ops, informe seu nome completo!");
		document.form_cadastro.cad_nome.focus();
		return false;
	}
	
	if(document.form_cadastro.cad_email.value == "") {
		alert("Ops, informe seu e-mail!");
		document.form_cadastro.cad_email.focus();
		return false;
	}
	
	if((document.form_cadastro.cad_senha.value == "") || (document.form_cadastro.cad_rsenha.value == "")) {
		alert("Ops, informe sua senha!");
		document.form_cadastro.cad_senha.focus();
		return false;
	}
	
	if(document.form_cadastro.cad_senha.value != document.form_cadastro.cad_rsenha.value) {
		alert("Ops, senha não confere!");
		document.form_cadastro.cad_rsenha.focus();
		return false;
	}
	
	return true;
}
</script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<table width="60%"  border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td><div align="center">
      <table width="100%"  border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td align="left" class=meio_titulo>::: Cadastro</td>
        </tr>
        <tr>
          <td align="left" class=meio_base><p>Entre com as informa&ccedil;&atilde;o abaixo e realize seu cadastro!</p>
            <form action="includes/processa_cadastro.php" method="post" name="form_cadastro" id="form_cadastro" onSubmit="return valida_formulario();">
              <table width="100%"  border="0" cellspacing="2" cellpadding="4" class=formulario_cadastro>
                <tr align="left" valign="top">
                  <td width="35%">Nome</td>
                  <td width="65%"><input class=formulario_cadastro name="cad_nome" type="text" id="cad_nome" size="35" maxlength="50"></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="35%" >E-Mail</td>
                  <td width="65%"><input class=formulario_cadastro name="cad_email" type="text" id="cad_email" size="35" maxlength="50"> 
                    <span class="style1">*</span> </td>
                </tr>
                <tr align="left" valign="top">
                  <td width="35%">Senha</td>
                  <td width="65%"><input class=formulario_cadastro name="cad_senha" type="password" id="cad_senha" size="35" maxlength="50"></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="35%">Confirme sua senha </td>
                  <td width="65%"><input class=formulario_cadastro name="cad_rsenha" type="password" id="cad_rsenha" size="35" maxlength="50"></td>
                </tr>
                <tr align="left" valign="top">
                  <td width="35%">&nbsp;</td>
                  <td width="65%"><input class=formulario_cadastro name="cad_enviar" type="submit" id="cad_enviar" value="Enviar &gt;&gt;">
                    <input class=formulario_cadastro type="reset" name="Reset" value="Limpar"></td>
                </tr>
              </table>
            </form>            
            <p class="style1">* Aten&ccedil;&atilde;o: seu e-mail ser&aacute; o seu login no sistema!</p></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
