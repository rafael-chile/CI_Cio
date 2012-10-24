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
<center>

<div id="contenedor_admin">

	<!--<div style="background-image:url(http://colegiociodemexico.edu.mx/test_new/imagenes/Maquetacion_01.jpg); background-repeat:no-repeat; width:100%; height:103px;">-->
	<div style="background-image:url(../assets/img/header_notext.png); background-repeat:no-repeat; width:100%; height:103px;">
</div>            
<div id="menu_ppal"> 

        <table style="height: 46px;" id="menu" width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
            
        </table>           
</div>


    	<div id="contenido" class="admin" style="text-align:justify">     

    		<div id="centro">
    			Hola <?=$nombre; ?> , usted es Admin.
    			<br/><br/>

	    		<div id="infoMessage"><?php echo $message;?></div>

	    		<div class="row-fluid">
			    	
			    	<div class="span4">
			    		<table class="table table-bordered">
			    			<tr>
			    				<th>Nombre</th>
			    				<th>Apellido</th>
			    				<th>Correo</th>
			    				<th>Grupos</th>
			    				<th>Estado del usuario</th>
			    			</tr>
			    			<?php foreach ($users as $user):?>
			    				<tr>
			    					<td><?php echo $user->first_name;?></td>
			    					<td><?php echo $user->last_name;?></td>
			    					<!--<td><?php //echo $user->email;?></td>-->
			    					<td>Mail</td>
			    					<td>
			    						<?php foreach ($user->groups as $group):?>
			    							<?php echo $group->name;?><br />
			    		                <?php endforeach?>
			    					</td>
			    					<td><?php echo ($user->active) ? anchor("inter/deactivate/".$user->id, 'Activo') : anchor("inter/activate/". $user->id, 'Inactivo');?></td>
			    				</tr>
			    			<?php endforeach;?>
			    		</table>


			    		<p style="padding-left:10px;"><a href="<?php echo site_url('inter/create_user');?>">Crear usuario</a></p>
	    		
			    	</div>	<!-- span4 usuarios-->

			    	<div class="span4">
			    		<table class="table table-bordered">
			    			<tr>
			    				<th>Materia</th>
			    				<th>1er Parcial</th>
			    				<th>2da Parcial</th>
			    				<th>3er Parcial</th>
			    				<th>4ta Parcial</th>
			    			</tr>
			    				<tr>
			    					<td>Espa&ntilde;ol</td>
			    					<td>10</td>
			    					<td>9</td>
			    					<td>8</td>
			    					<td>8</td>
			    				</tr>

			    				<tr>
			    					<td>Matem&aacute;ticas</td>
			    					<td>10</td>
			    					<td>9</td>
			    					<td>8</td>
			    					<td>8</td>
			    				</tr>
			    		</table>
	    		
			    	</div>	<!-- span4 calificaciones-->

			    	<div class="span3">
			    		<table class="table table-bordered">
			    			<tr>
			    				<th>Materia</th>
			    				<th>1er Parcial</th>
			    				<th>2da Parcial</th>
			    				<th>3er Parcial</th>
			    				<th>4ta Parcial</th>
			    			</tr>
			    				<tr>
			    					<td>Espa&ntilde;ol</td>
			    					<td>10</td>
			    					<td>9</td>
			    					<td>8</td>
			    					<td>8</td>
			    				</tr>

			    				<tr>
			    					<td>Matem&aacute;ticas</td>
			    					<td>10</td>
			    					<td>9</td>
			    					<td>8</td>
			    					<td>8</td>
			    				</tr>
			    		</table>
	    		
			    	</div>	<!-- span4 calificaciones-->


				</div>	<!-- Row-->


				<p style="font-weight:bold; margin-top:10px;">Tareas</p>
				<div class="row-fluid">
			    	
			    	<div class="span4">
			    		<table class="table table-bordered" cellpadding=0 cellspacing=10>
			    			<tr>
			    				<th>Nombre</th>
			    				<th>Apellido</th>
			    				<th>Correo</th>
			    				<th>Grupos</th>
			    				<th>Estado del usuario</th>
			    			</tr>
			    			<?php foreach ($users as $user):?>
			    				<tr>
			    					<td><?php echo $user->first_name;?></td>
			    					<td><?php echo $user->last_name;?></td>
			    					<td>Mail</td>
			    					<td>
			    						<?php foreach ($user->groups as $group):?>
			    							<?php echo $group->name;?><br />
			    		                <?php endforeach?>
			    					</td>
			    					<td><?php echo ($user->active) ? anchor("inter/deactivate/".$user->id, 'Activo') : anchor("inter/activate/". $user->id, 'Inactivo');?></td>
			    				</tr>
			    			<?php endforeach;?>
			    		</table>


			    		<p style="padding-left:10px;"><a href="<?php echo site_url('inter/create_user');?>">Crear usuario</a></p>
	    		
			    	</div>	<!-- span4 usuarios-->

			    	<div class="span4">
			    		<table class="table table-bordered">
			    			<tr>
			    				<th>Materia</th>
			    				<th>1er Parcial</th>
			    				<th>2da Parcial</th>
			    				<th>3er Parcial</th>
			    				<th>4ta Parcial</th>
			    			</tr>
			    				<tr>
			    					<td>Espa&ntilde;ol</td>
			    					<td>10</td>
			    					<td>9</td>
			    					<td>8</td>
			    					<td>8</td>
			    				</tr>

			    				<tr>
			    					<td>Matem&aacute;ticas</td>
			    					<td>10</td>
			    					<td>9</td>
			    					<td>8</td>
			    					<td>8</td>
			    				</tr>
			    		</table>
	    		
			    	</div>	<!-- span4 calificaciones-->

				</div>	<!-- Row-->


			</div>		

		
		</div>


		
</div> <!-- id="contenedor"-->
</center>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/modernizr.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
     
    });
</script>
</body>
</html>