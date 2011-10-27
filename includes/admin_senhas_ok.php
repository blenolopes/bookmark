<?php
include("admin_session.php");
?>

<table width="61%"  border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td><div align="center">
      <table width="100%"  border="0" align="center" cellpadding="8" cellspacing="0">
        <tr>
          <td align="left" class=meio_titulo>::: Senha atualizada com sucesso! </td>
        </tr>
        <tr>
          <td align="left" valign="top" class=meio_base><p><strong><?php echo $_SESSION['usuario'] ?></strong>, sua senha foi atualizada com sucesso!</p>
            <p align="right">[ <a href="includes/admin_logout.php">logout</a> ] </p></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
