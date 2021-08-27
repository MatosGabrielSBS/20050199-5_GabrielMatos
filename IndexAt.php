<?php
	include('Dados.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<style>
	.Titulo{
	width: 1334px;
	background-color:#F7EDDE
	height:125px;
	margin: 0px;
	text-align:center;
	display:inline-block;
}
#Img1{
	width:89px;
	float:left;
	padding-left:0px;
	padding-bottom:5px; 		
	padding-top:5px;
	display:inline-block;
}
#img2{
	width:110px;
	padding-bottom:5px;
	padding-top:5px;
	padding-right:0px;
	float:right;
	display:inline-block;
			}
#textoT{
	text-align:center;
	display:inline-block;
	font-family:Garamond;
	font-size:55px;
}	
#navlist{
	display: inline;
	list-style-type: none;
	padding-right: 20px;
	
}
aside{
	width:2000px;
	background-color:#E3B5B6
}
.sabores{
	width:150px;
	float:right;
	border: 1px solid #A63D40;
	list-style-type:none;
	text-align:left;
	padding-top:0px;
	padding-left:0px;
	margin-top:5px;
	height:470px;
}
.texto1{
	margin-top:5px;
	margin-right:0px;
	width: 1172px;
	height:460px;
	text-align:left;
	padding:5px;
	background-color:#EAD2AC;
	
}
.Rodape{
	width: 1332px;
	height:100px;
	border: 1px solid #B3001B;
	background-color:#E1BC29;
	
}
#navegacao{
	width: 1310px;
	border: 2px solid #E83151;
	background-color:#F5A3B1;
	text-align:center;
	padding:5px;
	
}
#navlism{
	display: inline;
	list-style-type: none;
	padding-right: 25px;
	font-family:Calibri;
	font-size:20px;
}
body{
	background-color:#F7EDDE;
	width:1334px;
	margin:0px;
}
#texteA{
	font-size:25px;
	text-align:left;
	font-family:cambria;
}	
	
#textodpe{
	font-family:Didot;
	font-size:20px;
	
}
#texben{
font-size:25px;
}	
	
#texbenh{
	font-family:Helvética;
	font-size:40px;
}

#Img3{
	width:420px;
	display:block;
	margin-left: auto;
    margin-right: auto
}	
#img4{
	width:700px;
	margin-left;10px;
	float:left;
	margin-right:10px;
	margin-top:auto;
	margin-bottom:auto;
}
.TituloS{
	text-align:center;
	font-size:40px;
}

.IndS{
	margin-left:10px;
	font-family:arial;
	font-size:10px;
	
}

#liS{
	list-style-type:none;
	font-family:arial;
	font-size:20px;
}
.TexS{
	font-family:arial;
	font-size:20px;
}

#img5{
	width:700px;
	margin-left;10px;
	float:left;
	margin-right:10px;
	margin-top:auto;
	margin-bottom:auto;
}

#img6{
	width:400px;
	margin-left;10px;
	float:left;
	margin-right:10px;
	margin-top:auto;
	margin-bottom:auto;
}

#TextNS{
	font-family:Helvética;
	font-size:45px;
}

#textpNS{
	font-size:15px;
}
#listNS{
	padding-right: 15px;
	font-family:Calibri;
	font-size:15px;
	margin-left:200px;
	list-style-type: none;

#img7{
	width:700px;
	margin-left;10px;
	float:left;
	margin-right:10px;
	margin-top:auto;
	margin-bottom:auto;	
	display:block;
}
#contatoS{
	font-family:Calibri;
	font-size:25px;
}
	</style>
		<meta charset="utf-8">
		<title>Cuques Vovó Elfrida</title>
	</head>
	<body>
		<header class="Titulo">
			<img src="brasao_familia.jpg" id="Img1"><h1 id="textoT">Cuques Vovó Elfrida</h1><img src="Topp.jpg" id="img2">
		</header>
		
		
		
		<div id="navegacao">
				<ul id="navlist">
					<li id="navlism"><a href="IndexAt.php">Home</a></li>
					<li id="navlism"><a href="IndexAt.php?pagina=QuemSomos.php"><?=$menu[0];?></a></li>
					<li id="navlism"><a href="IndexAt.php?pagina=Localizacao.php"><?=$menu[1];?></li>
					<li id="navlism"><a href="IndexAt.php?pagina=Contato.php"><?=$menu[2];?></a></li>
				</ul>
		</div>
		
		
		<aside class="sabores">
			<ul id="saboresT">
					<li><p= id="texteA">Sabores:</p></li>	
					<li id="navlism"><a href="IndexAt.php?pagina=Uva.php"><p><?=$produtos['Uva']['Sabor'];?></p></a></li>
					<li id="navlism"><a href="IndexAt.php?pagina=Banana.php"><p><?=$produtos['Banana']['Sabor'];?></a></li>
					<li id="navlism"><a href="IndexAt.php?pagina=Morango.php"><p><?=$produtos['Morango']['Sabor'];?></a></li>
			</ul>
		</aside>
		<section class="ConteudoV">
		<div class="texto1">
		<?php 
		if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
		$pagina = $_GET["pagina"];
		include ($pagina);
		}
		else{
		include ('pagina inicial.html');
		}
	?>
		</div>
		</section>
		<footer class="Rodape">
			<b><p id="textodpe"> <?=$dadosAcademicos['Title'];?>:</p></b>
			<p id="textodpe"><?=$dadosAcademicos['Nome'];?> | <?=$dadosAcademicos['Curso'];?> | <?=$dadosAcademicos['Disciplina'];?> | <?=$dadosAcademicos['Polo'];?> | <?=$dadosAcademicos['RA'];?></>
		</footer>
	</body>
</html>
