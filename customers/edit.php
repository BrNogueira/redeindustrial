<?php require_once('functions.php');
edit();    ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="col-sm-6 title">
    <h2>Atualizar Cliente</h2>
</div>
<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
    <hr />
<section class="container">
<div class="row">
        <div class="form-group col-md-5"> <label for="name">Nome</label> <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>"> </div>
        <div class="form-group col-md-3"> <label for="campo2">CPF</label> <input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>"> </div>
        <div class="form-group col-md-4"> <label for="campo2">E-mail</label> <input type="text" class="form-control" name="customer['email']" value="<?php echo $customer['email']; ?>"> </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4"> <label for="campo1">Sexo</label> <input type="text" class="form-control" name="customer['sex']" value="<?php echo $customer['sex']; ?>"> </div>
        <div class="form-group col-md-4"> <label for="campo3">Data de Nascimento</label> <input type="text" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>"> </div>
        <div class="form-group col-md-4"> <label for="campo3">Data de Cadastro</label> <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>"> </div>
    </div>
    <div class="row">
        <div class="form-group col-md-2"> <label for="campo2">Telefone</label> <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>"> </div>
        <div class="form-group col-md-2"> <label for="campo3">Celular</label> <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>"> </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> <a href="index.php" class="btn btn-default">Cancelar</a> </div>
    </div>
</section>
</form>
<?php include(FOOTER_TEMPLATE); ?>