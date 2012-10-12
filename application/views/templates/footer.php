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
					
					
					<script language="JavaScript">
					    //Valida Telefono
					    function validar(e) {
					        tecla = (document.all) ? e.keyCode : e.which;
					        if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
					        patron = /\d/; //Solo acepta números
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
										alert("Debes escribir tu correo electrónico")
										document.checkout.email.focus()
										return 0;}
										else
											{		
												if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
												document.checkout.email.focus();
												document.checkout.submit();
												} else {
												alert("La dirección de correo es incorrecta.");
												document.checkout.email.focus();
												return 0;
												}
											}
									
									//el formulario se envia
										
									}	
					</script>
					
					<?php
				break;
			default:
				echo 'Header de Ninguno';
				break;
		}

	?>
</body>
</html>