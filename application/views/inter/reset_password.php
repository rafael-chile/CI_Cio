<h1>Cambiar Contrase&ntilde;a</h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('inter/reset_password/' . $code);?>
      
	<p>
		Nueva contrase&ntilde;a (por lo menos <?php echo $min_password_length;?> caracteres): <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		Confirmar nueva contrase&ntilde;a: <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', 'Cambiar');?></p>
      
<?php echo form_close();?>