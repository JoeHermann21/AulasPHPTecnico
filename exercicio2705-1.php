<?php
	
	$nome = $_POST['nome'];
	$data = $_POST['data'];
	$hobbie = $_POST['hobbie'];
	
	$converteData = strtotime($data);
	
	echo "Oi, eu sou $nome";
	echo "<br>Nasci em: ".date("d-m-Y", $converteData);
	echo "<br>E gosto de $hobbie";
?>