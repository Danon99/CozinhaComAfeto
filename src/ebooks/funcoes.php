<?php

function upload_imagem()
{
	if(isset($_FILES["foto"]))
	{
		$extensao = explode('.', $_FILES['foto']['name']);
		$novo_nome = rand() . '.' . $extensao[1];
		$destino = './upload/' . $novo_nome;
		move_uploaded_file($_FILES['foto']['tmp_name'], $destino);
		return $novo_nome;
	}
}

function get_imagem_nome($ebook_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT foto FROM ebooks WHERE id = '$ebook_id'");
	$statement->execute();
	$resultado = $statement->fetchAll();
	foreach($resultado as $linha)
	{
		return $linha["foto"];
	}
}

function get_total_registros()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM ebooks");
	$statement->execute();
	$resultado = $statement->fetchAll();
	return $statement->rowCount();
}

?>