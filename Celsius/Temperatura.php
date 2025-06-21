<?php 
		$celsius = $_POST['celsius'];
		
		function conversao($celsius)
		{
			return ($celsius*9/5) + 32;
		}
		
		echo "A temperatura de $celsius ºC em ºF é: ".conversao($celsius);
 ?>
