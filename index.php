<!DOCTYPE html>
<html>
<head>
	<title>Hello Pizza</title>
	<link rel="stylesheet" href="css/stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		include 'cabecalho.php';
	?>

	<section>
		<div id="sabores-pizzas">
			<h2>Conheça nossos sabores de exclusivos de pizza</h2>
			<!--
				alt -> Exibe o texto caso a imagem não for carregada
				width -> Largura
				heigth -> Altura

				<figure>
	    			<figcaption>Monte Everest</figcaption>
	    			<img src="img/img3.jpg" />
				</figure>
		
				tr -> linhas
				th -> colunas
				rowspan ="qtd de linhas" -> expande a as linhas de acordo o valo
			-->
			<table>
				<tr>
					<th>Pizza</th>
					<th>Queijo e Molho</th>
					<th>Salada</th>
					<th>Carne</th>
					<th>Azeite/Champignon</th>
				</tr>
				<tr>
					<td>Mozzarella</td>
					<td rowspan="6" class="texto-positivo">Sim</td>
					<td class="texto-negativo">Não</td>
					<td class="texto-negativo">Não</td>
					<td class="texto-negativo">Não</td>
				</tr>
				<tr>
	                <td>Calabresa</td>
	                <td class="texto-negativo">Não</td>
	                <td class="texto-positivo">Sim</td>
	                <td class="texto-positivo">Sim</td>
	            </tr>
	            <tr>
	                <td>Pepperoni</td>
	                <td class="texto-negativo">Não</td>
	                <td class="texto-positivo">Sim</td>
	                <td class="texto-positivo">Sim</td>
	            </tr>
	            <tr>
	                <td>Marguerita</td>
	                <td class="texto-positivo">Sim</td>
	                <td class="texto-positivo">Sim</td>
	                <td class="texto-positivo">Sim</td>
	            </tr>
	            <tr>
	                <td>Portuguesa</td>
	                <td class="texto-positivo">Sim</td>
	                <td class="texto-positivo">Sim</td>
	                <td class="texto-positivo">Sim</td>
	            </tr>
	            <tr>
	                <td>Alho</td>
	                <td class="texto-negativo">Não</td>
	                <td class="texto-negativo">Não</td>
	                <td class="texto-negativo">Não</td>
	            </tr>
			</table>
		</div>
	</section>

	<?php
		include 'rodape.php';
	?>
</body>
</html>