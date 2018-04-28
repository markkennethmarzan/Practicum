<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Practicum</title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css">
<!-- Bootstrap core JavaScript
  ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Shopping Cart</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
      <?php if(!$this->session->userdata('logged_in')) : ?>
        <li><a href="<?php echo base_url(); ?>users/register">Create Account</a></li>
      <?php endif; ?>
      </ul>
      <?php if(!$this->session->userdata('logged_in')) : ?>
       <form method="post" action="<?php echo base_url(); ?>users/login" class="navbar-form navbar-right">
        <div class="form-group">
          <input name="username" type="text" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <input name="password" type="password" class="form-control" placeholder="Enter Password">
        </div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
    <?php else : ?>
    <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
      <button name="submit" type="submit" class="btn btn-default">Logout</button>
    </form>
    <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <?php $this->load->view('layouts/includes/sidebar'); ?>
        </div>

        <div class="col-md-8">


          <?php if($this->session->flashdata('registered')) : ?>
  <div class="alert alert-success">
    <?php echo $this->session->flashdata('registered'); ?>
  </div>
<?php endif; ?>
<?php if($this->session->flashdata('pass_login')) : ?>
  <div class="alert alert-success">
    <?php echo $this->session->flashdata('pass_login'); ?>
  </div>
<?php endif; ?>

<?php if($this->session->flashdata('fail_login')) : ?>
  <div class="alert alert-danger">
    <?php echo $this->session->flashdata('fail_login'); ?>
  </div>
<?php endif; ?>


          <div class="panel panel-default">
            <div class="panel-heading panel-heading-green">
              <h3 class="panel-title"> </h3>
            </div>
            <div class="panel-body">
              <div class="row">
  
