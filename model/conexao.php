<?php
define('host', 'localhost');
define('usuario', 'root');
define('senha', '');
define('dbname', 'livre');

$conexao = mysqli_connect(host, usuario, senha, dbname) or die ('não deu');
mysqli_set_charset($conexao,"utf8");
?>

