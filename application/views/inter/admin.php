<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Colegio CIO de M&eacute;xico</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/';?>css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/';?>css/bootstrap-responsive.min.css">

	<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/';?>css/pages.css">
	
	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url().'assets/';?>specific/source_fancy/jquery-1.8.2.min.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url().'assets/';?>specific/source_fancy/jquery.fancybox.js?v=2.1.1"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/';?>specific/source_fancy/jquery.fancybox.css?v=2.1.1" media="screen" />
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url().'assets/';?>specific/source_fancy/helpers/jquery.fancybox-media.js?v=1.0.4"></script>

	<script type="text/javascript">
			$(document).ready(function() {
			
				$('.fancybox').fancybox();

				$("#add-new-user").click(function() {
								$.fancybox.open({
									//href : '/cio/primaria',
									href : '../inter/create_user',
									type : 'iframe',
									width: 470,
									'scrolling' : 'no'
								});
				});

				$("#add-new-alumno").click(function() {
								$.fancybox.open({
									href : '../alumnos/crear_alumno',
									type : 'iframe',
									width: 470,
									'scrolling' : 'no'
								});
				});
				

				$("#add-new-circular").click(function() {
								$.fancybox.open({
									href : '../inter/crear_circular',
									type : 'iframe',
									width: 470,
									'scrolling' : 'no'
								});
				});


				$(".various").fancybox({
						//maxWidth	: 470,
						//maxHeight	: 700,
						//fitToView	: false,
						//width		: '70%',
						width		: '470',
						//height		: '100%',
						autoSize	: true,
						closeClick	: false,
						openEffect	: 'none',
						closeEffect	: 'none'
				});


			});
		</script>

</head>
<body>
<center>

<div id="contenedor_admin">

	<!--<div style="background-image:url(http://colegiociodemexico.edu.mx/test_new/imagenes/Maquetacion_01.jpg); background-repeat:no-repeat; width:100%; height:103px;">-->
	<div style="background-image:url(<?php echo base_url().'assets/';?>img/header_notext.png); background-repeat:no-repeat; width:100%; height:103px;">
	</div>            
	<div id="menu_ppal"> 

	        <table style="height: 46px;" id="menu" width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
	            
	        </table>           
	</div>


    	<div id="contenido" class="admin" style="text-align:justify">     

    		<div id="centro">
    			Hola <b><?=$nombre; ?></b>.<br/><br/>
    			

	    		<div id="infoMessage"><?php echo $message;?></div>

	    		<div class="tabbable"> <!-- Only required for left/right tabs -->
	    		  
	    		  <ul class="nav nav-tabs">
	    		    <li class="active"><a href="#tab1" data-toggle="tab">Usuarios</a></li>
	    		    <li><a href="#tab2" data-toggle="tab">Alumnos</a></li>
	    		    <li><a href="#tab3" data-toggle="tab">Circulares</a></li>
	    		  </ul>
	    		  
	    		  <div class="tab-content">
	    		    <div class="tab-pane span10 active" id="tab1">
	    		      
	    		      <p style="padding-left:10px;"><a id="add-new-user" href="javascript:;">Crear Nuevo Usuario</a></p>

	    		      <?php //var_dump($users);?>

	    		      <table class="table table-bordered">
	    		      	<tr>
	    		      		<th>Nombre</th>
	    		      		<th>Apellido</th>
	    		      		<th>Correo</th>
	    		      		<th>Telef&oacute;no</th>
	    		      		<th>Grupos</th>
	    		      		<th>Estado del usuario</th>
	    		      		<th>Edici&oacute;n</th>

	    		      	</tr>
	    		      	<?php foreach ($users as $user):?>
	    		      		<tr>
	    		      			<td><?php echo $user->id."-".$user->first_name;?></td>
	    		      			<td><?php echo $user->last_name;?></td>
	    		      			<td><?php echo $user->email;?></td>
	    		      			<td><?php echo $user->phone;?></td>
	    		      			<td>
	    		      				<?php foreach ($user->groups as $group):?>
	    		      					<?php echo $group->name;?><br />
	    		                      <?php endforeach?>
	    		      			</td>
	    		      			<?php $attributes = array('class' => 'various', 'data-fancybox-type' => 'iframe'); ?>
	    		      			<?php //$attributes = array('' => ''); ?>
	    		      			<td><?php echo ($user->active) ? anchor("inter/deactivate/".$user->id, 'Activo') : anchor("inter/activate/". $user->id, 'Inactivo');?></td>
	    		      			<td><?php echo anchor("inter/edit_user/".$user->id, 'Editar', $attributes);?></td>
	    		      		</tr>
	    		      	<?php endforeach;?>
	    		      </table>

	    		    </div>
	    		    <div class="tab-pane span10" id="tab2">

	    		      <p style="padding-left:10px;"><a id="add-new-alumno" href="javascript:;">Crear Nuevo Alumno</a></p>

	    		      <table class="table table-bordered">
	    		      	<tr>
	    		      		<th>Nombre</th>
	    		      		<th>Apellido Paterno</th>
	    		      		<th>Apellido Materno</th>
	    		      		<th>CURP</th>
	    		      		<th>Fecha Nacimiento</th>
	    		      		<th>Fecha Ingreso</th>
	    		      		<th>Direcci&oacute;n</th>
	    		      		<th>Tel&eacute;fono</th>
	    		      		<th>Grado</th>
	    		      		<th>Grupo</th>
	    		      		<th>Editar</th>
	    		      		<th>Eliminar</th>
	    		      	</tr>
	    		      	<?php foreach ($alumnos as $alumno):?>
	    		      		<tr>
	    		      			<td><?php echo $alumno->nombre;?></td>
	    		      			<td><?php echo $alumno->apellido_pat;?></td>
	    		      			<td><?php echo $alumno->apellido_mat;?></td>
	    		      			<td><?php echo $alumno->curp;?></td>
	    		      			<td><?php echo $alumno->fecha_nac;?></td>			    					
	    		      			<td><?php echo $alumno->fecha_ingreso;?></td>			    					
	    		      			<td><?php echo $alumno->direccion;?></td>			    					
	    		      			<td><?php echo $alumno->telefono;?></td>			    					
	    		      			<td><?php echo $alumno->grado;?></td>			    					
	    		      			<td><?php echo $alumno->grupo;?></td>			    					
	    		      			<!--<td><?php //echo anchor("", 'Editar');?></td>-->
	    		      			<td><a class="various" data-fancybox-type="iframe" href="../alumnos/actualizar_alumno/<?php echo $alumno->id; ?>" >Editar</a></td>
	    		      			<td><a href="../alumnos/eliminar_alumno/<?php echo $alumno->id; ?>" >Eliminar</a></td>
	    		      			
	    		      		</tr>
	    		      	<?php endforeach;?>
	    		      </table>

	    		    </div>


	    		    <div class="tab-pane span10" id="tab3">

	    		      	<p style="padding-left:10px;"><a id="add-new-circular" href="javascript:;">Crear Nueva Circular</a></p>

	    		      	<table class="table table-bordered">
	    		      		<tr>
	    		      			<th>T&iacute;tulo</th>
	    		      			<th>A&ntilde;o</th>
	    		      			<th>N&uacute;mero</th>
	    		      			<th>Fecha</th>
	    		      			<th>Asunto</th>
	    		      			<th>Contenido</th>
	    		      			<th>Editar</th>
	    		      			<th>Eliminar</th>
	    		      		</tr>
	    		      		<?php foreach ($circulares as $circular):?>
	    		      			<tr>
	    		      				<td><?php echo $circular->id . "-" . $circular->titulo;?></td>
	    		      				<td><?php echo $circular->anio;?></td>
	    		      				<td><?php echo $circular->numero;?></td>
	    		      				<td><?php echo $circular->fecha;?></td>
	    		      				<td><?php echo $circular->asunto;?></td>			    					
	    		      				<td><?php echo $circular->contenido;?></td>			    					
	    		      				<td><a class="various" data-fancybox-type="iframe" href="../inter/actualizar_circular/<?php echo $circular->id; ?>" >Editar</a></td>
	    		      				<td><a href="../inter/eliminar_circular/<?php echo $circular->id; ?>" >Eliminar</a></td>
	    		      				
	    		      			</tr>
	    		      		<?php endforeach;?>
	    		      	</table>
    		      

	    		    </div>
	    		    
	    		  </div>

	    		</div>


			</div>		
	
		</div>


		
</div> <!-- id="contenedor"-->
</center>
<script src="<?php echo base_url().'assets/';?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/';?>js/modernizr.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
     
    });
</script>
</body>
</html>