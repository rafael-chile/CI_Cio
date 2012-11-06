<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Colegio CIO de M&eacute;xico</title>

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-responsive.min.css';?>">

      <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/pages.css';?>">


</head>
<body class="admin_adduser">
            <h3>Editar usuario</h3>
      
            <div id="infoMessage"><?php echo $message;?></div>

            <?php 

            $attributes = array('class' => 'form_admin edit_user');

            echo form_open(current_url(),$attributes);?>

                  <div><label>Nombre:</label>  <?php echo form_input($first_name);?></div><div class="clearboth"></div>
                  <div><label>Apellido:</label>  <?php echo form_input($last_name);?></div><div class="clearboth"></div>
                  <div><label>Trabajo:</label>  <?php echo form_input($company);?></div><div class="clearboth"></div>
                  <div><label>Tel&eacute;fono:</label>  <?php echo form_input($phone);?></div><div class="clearboth"></div>
                  <div><label>Contrase&ntilde;a:<br/><span style="font-size:9px; font-weight:normal;"> (Para nueva contrase&ntilde;a)</span> </label><?php echo form_input($password);?></div><div class="clearboth"></div>
                  <div><label>Confirmar Contrase&ntilde;a:<br/> <span style="font-size:9px; font-weight:normal;">(Para nueva contrase&ntilde;a)</span> </label><?php echo form_input($password_confirm);?></div><div class="clearboth"></div>

                  <?php echo form_hidden('id', $user->id);?>
                  <?php echo form_hidden($csrf); ?>

                  <p><?php echo form_submit('submit', 'Actualizar usuario');?></p>

            <?php echo form_close();?>
</body>
</html>