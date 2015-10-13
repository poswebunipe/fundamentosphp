<?php
include 'funcoesEmprestimo.php';

$nome = $_GET['nomeFuncionario'];
$salario = $_GET['valorSalario'];
$valorEmprestimo = $_GET['valorEmprestimo'];

$liberado = validarEmprestimo($salario,$valorEmprestimo);

if($liberado){
	echo "Valor Liberado";
}else{
	echo "Valor não Liberado";
	
}

?>

