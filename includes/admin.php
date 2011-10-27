<?php
include("admin_session.php");
?>

<table width="61%"  border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td><div align="center">
      <table width="100%"  border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td align="left" class=meio_titulo>::: Administra&ccedil;&atilde;o do seu Bookmark!</td>
        </tr>
        <tr>
          <td align="left" valign="top" class=meio_base><p>Bem-vindo, <strong><?php echo $_SESSION['usuario'] ?></strong></p>
            <table width="80%"  border="0" align="center" cellpadding="4" cellspacing="2">
              <tr align="center" valign="top">
                <td><a href="inicio.php?modulo=admin_add"><img src="images/bookmark-adicionar.png" alt="Visualizar, adicionar e remover link do bookmark!" width="64" height="64" border="0"></a></td>
                <td><a href="inicio.php?modulo=adminsenhas"><img src="images/bookmark-chave.png" alt="Gerenciar senhas..." width="64" height="64" border="0"></a></td>
                </tr>
              <tr align="center" valign="top">
                <td>Adicionar links </td>
                <td>Mudar senha </td>
              </tr>
            </table>            
            <p align="right">[ <a href="includes/admin_logout.php">logout</a> ] </p></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
