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



                  <h3>Editar circular</h3>

                  <div id="infoMessage"><?php echo $message;?></div>

      <?php 
            $attributes = array('class' => 'form_admin add_alumno');
            echo form_open("inter/actualizar_circular",$attributes);
      ?>

            <div><label>T&iacute;tulo:      </label><?php echo form_input('titulo',$circular[0]->titulo);?></div><div class="clearboth"></div>
            <div><label>A&ntilde;o:         </label><?php echo form_input('anio',$circular[0]->anio);?></div><div class="clearboth"></div>
            <div><label>N&uacute;mero:      </label><?php echo form_input('numero',$circular[0]->numero);?></div><div class="clearboth"></div>
            <div><label>Fecha:              </label><?php echo form_input('fecha',$circular[0]->fecha);?></div><div class="clearboth"></div>
            <div><label>Asunto:             </label><?php echo form_input('asunto',$circular[0]->asunto);?></div><div class="clearboth"></div>
            <div><label>Contenido:          </label><?php echo form_textarea('contenido_circular',$circular[0]->contenido);?></div><div class="clearboth"></div>
            <?php echo form_hidden('id', $circular[0]->id);?>

            <?php echo form_submit('submit', 'Actualizar Circular');?>

      <?php echo form_close();?>
                              
</body>
</html>