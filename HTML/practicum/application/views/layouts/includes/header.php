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
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Permanent+Marker" rel="stylesheet">
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <b><a class="navbar-brand" href="<?php echo base_url(); ?>">Shopping Cart</a></b>
        </div>
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
  
