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



                  <h3>Editar datos del alumno</h3>

                  <div id="infoMessage"><?php echo $message;?></div>

      <?php 
            $attributes = array('class' => 'form_admin add_alumno');
            echo form_open("alumnos/actualizar_alumno",$attributes);
      ?>

            <div><label>Nombre:             </label><?php echo form_input('nombre',$user[0]->nombre);?></div><div class="clearboth"></div>
            <div><label>Apellido Paterno:   </label><?php echo form_input('apellido_pat',$user[0]->apellido_pat);?></div><div class="clearboth"></div>
            <div><label>Apellido Materno:   </label><?php echo form_input('apellido_mat',$user[0]->apellido_mat);?></div><div class="clearboth"></div>
            <div><label>CURP:               </label><?php echo form_input('curp',$user[0]->curp);?></div><div class="clearboth"></div>
            <div><label>Fecha de Nacimiento:</label><?php echo form_input('fecha_nac',$user[0]->fecha_nac);?></div><div class="clearboth"></div>
            <div><label>Fecha Ingreso:      </label><?php echo form_input('fecha_ingreso',$user[0]->fecha_ingreso);?></div><div class="clearboth"></div>
            <div><label>Direcci&oacute;n:   </label><?php echo form_input('direccion',$user[0]->direccion);?></div><div class="clearboth"></div>
            <div><label>Tel&eacute;fono:    </label><?php echo form_input('telefono',$user[0]->telefono);?></div><div class="clearboth"></div>
            <div><label>Grado:              </label><?php echo form_input('grado',$user[0]->grado);?></div><div class="clearboth"></div>
            <div><label>Grupo:              </label><?php echo form_input('grupo',$user[0]->grupo);?></div><div class="clearboth"></div>
            <?php echo form_hidden('id', $user[0]->id);?>

            <?php echo form_submit('submit', 'Actualizar Alumno');?>

      <?php echo form_close();?>
                              
</body>
</html>