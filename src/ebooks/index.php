<?php 
try {
  $pdo = new PDO('mysql:host=localhost;dbname=cozinha' , "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  

 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
$lista = $pdo->query("SELECT * FROM categorias;");
$categorias = $lista->fetchall(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>
	<head>
		<title>Cozinha com Afeto</title>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
		</style>

		<link href="../../assets/img/favicon.png" rel="icon">
		<link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
			rel="stylesheet">
		<link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
		<link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
		<link href="../../assets/css/style.css" rel="stylesheet">

	</head>
	<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Cozinha com afeto</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/cozinhacomafeto-main/src/admin/dashboard.php">Cozinha com afeto &emsp;</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="http://localhost/cozinhacomafeto-main/src/admin/dashboard.php">Página inicial </a></li>
        <li><a href="http://localhost/cozinhacomafeto-main/src/categorias/index.php">Categorias</a></li>
		<li><a href="http://localhost/cozinhacomafeto-main/src/receitas/index.php">Receitas</a></li>
		<li><a href="http://localhost/cozinhacomafeto-main/src/ebooks/index.php">E-books</a></li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
	  	<li><a href="http://localhost/cozinhacomafeto-main/">Ir para o site</a></li>
        <li><a href="../../admin.php">Sair</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


		<div class="container box">
			<div class="col-lg-12" style="text-align: right;">
              <a href="../admin/dashboard.php" type="button" class="btn btn-secondary rounded-pill">Voltar</a>
            </div>
			<div class="section-title">
				<h2><span>Cadastro de E-book</span></h1>
				<h3>Seja bem vindo Administrador</h3><br>                  
			</div>
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Adicionar receita</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">Foto</th>
							<th width="35%">Título</th>
							<th width="10%">Editar</th>
							<th width="10%">Deletar</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Adicionar E-book</h4>
				</div>
				<div class="modal-body">
					<label>Título</label>
					<input type="text" name="titulo" id="titulo" class="form-control" />
					<br />
					<label>Link</label>
					<input type="text" name="link" id="link" class="form-control" />
					<br />
					<label>Foto</label>
					<input type="file" name="foto" id="foto" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="ebook_id" id="ebook_id" />
					<input type="hidden" name="operacao" id="operacao" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Salvar" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >


$(document).ready(function(){
	
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Adicionar E-book");
		$('#action').val("Salvar");
		$('#operacao').val("Salvar");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"buscar.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0],
				"orderable":false,
			},
		],
		"oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },

	});



	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var titulo = $('#titulo').val();
		var link = $('#link').val();
		var etx = $('#foto').val().split('.').pop().toLowerCase();
		if(etx != '')
		{
			if(jQuery.inArray(etx, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Formato da imagem inválido");
				$('#foto').val('');
				return false;
			}
		}	
		if(titulo != '' && link != '')
		{
			$.ajax({
				url:"inserir_alterar.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Título e link, Obrigatórios");
		}
	});
	
	$(document).on('click', '.update', function(){
		var ebook_id = $(this).attr("id");
		$.ajax({
			url:"busca_unica.php",
			method:"POST",
			data:{ebook_id:ebook_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#titulo').val(data.titulo);
				$('#link').val(data.link);
				$('.modal-title').text("Editar e-book");
				$('#ebook_id').val(ebook_id);
				$('#user_uploaded_image').html(data.foto);
				$('#action').val("Editar");
				$('#operacao').val("Editar");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var ebook_id = $(this).attr("id");
		if(confirm("Tem certeza que deseja excluir ?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{ebook_id:ebook_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>