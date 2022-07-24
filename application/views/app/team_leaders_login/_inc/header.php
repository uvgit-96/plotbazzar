<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rupee Expert | Admin Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">

  <!-- Custom css  -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/edu_erp.css">

  <script type="text/javascript">
       var baseURL = "<?php echo base_url(); ?>";
   </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <?php $error = $this->session->flashdata('errors'); ?>
  <?php $reCaptcha = $this->session->flashdata('reCaptcha'); ?>


  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="<?= base_url($this->general_settings['logo']); ?>" alt="Logo Edu erp"> <br>
      <a href="<?= base_url('app'); ?>" class="p"><b><?= $this->general_settings['application_name']; ?></b></a>
    </div>
