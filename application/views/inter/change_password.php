<h1>Actualizar Contrase&ntilde;a</h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("inter/change_password");?>

      <p>Contrase&ntilde;a anterior:<br />
      <?php echo form_input($old_password);?>
      </p>
      
      <p>Nueva Contrase&ntilde;a (por lo menos <?php echo $min_password_length;?> caracteres):<br />
      <?php echo form_input($new_password);?>
      </p>
      
      <p>Confirmar nueva Contrase&ntilde;a: <br />
      <?php echo form_input($new_password_confirm);?>
      </p>
      
      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', 'Cambiar');?></p>
      
<?php echo form_close();?>
