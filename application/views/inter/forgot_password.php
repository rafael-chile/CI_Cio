<h1>Recuperar contrase&ntilde;a.</h1>
<p>Introduce tu correo electr&oacute;nico para poder recuperar tu contrase&ntilde;a.</p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("inter/forgot_password");?>

      <p>
      	Correo Electr&oacute;nico: <br />
      	<?php echo form_input($email);?>
      </p>
      
      <p><?php echo form_submit('submit', 'Enviar');?></p>
      
<?php echo form_close();?>