<h1>Ingresar</h1>
<p>Introduce tu usuario/correo y contrase&ntilde;a.</p>
	
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("inter/login");?>
  	
  <p>
    <label for="identity">Correo/Usuario:</label>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <label for="password">Contrase&ntilde;a:</label>
    <?php echo form_input($password);?>
  </p>

  <p>
    <label for="remember">Recordar:</label>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>
    
    
  <p><?php echo form_submit('submit', 'Ingresar');?></p>
    
<?php echo form_close();?>

<p><a href="forgot_password">&iquest;Olvid&oacute; su contrase&ntilde;a?</a></p>