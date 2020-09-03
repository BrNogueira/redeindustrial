<?php require_once('functions.php');
add();    ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="col-sm-6 title">
    <h2>Novo Cliente</h2>
</div>
<form action="add.php" method="post">
    <hr />
    <section class="container">
        <div class="row">
            <div class="form-group col-md-5"> <label for="name">Nome</label> <input type="text" class="form-control" name="customer['name']"> <span class="error">* <?php echo $nameErr;?></span></div>
            <div class="form-group col-md-3"> <label for="campo2">CPF</label> <input type="text" class="form-control" name="customer['cpf']"> <span class="error">* <?php echo $cpfErr;?></span></div>
            <div class="form-group col-md-4"> <label for="campo3">E-mail</label> <input type="text" class="form-control" name="customer['email']"> </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5"> <label for="campo1">Sexo</label> <input type="text" class="form-control" name="customer['sex']"> </div>
            <div class="form-group col-md-2"> <label for="campo3">Data de Nascimento</label> <input type="text" class="form-control" name="customer['birthdate']" > </div>
            <div class="form-group col-md-2"> <label for="campo3">Data de Cadastro</label> <input type="text" class="form-control" name="customer['created']" disabled> </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2"> <label for="campo1">Telefone</label> <input type="text" class="form-control" name="customer['phone']"> </div>
            <div class="form-group col-md-2"> <label for="campo3">Celular</label> <input type="text" class="form-control" name="customer['mobile']"> </div>
        </div>
        <div id="actions" class="row">
            <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> <a href="index.php" class="btn btn-default">Cancelar</a> </div>
        </div>
    </section>
</form>
<?php include(FOOTER_TEMPLATE); ?>