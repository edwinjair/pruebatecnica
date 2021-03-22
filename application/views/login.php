<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/login.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="container">
    	<div id="img_login">
    		<img src="loginFS.png">
    	</div>
    	<div id="form_login">
    		<div id="img_logo"><img src="logoFS.png"></div>
    		<div id="form_ingreso">
    			<form id="data_login" name="data_login" method="post" action="<?php echo base_url();?>index.php/users/login">
	    			<h1>Iniciar Sesión</h1>
	    			<div id="cont_user">
		    			<b><label>Número de Documento</label></b>
		    			<input type="text" name="user" id="user" required="required">	
	    			</div>
	    			<div id="cont_password">
	    				<b><label>Contraseña</label></b>
	    				<input type="password" name="password" id="password" required="required">	
	    			</div>
	    			<div>
	    				<input type="submit" id="login" name="login" value="Ingresar">	
	    			</div>
	    		</form>
    			<div class="olvide_contraseña">
    				<a href="" id="olvide_contraseña">Olvide mi contraseña</a>
    			</div>
    			<div class="redrilsa">
    				<a href="" id="redrilsa">¿Primera vez en REDRILSA?</a>
    			</div>
    			<div>
    				<a href="<?php echo base_url();?>index.php/registro" id="registro">Registrarse</a>	
    			</div>
    		</div>
    	</div>
    </div>
  </body>
</html>