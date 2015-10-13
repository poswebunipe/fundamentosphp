<?php 

/*
 * Dados de acesso ao banco
 */
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "aulapos";

$conexao = mysql_connect($host,$usuario,$senha);
//Para trabalhar com mais 
//de um banco se passa a conexão.
//mysql_select_db($banco,$conexao);
mysql_select_db($banco);

?>