<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/stylesheet.css">
	<title>Formulário</title>
</head>
<body>
	<header>
		<?php
			include 'cabecalho.php';
		?>
	</header>
	<form action="#" method="POST">
		<fieldset>
			<legend>Dados pessoais</legend>
			<div class="linha">
				<label for="nome" placeholder="Ex: Denis">Nome:</label>
				<input type="text" name="nome" id="nome" placeholder="Ex: Denis" />
			</div>
			<div class="linha">
				<label for="telefone">Telefone:</label>
				<input type="text" name="telefone" id="telefone" placeholder="Ex: (11) 99999-9999" pattern="\([0-9]){2}\)[\s][0-9]{5}-[0-9]{4}" />
			</div>
			<div id="sexo">
				<label for="">Sexo:</label>
				<input type="radio" value="masculino" name="sexo" checked>
				<label for="">Masculino</label>
				<input type="radio" value="feminino" name="sexo">
				<label for="">Feminino</label>
			</div>
			<div class="linha">
				<label for="dataNascimento">Data de nascimento:</label>
				<input type="date" name="dataNascimento" id="dataNascimento">
			</div>
		</fieldset>
		
		<fieldset>
			<legend>Endereço</legend>
			<div class="linha">
				<label for="rua">Rua:</label>
				<input type="text" name="rua" id="rua" />
			</div>
			<div class="linha">
				<label for="complemento">Complemento:</label>
				<input type="text" name="complemento" id="complemento" />
			</div>
			<div class="linha">
				<label for="numero">Número:</label>
				<input type="number" name="numero" id="numero" min="1" max="9999">
			</div>
			<div class="linha">
				<label for="cidade">Cidade:</label>
				<input type="text" name="cidade" id="cidade" />
			</div>

			<div class="linha">
				<label for="estado">Estado:</label>
				<select name="estado" id="estado">
					<option value="SP">São Paulo</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="MG">Minas Gerais</option>
				</select>
			</div>
		</fieldset>

		<fieldset>
			<legend>Anúncio</legend>
			<div class="linha">
				<label for="comoConheceu">Como nos conheceu?</label>
				<textarea name="comoConheceu" id="comoConheceu" rows="10" maxlength="256" placeholder="Digite aqui..."></textarea>
			</div>
			<div>
				<input type="checkbox" name="receberInformacoes" id="receberInformacoes" checked>
				<label for="receberInformacoes">Desejo receber informações por e-mail</label>
			</div>
		</fieldset>

		<div id="btn">
		<input class="btn" type="submit" value="Enviar" />
		<a class="btn" href="index.html">Voltar</a>
		</div>
	</form>

	<?php
			include 'rodape.php';
		?>
</body>
</html>