<?php
include("conexao.php");

$SQL_CONSULTA = "select * from Produto";


$res = mysql_query($SQL_CONSULTA);


while($linha = mysql_fetch_assoc($res)){
	
echo "ID: $linha[id]  | Nome: $linha[nome] | Descrição: $linha[descricao] | Quantidade: $linha[quantidade]";
echo "<a href=\"http://localhost/fujioka/exclusao.php?id=$linha[id]\">Excluir</a>   ";
echo "<a href=\"http://localhost/fujioka/consulta.php?id=$linha[id]\">Alterar</a> " ;
echo "<p/>";

	
}



















$SQL_CONSULTA = "select * from produto";
/*Utilizado para realizar operações
 *no banco mysql_query.
 */
 echo "<a href=\"http://localhost/fujioka/formproduto.html\">Incluir</a>   ";
 echo "<p/>";
$res = mysql_query($SQL_CONSULTA);

while($linha = mysql_fetch_assoc($res)){

echo "ID: $linha[id]  | Nome: $linha[nome] | Descrição: $linha[descricao] | Quantidade: $linha[quantidade]";
echo "<a href=\"http://localhost/fujioka/exclusao.php?id=$linha[id]\">Excluir</a>   ";
echo "<a href=\"http://localhost/fujioka/consulta.php?id=$linha[id]\">Alterar</a> " ;
echo "<p/>";

}

?>
