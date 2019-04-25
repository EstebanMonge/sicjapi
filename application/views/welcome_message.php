<!DOCTYPE html>
<html>
<head>
<title>Consultar cédula</title>
</head>
<body>
<div id="container">
<?php echo form_open('welcome/data_submitted'); 
$options = array(
        'fisica'         => 'Física',
        'juridica'           => 'Jurídica',
);
?>
<h1>Consultar cédula</h1>
<?php echo form_label('Tipo:'); ?>
<?php echo form_dropdown('type', $options);?>
<?php echo form_label('Cédula:'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>
</div>
</body>
</html>
