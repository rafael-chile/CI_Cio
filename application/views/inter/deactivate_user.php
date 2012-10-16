<h1>Desactivar usuario</h1>
<p>&iquest;Est&acute; seguro de desactivar este usuario: '<?php echo $user->username; ?>'</p>
	
<?php echo form_open("inter/deactivate/".$user->id);?>

  <p>
  	<label for="confirm">Si:</label>
    <input type="radio" name="confirm" value="yes" checked="checked" />
  	<label for="confirm">No:</label>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php echo form_submit('submit', 'Enviar');?></p>

<?php echo form_close();?>