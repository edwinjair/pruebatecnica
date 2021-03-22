<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Consulta Usuarios</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/index.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div id="div_tabla">
        <div id="img_logo"><img src="../logoFS.png"></div>
      	<table border="1">
          <caption>Usuarios</caption>
          <tr>
            <th>Nombres</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nacionalidad</th>
            <th>Tipo de Documento</th>
            <th>Número de Documento</th>
          </tr>
          <?php foreach ($consulta as $usuario): ?>
            <tr>
              <td><?php echo $usuario->nombres; ?></td>
              <td><?php echo $usuario->apellido_paterno; ?></td>
              <td><?php echo $usuario->apellido_materno; ?></td>
              <td><?php echo $usuario->nacionalidad; ?></td>
              <td><?php echo $usuario->tipo_documento; ?></td>
              <td><?php echo $usuario->numero_documento; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </body>
</html>