#
# bookmark.sql
# ************
#
# Bleno Vinicius
# blenolopes@gmail.com
# http://www.bleno.org
#
# ATENÇÃO
# *******
# Lembre-se de criar o usuário e senha para acessar o banco de dados,
# dando privilegios ao usuario para manipular o banco de dados bookmark.
# O arquivo includes/secure.php contem as variaveis para acesso ao db.
#

/*!40100 SET CHARACTER SET latin1;*/
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


CREATE DATABASE /*!32312 IF NOT EXISTS*/ "bookmark" /*!40100 DEFAULT CHARACTER SET latin1 */;

USE "bookmark";

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tb_links" (
  "id_dono" int(10) unsigned NOT NULL,
  "link" varchar(100) NOT NULL
) /*!40100 DEFAULT CHARSET=latin1*/;

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tb_usuarios" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "usuario" varchar(50) NOT NULL,
  "email" varchar(50) NOT NULL,
  "senha" varchar(50) NOT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=7 /*!40100 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC*/;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
