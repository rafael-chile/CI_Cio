<h1>Crear nuevo usuario</h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("inter/create_user");?>

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
            Correo Electr&oacute;nico: <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            Tel&eacute;fono: <br />
            <?php echo form_input($phone1);?>-<?php echo form_input($phone2);?>-<?php echo form_input($phone3);?>
      </p>

      <p>
            Contrase&ntilde;a: <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            Confirmar contrase&ntilde;a: <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', 'Crear usuario');?></p>

<?php echo form_close();?>