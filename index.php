<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>
<h1 class = "titulo">PAINEL DE CONTROLE</h1>
<?php if ($db) : ?>
<div class="cliente">
	<a href="funcionarios" class="btn btn-primary">
		<i class="fa fa-vcard fa-5x"></i>
		<p>Funcionários</p>
	</a>
	<br/>
	<a href="clientes" class="btn btn-primary">
		<i class="fa fa-user fa-5x"></i>
		<p>Cliente</p>
	</a>
</div>
<?php else : ?>
<div class="alert alert-danger" role="alert">
	<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
</div>
<?php endif; ?>
<?php include(FOOTER_TEMPLATE); ?>