		<?php 
		if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
		$pagina = $_GET["pagina"];
		include ($pagina);
		}
		else{
		include ('pagina inicial.html');
		}
	?>