<?php
include("funcoes.php");

$numeroA = $_GET['numeroA'];
$numeroB = $_GET['numeroB'];

$soma = soma($numeroA,$numeroB);



echo "A soma de A + B é ".$soma;


?>