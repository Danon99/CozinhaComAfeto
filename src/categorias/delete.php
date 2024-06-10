<?php

include('db.php');
include("funcoes.php");

if(isset($_POST["categoria_id"]))
{
	
	
	
	$statement = $connection->prepare(
		"DELETE FROM categorias WHERE id = :id"
	);
	$resultado = $statement->execute(
		array(
			':id'	=>	$_POST["categoria_id"]
		)
	);
	
	if(!empty($resultado))
	{
		echo 'Feito com sucesso';
	}
}



?>