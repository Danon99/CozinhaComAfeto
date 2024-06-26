<?php
include('db.php');
include('funcoes.php');
$query = '';
$saida = array();
$query .= "SELECT * FROM categorias ";


	if(isset($_POST["search"]["value"]))
	{
		$query .= 'WHERE nome LIKE "%'.$_POST["search"]["value"].'%" ';
	}
	if(isset($_POST["order"]))
	{
		$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
	}
	else
	{
	$query .= 'ORDER BY id DESC ';
	}
	if($_POST["length"] != -1)
	{
		$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
	}	


	$statement = $connection->prepare($query);
	$statement->execute();	
	$resultado = $statement->fetchAll();
	
	$dados = array();
	$contar_rows = $statement->rowCount();
	
	foreach($resultado as $row)
	{
		$sub_array = array();
		$sub_array[] = $row["nome"];
		$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Editar</button>';
		$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Deletar</button>';
		$dados[] = $sub_array;
		
	}


	$saida = array(
	 	"draw"				=>	intval($_POST["draw"]),
		"recordsTotal"		=> 	$contar_rows,
		"recordsFiltered"	=>	get_total_registros(),
		"data"				=>	$dados
	);
	echo json_encode($saida);
?>