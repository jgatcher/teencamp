<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> <?php echo $title; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php 
      //$this->load->helper('url');
    ?>
    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
    
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-datepicker.js"></script>
    
    
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?echo base_url(); ?>">YOUTH CAMP 2012</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="<?php  ?> "><a href="<?echo base_url(); ?>">Home</a></li>
              <li class="<?php  ?> "><a  href="<?echo base_url(); ?>index.php/about">About Youth Camp</a></li>
              <li class="<?php  ?> "><a href="<?echo base_url(); ?>index.php/contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  <div class="container">
  	