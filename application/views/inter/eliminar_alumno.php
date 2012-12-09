<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Colegio CIO de M&eacute;xico ::: <?=$title;?> :::</title>

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css">

      <link type="text/css" rel="stylesheet" href="../assets/css/pages.css">


</head>
<body>
<h1>Eliminar Alumno</h1>

<p>&iquest;Est&aacute; seguro de eliminar este usuario: '<?php echo $user[0]->nombre; ?>'?</p>
	
<?php echo form_open("alumnos/eliminar_alumno/".$user[0]->id);?>

  <p>
  	<label for="confirm">Si:</label>
    <input type="radio" name="confirm" value="yes" checked="checked" />
  	<label for="confirm">No:</label>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php //echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user[0]->id)); ?>

  <p><?php echo form_submit('submit', 'Eliminar');?></p>

<?php echo form_close();?>
</body>
</html>