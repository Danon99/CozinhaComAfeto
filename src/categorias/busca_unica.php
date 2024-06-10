<?php
include('db.php');
include('funcoes.php');
if(isset($_POST["categoria_id"]))
{
	$saida = array();
	
	$statement = $connection->prepare(
		"SELECT * FROM categorias 
		WHERE id = '".$_POST["categoria_id"]."' 
		LIMIT 1"
	);
	
	$statement->execute();
	$resultado = $statement->fetchAll();
	
	foreach($resultado as $linha)
	{
		$saida["nome"] = $linha["nome"];
	}
	echo json_encode($saida);
}
?>