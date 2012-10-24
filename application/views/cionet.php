     <div id="contenido" class="cionet">
            <br/>
            <h1> Cionet </h1>

                <div id="infoMessage"><?php echo $message;?></div>

                <!--<form class="form_cionet" name="formulario" action="auth/login" method="post">-->
                <form class="form_cionet" name="formulario" action="inter/login" method="post">
                    <div><label for="identity">Usuario/Email:</label>
                        <input name='identity' type='text' value=''></div>
                    <div><label for="password">Contrase&ntilde;a:</label>
                        <input name='password' type='password' value=''></div>
                         
                        <input type="submit" name="subm" value="Entrar">
                </form>

                <a class="forgot_link" href="inter/forgot_password">&iquest;Olvidó su contrase&ntilde;a?</a>
                
        </div>