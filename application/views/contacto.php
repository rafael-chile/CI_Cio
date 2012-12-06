<?
if (1==1/*!$HTTP_POST_VARS*/){
?>

<?
}else{
	//Estoy recibiendo el formulario, compongo el cuerpo
	$cuerpo = "Formulario enviado desde colegiociodemexico.edu.mx\n\n";
	$cuerpo .= "Nombre: " . $HTTP_POST_VARS["nombre"] . "\n";
	$cuerpo .= "Apellido: " . $HTTP_POST_VARS["apellido"] . "\n";
	$cuerpo .= "Telefono: " . $HTTP_POST_VARS["telefono"] . "\n";
	$cuerpo .= "Correo Electronico: " . $HTTP_POST_VARS["email"] . "\n";
	$cuerpo .= "Comentarios: " . $HTTP_POST_VARS["coment"] . "\n";

	//mando el correo..
	
		 // Se monta la cabecera del mensaje.
		 $mcorreo = "contacto@colegiociodemexico.edu.mx";
		 $cabeceras = "From:<$mcorreo>\n";
		 // $cabeceras .= "Reply-To:$mcorreo \n";
		 $cabeceras .= "MIME-version: 1.0\n";
		 $destino = "rafael_chile@hotmail.com, ingjorgetalavera@colegiociodemexico.edu.mx, conjuncion3@gmail.com";
		 $morigen = "Colegio Cio Contacto/Cliente";
	
	mail($destino,$morigen,$cuerpo,$cabeceras);

	//doy las gracias por el env�o
	echo "\n\n\nGracias por contactarnos.";
	include('correo_envia.php');			
}
?>

<html>
<head>
<title>Colegio CIO de M&eacute;xico ::: Cionet :::</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
<link type="text/css" rel="stylesheet" href="assets/specific/sty.css">



<style type="text/css">
	.contacto{
        width:500px;
        height: 300px;
    }

    .contacto label{
		float: left;
     }
    
    .contacto div{
        margin-bottom: 10px
	}
    
    #footer {
			font:14px/1.6 Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
			font-family:Verdana, Arial, Helvetica, sans-serif;
			height:80px;
		}
</style>
</head>
<body class="cionet">

<center>
	<div id="contenedor">
        
		<div id="header">
			
			<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon" />
			<div style="background-image:url(<?php echo base_url().'assets/';?>imagenes/Maquetacion_01.jpg); 
			width:895px; 
			height:103px; 
			text-align:right; 
			color:#3C0; 
			font-weight:bold; 
			font-size:19px; 
			font-family:Verdana !important" >

			"Donde los niños disfrutan aprender" &nbsp;&nbsp;</div>              
			<div id="menu_ppal"> 
			        <table id="menu" width="895" height="40" border="0" cellpadding="0" cellspacing="0">
			            <tr>                           
			                <td><a href="inicio" onMouseOver="btn1.src='<?php echo base_url().'assets/';?>imagenes/menu_ppal_01.jpg'"; onMouseOut="btn1.src='<?php echo base_url().'assets/';?>imagenes/Maquetacion_02.jpg'">
			                <img src="<?php echo base_url().'assets/';?>imagenes/Maquetacion_02.jpg" alt="" name="btn1" border="0"></a></td>
			                
			                <td><a href="conocenos" onMouseOver="btn2.src='<?php echo base_url().'assets/';?>imagenes/menu_ppal_02.jpg'"; onMouseOut="btn2.src='<?php echo base_url().'assets/';?>imagenes/Maquetacion_03.jpg'">
			                <img src="<?php echo base_url().'assets/';?>imagenes/Maquetacion_03.jpg" alt="" name="btn2" border="0"></a></td>
			                
			                <td><a href="kinder" onMouseOver="btn3.src='<?php echo base_url().'assets/';?>imagenes/menu_ppal_03.jpg'"; onMouseOut="btn3.src='<?php echo base_url().'assets/';?>imagenes/Maquetacion_04.jpg'">
			                <img src="<?php echo base_url().'assets/';?>imagenes/Maquetacion_04.jpg" alt="" name="btn3" border="0"></a></td>
			                
			                <td><a href="primaria" onMouseOver="btn4.src='<?php echo base_url().'assets/';?>imagenes/menu_ppal_04.jpg'"; onMouseOut="btn4.src='<?php echo base_url().'assets/';?>imagenes/Maquetacion_05.jpg'">
			                <img src="<?php echo base_url().'assets/';?>imagenes/Maquetacion_05.jpg" alt="" name="btn4" border="0"></a></td>
			                
			                <td><a href="cionet" onMouseOver="btn5.src='<?php echo base_url().'assets/';?>imagenes/menu_ppal_05.jpg'"; onMouseOut="btn5.src='<?php echo base_url().'assets/';?>imagenes/Maquetacion_06.jpg'">
			                <img src="<?php echo base_url().'assets/';?>imagenes/Maquetacion_06.jpg" alt="" name="btn5" border="0"></a></td>
			                
			                <td><a href="contacto" onMouseOver="btn6.src='<?php echo base_url().'assets/';?>imagenes/menu_ppal_06.jpg'"; onMouseOut="btn6.src='<?php echo base_url().'assets/';?>imagenes/Maquetacion_07.jpg'">
			                <img src="<?php echo base_url().'assets/';?>imagenes/Maquetacion_07.jpg" alt="" name="btn6" border="0"></a></td>
			                
			                <td><img src="<?php echo base_url().'assets/';?>imagenes/Maquetacion_08.jpg" alt="" name="btn7" border="0"></td>
			            </tr>
			        </table>           
			</div>


        </div>
        
        <div id="contenido">
            <br/>

                
        <form class="contacto" method="post" enctype="application/x-www-form-urlencoded" action="contacto" name="checkout" id="checkout" onSubmit="_gaq.push(['_linkByPost', this]);" >
            <div><label>Nombre:</label><input name="nombre" type='text' value=''></div>
            <div><label>Apellido:</label><input name="apellido" type='text' value=''></div>
            <div><label>Tel&eacute;fono:</label><input name="telefono" type='text' value=''></div>
            <div><label>Correo Electr&oacute;nico: </label><input name="email" type='text' value=''></div>
            <div><label>Comentarios: </label><input name="coment" type='text' value=''></div>
            <input type="submit" name="subm" value="Enviar" onClick="valida_envia(this.form.email.value);">
        </form>
          
             <p style="text-align:right; margin-right:60px; font-size:18px; font-weight:bold;"><a class="fancybox-media" style="color:red" href="http://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=+Tzinal+12+Jardines+del+Ajusco,+Tlalpan,+14200+Coyac%C3%A1n,+D.F&amp;aq=&amp;sll=23.554132,-102.6205&amp;sspn=38.466735,77.475586&amp;ie=UTF8&amp;hq=&amp;hnear=Tzinal+12,+Jardines+del+Ajusco,+Tlalpan,+Coyac%C3%A1n,+Distrito+Federal&amp;t=m&amp;view=map&amp;ll=19.285626,-99.217615&amp;spn=0.048609,0.068579&amp;z=14&amp;iwloc=A&amp;output=embed">VER MAPA</a></p>                  

        </div>
        <div id="footer" class="foot">
          	
        	<div id="footer">
				<span>
					<font color="##001330">Colegio CIO de M&eacute;xico</font></span><br/>
				<span>
					<font color="#fff">Tzinal #203. Col: H&eacute;roes de Padierna Tlalpan. Tel.: 56 45 20 15 / 56 44 32 77. Fax: 56 45 20 15.</font></span>
				<span>
					<a style="text-decoration:blink; color:#DFF2F8;" href="contacto">Contacte con nosotros!</a></span>
			</div>



        </div>
        
</div>

</center>

 <!--LightBox empieza -->    
        <!-- Add jQuery library -->
        <script type="text/javascript" src="assets/specific/source_fancy/jquery-1.8.2.min.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="assets/specific/source_fancy/jquery.fancybox.js?v=2.1.1"></script>
        <link rel="stylesheet" type="text/css" href="assets/specific/source_fancy/jquery.fancybox.css?v=2.1.1" media="screen" />
        <!-- Add Media helper (this is optional) -->
        <script type="text/javascript" src="assets/specific/source_fancy/helpers/jquery.fancybox-media.js?v=1.0.4"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                /*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
    <!--LightBox termina -->    

<script src="inter/js/bootstrap.min.js"></script>
<script language="JavaScript">
    //Valida Telefono
    function validar(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
        patron = /\d/; //Solo acepta n�meros
        te = String.fromCharCode(tecla);
        return patron.test(te); 
    } 

	function valida_envia(correo){
			
				//valido el nombre
				if (document.checkout.nombre.value.length==0){
					alert("Debes escribir tu Nombre.")
					document.checkout.nombre.focus()
					return 0;
				}

				// revisa apellido
				if (document.checkout.apellido.value.length==0){
					alert ( "Debes escribir tu Apellido." );
					document.checkout.apellido.focus()
					return 0;
				}
				
				// revisa Empresa
				if (document.checkout.empresa.value.length==0){
					alert ( "Debes escribir el nombre de tu Empresa." );
					document.checkout.empresa.focus()
					return 0;
				}
				
				//valido el correo electronico
				if (correo.length==0){
					alert("Debes escribir tu correo electr�nico")
					document.checkout.email.focus()
					return 0;}
					else
						{		
							if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
							document.checkout.email.focus();
							document.checkout.submit();
							} else {
							alert("La direcci�n de correo es incorrecta.");
							document.checkout.email.focus();
							return 0;
							}
						}
				
				//el formulario se envia
					
				}	
</script>
<!--<script src="inter/js/modernizr.js"></script>-->

</body>
</html>