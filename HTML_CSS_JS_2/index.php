<?php
	include('config.php');
	include('componentes/head.php');
	include('componentes/header.php');

	$pagina = $_GET['pagina'];
	
	include($arrRotas[$pagina]);
	
	include('componentes/footer.php');
?>	