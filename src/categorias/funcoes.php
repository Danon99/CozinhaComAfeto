<?php



function get_total_registros()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM categorias");
	$statement->execute();
	$resultado = $statement->fetchAll();
	return $statement->rowCount();
}

?>