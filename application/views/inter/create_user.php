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
<body class="admin_adduser">

                  <h1>Crear nuevo usuario</h1>

                  <div id="infoMessage"><?php echo $message;?></div>

                      <!--<form class="form_admin" method="post" action="inter/create_user">
                          <div><label>Nombre:</label><?php //echo form_input($first_name);?><div class="clearboth"></div>
                          <div><label>Apellido:</label><?php //echo form_input($last_name);?><div class="clearboth"></div>
                          <div><label>Trabajo:</label><?php //echo form_input($company);?><div class="clearboth"></div>
                          <div><label>Correo Electr&oacute;nico: </label><?php //echo form_input($email);?><div class="clearboth"></div>
                          <div><label>Tel&eacute;fono:: </label><?php //echo form_input($phone1);?><div class="clearboth"></div>
                          <div><label>Contrase&ntilde;a: </label><?php //echo form_input($password);?><div class="clearboth"></div>
                          <div><label>Confirmar contrase&ntilde;a: </label><?php //echo form_input($password_confirm);?><div class="clearboth"></div>
                          <input type="submit" name="submit" value="Crear Usuario">
                      </form>-->
      <?php 

            $attributes = array('class' => 'form_admin');
            echo form_open("inter/create_user",$attributes);
      ?>

            <div><label>Nombre:</label><?php echo form_input($first_name);?></div><div class="clearboth"></div>

            <div><label>Apellido:</label><?php echo form_input($last_name);?></div><div class="clearboth"></div>

            <div><label>Trabajo:</label><?php echo form_input($company);?></div><div class="clearboth"></div>

            <div><label>Correo Electr&oacute;nico:</label><?php echo form_input($email);?></div><div class="clearboth"></div>

            <div><label>Tel&eacute;fono:</label><?php echo form_input($phone1);?></div><div class="clearboth"></div>

            <div><label>Contrase&ntilde;a:</label><?php echo form_input($password);?></div><div class="clearboth"></div>

            <div><label>Confirmar contrase&ntilde;a:</label><?php echo form_input($password_confirm);?></div><div class="clearboth"></div>

            <?php echo form_submit('submit', 'Crear usuario');?>

      <?php echo form_close();?>
                              
</body>
</html>