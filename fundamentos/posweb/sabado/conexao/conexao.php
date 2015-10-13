<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'posweb';

// realiza conexão com banco de dados MySQL
$conexao = mysql_connect($servidor, $usuario, $senha, $banco);
$banco_selecionado = mysql_select_db("posweb");

if (mysql_error())
  {
  echo "Falha ao conectar no banco de dados: " . mysql_error();
  }


?>