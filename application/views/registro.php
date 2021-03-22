<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Registro</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/registro.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="container">
    	<div id="img_login">
    		<img src="loginFS.png">
    	</div>
    	<div id="form_registro">
    		<div id="img_logo"><img src="logoFS.png"></div>
    		<div id="form_rellenar">
                <form id="reg_user" name="reg_user" method="post" action="<?php echo base_url();?>index.php/users/registrar">
        			<h1>Registrarse</h1>
        			<div class="div_input">
    	    			<b><label>Nacionalidad</label></b>
    	    			<select name="nacionalidad" id="nacionalidad">
                            <?php foreach ($nacionalidades as $item): ?>
                                <option value="<?php echo $item['id'] ?>"><?php echo $item['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
        			</div>
        			<div class="div_input">
        				<b><label>Tipo de documento</label></b>
        				<select name="tipo_documento" id="tipo_documento">
                            <?php foreach ($tipo_documentos as $item): ?>
                                <option value="<?php echo $item['id'] ?>"><?php echo $item['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
        			</div>
        			<div class="div_input">
                        <b><label>Número de documento</label></b>
        				<input type="text" name="numero_documento" id="numero_documento" required="required">
        			</div>
        			<div class="div_input">
                        <b><label>Nombres</label></b>
        				<input type="text" name="nombres" id="nombres" required="required">
        			</div>
        			<div class="div_input">
                        <b><label>Apellido Paterno</label></b>
        				<input type="text" name="apellido_paterno" id="apellido_paterno" required="required">
        			</div>
                    <div class="div_input">
                        <b><label>Apellido Materno</label></b>
                        <input type="text" name="apellido_materno" id="apellido_materno" required="required">
                    </div>
                    <div class="div_input">
                        <b><label>Contraseña</label></b>
                        <input type="text" name="contraseña" id="contraseña" required="required">
                    </div>
                    <div class="div_input">
                        <b><label>Confirmar Contraseña</label></b>
                        <input type="text" name="conf_contraseña" id="conf_contraseña" required="required">
                    </div>
                    <div class="div_checked">
                        <input type="checkbox" name="check_acepto" id="check_acepto" required="required">
                        <b><label>Acepto los terminos y condiciones</label></b>
                    </div>
        			<div class="submit_registro">
        				<input type="submit" id="registro" name="registro" value="Registrarme">	
        			</div>
                    <div class="volver_login">
                        <a href="" id="volver_login">Ingresar</a>
                    </div>
                </form>
    		</div>
    	</div>
    </div>
  </body>
</html>