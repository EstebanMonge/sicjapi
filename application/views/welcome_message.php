<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<title>Consultar cédula</title>
</head>
<body>
<div id="container">
<main role="main">
<div class="jumbotron">
<div class="container">
<center><h1>Consultar cédula</h1></center>
</div>
</div>
<?php echo form_open('welcome/data_submitted'); ?>
<div class="form-group">
<?php $options = array(
        'fisica'         => 'Física',
        'juridica'           => 'Jurídica',
);
?>
<div class="form-group">
<?php echo form_label('Tipo:','type'); ?>
<?php echo form_dropdown('type', $options, '','class="form-control"');?>
</div>
<div class="form-group">
<?php echo form_label('Cédula:'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname'),'','class="form-control"'); ?>
</div>
<center><input class="btn btn-primary" type="submit" value="Submit"></center>
<?php echo form_close(); ?>
</div>
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
