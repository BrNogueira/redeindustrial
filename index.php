<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>

<?php $db = open_database(); ?>
<section>


<div class="container">
<h1 class="title">Dashboard</h1>

<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-2"> 
      <a href="customers/add.php" class="btn btn-info">
        <div class="row ">
          <div class="col-md-12 text-center"> <i class="fa fa-plus fa-5x"></i> </div>
          <div class="col-md-12 text-center ">
            <p>Novo Cliente</p>
          </div>
        </div>
      </a> </div>
      <div class="col-xs-6 col-sm-3 col-md-2"> 
      <a href="customers" class="btn btn-secondary">
        <div class="row ">
          <div class="col-md-12 text-center"> <i class="fa fa-user fa-5x"></i> </div>
          <div class="col-md-12 text-center ">
            <p>Cliente</p>
          </div>
        </div>
      </a> </div>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
<hr />

</section>
