<?php
session_start();
if(!isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: logdocente.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen"/>
		<link type="text/css" rel="stylesheet" href="assets/css/styles.css"  media="screen"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  </head>
  <body>
    <div style="width:90%;margin: 0 auto;">
      <div class="card">
				<div class="card-content">
					<span class="card-title">
						Horarios
					</span>
					<p>
        <?php
        include '../conexion.php'; //$conect
        mysqli_query($conect,"SET NAMES 'utf8'");
        $consulta = "SELECT laboratorio.NOMBRE, horario.ID_MATERIA, horario.DIA, horario.HORA_ENTRADA, horario.HORA_SALIDA
        FROM horario
        INNER JOIN laboratorio ON horario.ID_LABORATORIO = laboratorio.ID_LABORATORIO WHERE horario.ID_MAESTRO = '{$_SESSION['user_docente']}'";
        $consulta = mysqli_query($conect, $consulta);
        echo "<table border='1px' class='striped'>
								<thead>
	                <tr>
	                  <td>Laboratorio</td>
	                  <td>Materia</td>
	                  <td>Día</td>
	                  <td>Hora de entrada</td>
	                  <td>Hora de salida</td>
	                </tr>
								</thead>
								<tbody>";
        while ($result = mysqli_fetch_array($consulta, MYSQLI_BOTH)) {
          echo "<tr>
                  <td>".$result[0]."</td>
                  <td>".$result[1]."</td>
                  <td>".$result[2]."</td>
                  <td>".$result[3]."</td>
                  <td>".$result[4]."</td>
                </tr>";
        }
        echo "</tbody>
				</table>";
         ?>
			 </p>
      </div>
			<div class="card-action">
				<a href="crear_horario.php">Añadir un nuevo horario</a>
			</div>
		</div>
    </div>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  </body>
</html>