<?php

$link = mysql_connect('mysql://root:IbTwhOOlUEfTUPKJNdtEbIyyWilvYWWX@junction.proxy.rlwy.net:19050/railway');
if (!$link) 
{
	die('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão com sucesso!';
mysql_close($link);

?>