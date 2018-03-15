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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> 
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">Practicum</a> </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create Account</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>
            <button name="submit" type="submit" class="btn btn-default">Login</button>
          </form>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php $this->load->view('layouts/includes/sidebar'); ?>
        </div>

        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-green">
              <h3 class="panel-title"> Latest Release</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div>      
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div>    
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div> 
                <div class="col-md-4">
                </div>   
