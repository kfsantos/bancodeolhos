<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php");

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Banco de Olhos</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/exemplo.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="container"><!-- inicio  -->
					<div class="row">
						<div role="main" class="col-md-12"> 
							<div class="col-lg-12">   <br>                             
								<a href="https://www.linkedin.com/in/kfsantos" target="blank"><img class="img-responsive " src="./topo.png" height="50" width="300"></a>
							</div>
							<div role="main" class="col-md-12"> 
								<div class="infDat" style="text-align:right"><?php include_once "data.inc.php"; ?></div>          
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
		<div class="principal">
		<?php require_once ("menu-principal.php"); ?>
		<?php  mostraAlerta("success"); ?>
		<?php mostraAlerta("danger"); ?>