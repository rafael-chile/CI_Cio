<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Colegio CIO de M&eacute;xico</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Add jQuery library -->
	<script type="text/javascript" src="../assets/specific/source_fancy/jquery-1.8.2.min.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../assets/specific/source_fancy/jquery.fancybox.js?v=2.1.1"></script>
	<link rel="stylesheet" type="text/css" href="../assets/specific/source_fancy/jquery.fancybox.css?v=2.1.1" media="screen" />
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="../assets/specific/source_fancy/helpers/jquery.fancybox-media.js?v=1.0.4"></script>

	<script type="text/javascript">
			$(document).ready(function() {
			
				/*$("#fancybox-manual-close").fancybox({
						 'onClosed': function() {
						   //parent.location.reload(true);
						   alert("Cerrando");
						  }
				 });*/

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
	  case 'nuevo_alumno': echo '<p>El alumno ha sido agregado correctamente.</p>';
	  break;
	  case 'nuevo_usuario': echo '<p>El usuario ha sido agregado correctamente.</p>';
	  break;                
	 }

?>

	
	<a id="fancybox-manual-close" href="javascript:;">Close</a>


</body>
</html>