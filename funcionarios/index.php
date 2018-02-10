<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2 style = "color:white;" >Funcionarios <h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo funcionario</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead style = "color:white;">
	<tr>
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>CPF</th>
		<th>Data de Nascimento</th>
		<th>Endereco</th>
		<th>Bairro</th>
		<th>CEP</th>
		<th>Data de Cadastro</th>
		<th>Municipio</th>
		<th>Telefone</th>
		<th>Celular</th>
		<th>UF</th>		
		<th>RG</th>	
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($customers) : ?>
<?php foreach ($customers as $customer) : ?>
	<tr style = "color:white;background-color:#7f8c8d;">
		<td><?php echo $customer['id']; ?></td>
		<td><?php echo $customer['nome']; ?></td>
		<td><?php echo $customer['CPF']; ?></td>
		<td><?php echo $customer['dataNascimento']; ?></td>
		<td><?php echo $customer['endereco']; ?></td>
		<td><?php echo $customer['bairro']; ?></td>
		<td><?php echo $customer['CEP']; ?></td>
		<td><?php echo $customer['created']; ?></td>
		<td><?php echo $customer['cidade']; ?></td>
		<td><?php echo $customer['telefoneFixo']; ?></td>
		<td><?php echo $customer['celular']; ?></td>
		<td><?php echo $customer['estado']; ?></td>
		<td><?php echo $customer['RG']; ?></td>
		<td><?php echo $customer['modified']; ?></td>
		
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td style = "background-color:#7f8c8d;" colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php');?>
<?php include(FOOTER_TEMPLATE); ?>