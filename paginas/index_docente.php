<?php
session_start();
if(!isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: logdocente.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!doctype html>
<html lang="es">
	<head>
		<title>AdmiLab</title>

		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen"/>
		<link type="text/css" rel="stylesheet" href="assets/css/styles.css"  media="screen"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/animate.min.css" rel="stylesheet" />
		<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	</head>

	<body>
		<div class="wrapper">
			<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

	         <div class="sidebar-wrapper">
	               <div class="logo">
	                   <a href="#Home" class="simple-text">
	                       AdmiLab
	                   </a>
	               </div>

	               <ul class="nav">
									 <li>
										 <a onclick="menuselect(1);" class="waves-effect menubtn waves-light">
											 <i class="pe-7s-home"></i>
											 <p>Inicio</p>
										 </a>
									 </li>

									 <li>
										 <a onclick="menuselect(2);" class="waves-effect menubtn waves-light">
											 <i class="pe-7s-clock"></i>
											 <p>Horario</p>
										 </a>
									 </li>

									 <li>
										 <a onclick="menuselect(3);" class="waves-effect menubtn waves-light">
											 <i class="pe-7s-note2"></i>
											 <p>Prácticas</p>
										 </a>
									 </li>

									 <li>
										 <a onclick="menuselect(4);" class="waves-effect menubtn waves-light">
											 <i class="pe-7s-user" ></i>
											 <p>Usuario</p>
										 </a>
									 </li>
	                   <li>
	                       <a href="#notifications">
	                           <i class="pe-7s-bell"></i>
	                           <p>Notificaciones</p>
	                       </a>
	                   </li>
	           					<li class="active-pro">
	                       <a href="#config">
	                           <i class="pe-7s-config"></i>
	                           <p>Configuración</p>
	                       </a>
	                   </li>
	               </ul>
	         </div>
	       </div>

			<div class="main-panel">
				<nav class="navbar navbar-default navbar-fixed">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand material-icons large top_icon">insert_chart</a>
							<a class="navbar-brand" href="#"> Panel</a>
						</div>
					</div>
				</nav>

				<div class="content">
					<div class="container-fluid">
						<div class="row">
								<div class="preloader-wrapper small active" style="position:absolute; left:50%; top:50%;">
							    <div class="spinner-layer spinner-blue-only">
							      <div class="circle-clipper left">
							        <div class="circle"></div>
							      </div><div class="gap-patch">
							        <div class="circle"></div>
							      </div><div class="circle-clipper right">
							        <div class="circle"></div>
							      </div>
							    </div>
							  </div>
							<iframe class="framei" src="" width="100%" height="800px" frameborder="0"></iframe>
						</div>
					</div>
				</div>


				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul>
								<li>
									<a href="#">
	                    AdmiLab
	                </a>
								</li>

							</ul>
						</nav>

						<p class="copyright pull-right">
							&copy;
							<script>
								document.write(new Date().getFullYear())
							</script> xdxdxdxdxd
						</p>
					</div>
				</footer>

			</div>
		</div>

		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
		<script src="assets/js/chartist.min.js"></script>
		<script src="assets/js/bootstrap-notify.js"></script>
		<script src="assets/js/mijs.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="assets/js/light-bootstrap-dashboard.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	</body>
</html>