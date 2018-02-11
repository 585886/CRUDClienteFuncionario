<?php 
  require_once('functions.php'); 
  edit();
?>
<?php include(HEADER_TEMPLATE); ?>
<h2 style = "color:white;">Atualizar Funcionario</h2>
<form style = "color:white;" action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome:</label>
      <input type="text" class="form-control" name="customer['nome']" value="<?php echo $customer['nome']; ?>" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Endereço:</label>
      <input type="text" class="form-control" name="customer['endereco']" value="<?php echo $customer['endereco']; ?>" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CPF:</label>
      <input type="text" class="form-control" name="customer['CPF']" value="<?php echo $customer['CPF']; ?>" required>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Data de Nascimento:</label>
      <input type="date" class="form-control" name="customer['dataNascimento']" value="<?php echo $customer['dataNascimento']; ?>" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CEP:</label>
      <input type="text" class="form-control" name="customer['CEP']" value="<?php echo $customer['CEP']; ?>" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Municipio:</label>
      <input type="text" class="form-control" name="customer['cidade']" value="<?php echo $customer['cidade']; ?>" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Modificação</label>
      <input type="date" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>" required>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município:</label>
      <input type="text" class="form-control" name="customer['cidade']" value="<?php echo $customer['cidade']; ?>" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">UF:</label>
      <input type="text" class="form-control" name="customer['estado']" value="<?php echo $customer['estado']; ?>" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="customer['celular']" value="<?php echo $customer['celular']; ?>" required>
    </div>

	<div class="form-group col-md-2">
      <label for="campo3">Bairro</label>
      <input type="text" class="form-control" name="customer['bairro']" value="<?php echo $customer['bairro']; ?>" required>
    </div>

	<div class="form-group col-md-2">
      <label for="campo3">RG:</label>
      <input type="text" class="form-control" name="customer['RG']" value="<?php echo $customer['RG']; ?>" required >
    </div>
	
   
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>