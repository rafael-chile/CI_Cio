     <div id="contenido" class="cionet">
            <br/>
            <h1> Cionet </h1>

                <div id="infoMessage"><?php echo $message;?></div>                

                
                <!--
                <form class="form_cionet" name="formulario" action="inter/login" method="post">
                    <div>
                        <label for="identity">Usuario/Email:</label>
                        <input name='identity' type='text' value=''>
                    </div>
                    
                    <div>
                        <label for="password">Contrase&ntilde;a:</label>
                        <input name='password' type='password' value=''>
                    </div>
                         
                        <input type="submit" name="subm" value="Entrar">
                </form>
                -->



                <?php 

                    $attributes = array('class' => 'form_cionet');
                    echo form_open("inter/login",$attributes);

                    ?>
                    
                  <div>
                    <label for="identity">Correo/Usuario:</label>
                    <?php 
                        if(isset($identity)){
                            echo form_input($identity);
                        }
                        else {
                            echo "<input name='identity' type='text' value=''>";
                        }

                    ?>
                  </div>

                  <div>
                    <label for="password">Contrase&ntilde;a:</label>
                    <?php //if(isset($password)){echo form_input($password);}?>

                    <?php 
                        if(isset($password)){
                            echo form_input($password);
                        }
                        else {
                            echo "<input name='password' type='password' value=''>";
                        }

                    ?>
                  </div>

                  <!--<div>
                    <label for="remember">Recordar:</label>
                    <?php //echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                  </div>-->
                    
                    
                <?php echo form_submit('submit', 'Entrar');?>
                    
                <?php echo form_close();?>



                <a class="forgot_link" href="inter/forgot_password">&iquest;Olvid&oacute; su contrase&ntilde;a?</a>
                
        </div>