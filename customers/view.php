<?php require_once('functions.php');
view($_GET['id']);    ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="col-sm-6 title">
    <h2>Usuário <?php echo "-". $customer['id']; ?></h2>
</div>
<hr>
<section class="container">
    
<?php if (!empty($_SESSION['message'])) : ?> <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> <?php endif; ?>
<dl class="dl-horizontal">
    <dt>Nome:</dt>
    <dd><?php echo $customer['name']; ?></dd>
    <dt>CPF:</dt>
    <dd><?php echo $customer['cpf']; ?></dd>
    <dt>Data de Nascimento:</dt>
    <dd><?php echo $customer['birthdate']; ?></dd>
</dl>
<dl class="dl-horizontal">
    <dt>E-mail:</dt>
    <dd><?php echo $customer['email']; ?></dd>
    <dt>Sexo:</dt>
    <dd><?php echo $customer['sex']; ?></dd>
    <dt>Data de Cadastro:</dt>
    <dd><?php echo $customer['created']; ?></dd>
</dl>
<dl class="dl-horizontal">
    <dt>Telefone:</dt>
    <dd><?php echo $customer['phone']; ?></dd>
    <dt>Celular:</dt>
    <dd><?php echo $customer['mobile']; ?></dd>
</dl>
<div id="actions" class="row">
    <div class="col-md-12"> <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a> <a href="index.php" class="btn btn-default">Voltar</a> </div>
</div>
<?php include(FOOTER_TEMPLATE); ?>
</section>