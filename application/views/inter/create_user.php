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

      <h3>Crear nuevo usuario</h3>

      <div id="infoMessage"><?php echo $message;?></div>

                      
      <?php 

            $options_grupo = array(
                              '1'  => 'Administrador',
                              '4'    => 'Padre',
                            );

            $options_no_hijos = array(
                              '0'  => '0',
                              '1'  => '1',
                              '2'  => '2',
                              '3'  => '3',
                              '4'  => '4',
                              '5'  => '5',
                            );

            //$attributes = array('class' => 'form_admin', 'onChange' => 'javascript:showStudents();');

            $opt_grupo = 'id="grupo" onChange="show_students();"';
            $opt_hijos = 'id="no_hijos" onChange="add_inputs();"';

            $attributes_submit = array("name" => "submit", "value" => "Crear Usuario", "id" => "submit_form");
            //<input type="submit" name="submit" value="Crear usuario" Array />
            $attributes = array('id' => 'id_form', 'class' => 'form_admin', 'onChange' => 'javascript:showStudents();');
            echo form_open("inter/create_user",$attributes);
      ?>

            <div><label>Nombre:</label><?php echo form_input($first_name);?></div><div class="clearboth"></div>

            <div><label>Apellido:</label><?php echo form_input($last_name);?></div><div class="clearboth"></div>

            <div><label>Ocupaci&oacute;n:</label><?php echo form_input($company);?></div><div class="clearboth"></div>

            <div><label>Correo Electr&oacute;nico:</label><?php echo form_input($email);?></div><div class="clearboth"></div>
            
            <div><label>Tipo de Cuenta: </label><?php echo form_dropdown('grupo', $options_grupo, '4', $opt_grupo);?></div><div class="clearboth"></div>

            <div><label>Tel&eacute;fono:</label><?php echo form_input($phone1);?></div><div class="clearboth"></div>

            <div><label>Contrase&ntilde;a:</label><?php echo form_input($password);?></div><div class="clearboth"></div>

            <div><label>Confirmar contrase&ntilde;a:</label><?php echo form_input($password_confirm);?></div><div class="clearboth"></div>

            <div id="no_hijos"><label>Hijos: </label><?php echo form_dropdown('no_hijos', $options_no_hijos,'0',$opt_hijos);?></div><div class="clearboth"></div>

            <?php echo form_submit($attributes_submit);?>

      <?php echo form_close();?>

<script type="text/javascript" src="<?php echo base_url().'assets/specific/source_fancy/jquery-1.8.2.min.js';?>">
</script>   

      <script type="text/javascript">
            $(document).ready(function(){
                  
                  

            });

            function show_students(){

                if($('#grupo').val() == 4){
                    $('#no_hijos').show();
                }
                else{
                    $('#no_hijos').hide();
                    $('.hijos').hide();
                }
            }


            function add_inputs(){
                
                //var i = $('#no_hijos').val();
                var num_hijos = $('#no_hijos option:selected').val();
                var i, total;
                var label, input, div, div_clear;

                //alert($('#no_hijos').val());

                 $('.hijos').remove(); 
                  
                for (i=0; i<=(num_hijos-1); i++) {
                    
                    total= i+1;

                    label       = $('<label class="hijos">').text('Hijo ' + total);
                    input       = $('<input type="text" class="hijos">').attr({id:'hijo'+total, name:'hijo'+total});
                    div         = $('<div/>');
                    div_clear   = $('<div class="clearboth"/>');


                    label.appendTo(div);
                    input.appendTo(div);
                    
                    div.insertBefore('#submit_form');
                    div_clear.insertBefore('#submit_form');

                }

                    

            }

            
                  
      </script>

</body>
</html>