<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Colegio CIO de M&eacute;xico</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url().'assets/specific/source_fancy/jquery-1.8.2.min.js';?>"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url().'assets/specific/source_fancy/jquery.fancybox.js?v=2.1.1';?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/specific/source_fancy/jquery.fancybox.css?v=2.1.1';?>" media="screen" />
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url().'assets/specific/source_fancy/helpers/jquery.fancybox-media.js?v=1.0.4';?>"></script>

	<script type="text/javascript">
			$(document).ready(function() {
			
				$("#fancybox-manual-close").click(function() {
								parent.location.reload(true);
								parent.$.fancybox.close();

				});

			});
			
		</script>

</head>
<body>
	
<?php 

	switch($action)
	 {
	  case 'nuevo_alumno': 			
	  						echo '<p>El alumno ha sido agregado correctamente.</p>';
	  						break;
	  case 'nuevo_usuario': 		
	  						echo '<p>El usuario ha sido agregado correctamente.</p>';
	  						break;                
	  case 'alumno_eliminado': 		
	  						echo '<p>El alumno ha sido eliminado.</p>';
	  						break; 
	  case 'alumno_no_eliminado': 	
	  						echo '<p>El alumno NO se ha sido eliminado.</p>';
	  						break; 
	  case 'actualizado_alumno': 	
	  						echo '<p>Los datos del alumno han sido actualizados.</p>';
	  						break;
	  case 'usuario_editado': 	
	  						echo '<p>El usuario ha sido actualizado.</p>';
	  						break;
	  case 'nuevo_circular': 	
	  						echo '<p>Se agreg&oacute; una nueva circular.</p>';
	  						break; 
	 }

?>
	
	<!--<a id="<?php //echo $id_anchor;?>" href="javascript:;">Close</a>-->
	<a id="fancybox-manual-close" href="javascript:;">Close</a>
	
	


</body>
</html>