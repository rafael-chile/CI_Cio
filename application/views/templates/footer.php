		<div id="footer">
			<span><font color="##001330">Colegio CIO de M&eacute;xico</font></span><br/>
			<span><font color="#fff">Tzinal #203. Col: H&eacute;roes de Padierna Tlalpan. Tel.: 56 45 20 15 / 56 44 32 77. Fax: 56 45 20 15.</font></span>
			<span><a style="text-decoration:blink; color:#DFF2F8;" href="contacto">Contacte con nosotros!</a></span>
		</div>


</div> <!-- id="contenedor"-->
</center>
<script src="assets/js/_bootstrap.min.js"></script>
<script src="assets/js/_modernizr.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
     
    });
</script>
<?php 

		switch ($title) {
			case 'Inicio':
					?>
					
					<?php
				break;
			case 'Conocenos':
					?>
					
					<!-- -->    
					    

					<?php
				break;
			case 'Kinder':
					?>
					
					<!-- -->  
					
					<?php
				break;
			case 'Primaria':
					?>
					
					<!-- --> 
					
					<?php
				break;
			case 'Cionet':
					?>
					
					<!-- --> 
					
					
					<?php
				break;
			case 'Contacto':
					?>
					
					
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
					
					<?php
				break;
			default:
				echo 'Header de Ninguno';
				break;
		}

	?>
</body>
</html>