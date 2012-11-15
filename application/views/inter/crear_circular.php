<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Colegio CIO de M&eacute;xico ::: <?=$title;?> :::</title>

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-responsive.min.css';?>">

      <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/pages.css';?>">


</head>
<body class="admin_adduser">

      <h3>Agregar nueva circular</h3>

      <div id="infoMessage"><?php echo $message;?></div>

      <?php 

            $attributes = array('class' => 'form_admin add_alumno');
            echo form_open("inter/crear_circular",$attributes);
      ?>

            <div><label>T&iacute;tulo:      </label><?php echo form_input($titulo);?></div><div class="clearboth"></div>
            <div><label>A&ntilde;o:         </label><?php echo form_input($anio);?></div><div class="clearboth"></div>
            <div><label>N&uacute;mero:      </label><?php echo form_input($numero);?></div><div class="clearboth"></div>
            <div><label>Fecha:              </label><?php echo form_input($fecha);?></div><div class="clearboth"></div>
            <div><label>Asunto:             </label><?php echo form_input($asunto);?></div><div class="clearboth"></div>
            <div><label>Contenido:          </label><?php echo form_textarea($contenido_circular);?></div><div class="clearboth"></div>
            

            <?php echo form_submit('submit', 'Agregar Circular');?>

      <?php echo form_close();?>
                              
</body>
</html>