<?php
if (1==1/*!$HTTP_POST_VARS*/){
?>

<?php
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
	
	//mail($destino,$morigen,$cuerpo,$cabeceras);

	//doy las gracias por el envío
	echo "\n\n\nGracias por contactarnos.";
	//include('correo_envia.php');			
}
?>
    <div id="contenido" class="contactos">
        
        <br/>
        <h1> Contacto </h1>
                
        <form class="contacto" method="post" enctype="application/x-www-form-urlencoded" action="contacto" name="checkout" id="checkout" onSubmit="_gaq.push(['_linkByPost', this]);" >
            <div><label>Nombre:</label><input name="nombre" type='text' value=''></div><div class="clearboth"></div>
            <div><label>Apellido:</label><input name="apellido" type='text' value=''></div><div class="clearboth"></div>
            <div><label>Tel&eacute;fono:</label><input name="telefono" type='text' value=''></div><div class="clearboth"></div>
            <div><label>Correo Electr&oacute;nico: </label><input name="email" type='text' value=''></div><div class="clearboth"></div>
            <div><label>Comentarios: </label><input name="coment" type='text' value=''></div><div class="clearboth"></div>
            <input type="submit" name="subm" value="Enviar" onClick="valida_envia(this.form.email.value);">
        </form>
                
                                
    </div>
    