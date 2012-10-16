<h1>Editar usuario</h1>
<p>Introduzca la informaci&oacute;n del usuario.</p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            Nombre: <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            Apellido: <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            Trabajo: <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            Tel&eacute;fono: <br />
            <?php echo form_input($phone1);?>-<?php echo form_input($phone2);?>-<?php echo form_input($phone3);?>
      </p>

      <p>
            Contrase&ntilde;a: (if changing password)<br />
            <?php echo form_input($password);?>
      </p>

      <p>
            Confirmar Contrase&ntilde;a: (if changing password)<br />
            <?php echo form_input($password_confirm);?>
      </p>


      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', 'Guardar usuario');?></p>

<?php echo form_close();?>