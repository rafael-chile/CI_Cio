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
            $attributes = array('id' => 'id_form', 'class' => 'form_admin');
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
                <?php 
                    $estudiantes = ($estudiante_bd);
                ?>
<script type="text/javascript" src="<?php echo base_url().'assets/specific/source_fancy/jquery-1.8.2.min.js';?>"></script>   
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

      <script type="text/javascript">
            $(document).ready(function(){
                  //NOT USED YET                  
                  $('#searchBox').autocomplete({ source: ['asfd', 'asdfafsdf', '23432ewr', 'gag4156'], delay: 1000 });
                  $('#searchBox').keydown( function () {   
                      $('#searchBox').autocomplete('option', 'delay', 1000 / ($('#searchBox').val().length + 1));
                  });


                  $.widget("custom.catcomplete", $.ui.autocomplete, {
                      _renderMenu: function(ul, items) {
                          var self = this;
                     
                          $.each(items, function(index, item) {
                              self._renderItem(ul, item);
                          });
                      }
                  });


                  $('#id_form').submit(function() {
                      
                      //if the hidden value is not valid (is less than 1 since input field was not filled automatically), remove proper hidden input.
                      var i = 1;


                      $(".hijo_hidden").each(
                          function(){
                              if( $(this).val()< 1 ) {
                                  $(this).remove();
                              }
                          }
                      )
                      return true;
                  });
            });

            

            function activate_searchBox(num_hijos){

                //Agregar el autocomplete a cada input después de decir cuántos hijos tiene el user.
                //Se manda llamar después de crear los inputs.

                var autocomp_opt1={
                         source: <?php echo $estudiantes; ?>,
                         delay: 0,
                         select: function(event, ui) {
                                $('#hijo1').val(ui.item.label);
                                $('#hijo_hidden1').val(ui.item.value);
                                return false;
                         },
                         focus: function(event, ui) {
                                $("#hijo1").val(ui.item.label);
                                return false;
                         }
                };

                var autocomp_opt2={
                         source: <?php echo $estudiantes; ?>,
                         delay: 0,
                         select: function(event, ui) {
                                $('#hijo2').val(ui.item.label);
                                $('#hijo_hidden2').val(ui.item.value);
                                return false;
                         },
                         focus: function(event, ui) {
                                $("#hijo2").val(ui.item.label);
                                return false;
                         }
                };

                var autocomp_opt3={
                         source: <?php echo $estudiantes; ?>,
                         delay: 0,
                         select: function(event, ui) {
                                $('#hijo3').val(ui.item.label);
                                $('#hijo_hidden3').val(ui.item.value);
                                return false;
                         },
                         focus: function(event, ui) {
                                $("#hijo3").val(ui.item.label);
                                return false;
                         }
                };

                var autocomp_opt4={
                         source: <?php echo $estudiantes; ?>,
                         delay: 0,
                         select: function(event, ui) {
                                $('#hijo4').val(ui.item.label);
                                $('#hijo_hidden4').val(ui.item.value);
                                return false;
                         },
                         focus: function(event, ui) {
                                $("#hijo4").val(ui.item.label);
                                return false;
                         }
                };

                var autocomp_opt5={
                         source: <?php echo $estudiantes; ?>,
                         delay: 0,
                         select: function(event, ui) {
                                $('#hijo5').val(ui.item.label);
                                $('#hijo_hidden5').val(ui.item.value);
                                return false;
                         },
                         focus: function(event, ui) {
                                $("#hijo5").val(ui.item.label);
                                return false;
                         }
                };

                
                var vect_opt = new Array();
                vect_opt.push(autocomp_opt1);
                vect_opt.push(autocomp_opt2);
                vect_opt.push(autocomp_opt3);
                vect_opt.push(autocomp_opt4);
                vect_opt.push(autocomp_opt5);

                for(var i=1;i<=num_hijos;i++){
                        
                    $('#hijo'+i).catcomplete(vect_opt[i-1]);
                }


                /*$('.hijos').autocomplete({ 
                                 source: <?php echo $estudiantes; ?>, 
                                 delay: 500,
                                 select: function(event, ui) {
                                    $("#" + labels[i]).val(ui.item.label);
                                    $("#" + labels[i]+"_hid").val(ui.item.value);
                                }
                                
                });*/


                $('.hijos').keydown( function () {   
                      $('.hijos').autocomplete('option', 'delay', 500 / ($('.hijos').val().length + 1));
                });
            }

            function show_students(){

                if($('#grupo').val() == 4){
                    $('#no_hijos').show();
                    add_inputs();
                    //$('#no_hijos').selected('0');
                }
                else{
                    $('#no_hijos').hide();

                    $('.hijos').remove();
                    $('.hijo_hidden').remove();
                    $('.new_div').remove();
                    $('.div_clear').remove();
                }
            }


            function add_inputs(){
                
                var num_hijos = $('#no_hijos option:selected').val();
                var i, total;
                var label, input, div, div_clear;
                //var 
                
                $('.hijos').remove(); 
                $('.hijo_hidden').remove(); 
                $('.new_div').remove(); 
                $('.div_clear').remove(); 

                activate_searchBox(num_hijos);   

                for (i=0; i<=(num_hijos-1); i++) {
                    
                    total= i+1;

                    label       = $('<label class="hijos">').text('Hijo ' + total);
                    input       = $('<input type="text" class="hijos">').attr({id:'hijo'+total, name:'hijo'+total});
                    div         = $('<div class="new_div"/>');
                    div_clear   = $('<div class="clearboth div_clear"/>');

                    hidden_inp  = $('<input type="hidden" class="hijo_hidden">').attr({id:'hijo_hidden'+total, name:'hijo_hidden[]'});

                    hidden_inp.appendTo('#id_form');

                    label.appendTo(div);
                    input.appendTo(div);
                    
                    div.insertBefore('#submit_form');
                    div_clear.insertBefore('#submit_form');
                    
                }

                activate_searchBox(num_hijos); 
                
            }

            
                  
      </script>

</body>
</html>