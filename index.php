<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Pesquisa com alunos PP</title>
		<link rel="icon" href="imgs/a.png" type="image/x-icon" />
		<meta name="description" content="curso de bootstrap 3">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styleGeral.css" rel="stylesheet">
	</head>
	<body>
		<div id="apresentacao">
			<center>
				<span class="badge" id="tituloApresentacao">Biodiversidade</span>
			</center>
		</div>
		<br />
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="negrito">Olá aluno PP! <span id="coracao" class="glyphicon glyphicon-heart"></span></h3>
					</div>
					<div class="panel-body">
						<p class="text-justify texto">A <a>turma de 3° ano do curso técnico em Informática </a>da E.E.E.P Paulo Petrola, realiza esta pesquisa com a vossa turma com o objetivo de coletar dados sobre o vosso conhecimento em biodiversidade no nosso ambito escolar. Pedimos a vossa colaboração para responderem os questionamentos a seguir com toda a sinceridade. <span class="glyphicon glyphicon-thumbs-up"></span></p>
					</div>
				</div>
				<img src="imgs/a.png" class="img-responsive center-block" width="400px;" />
				<br />
				<button type="button" class="btn btn-success negrito" data-toggle="modal" data-target="#exampleModal">Leia mais <span class="glyphicon glyphicon-comment" style="font-size: 15px;"></span></button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
			  			<div class="modal-content">
					       	        <div class="modal-header">
								<h2 class="negrito">O trabalho por completo!</h2>
					      		</div>
					      	<div class="modal-body">
						<p class="texto text-justify">Na disciplina de Projeto Interdisciplinar, lecionada pela professora de português Edilene Araújo, um trabalho para apresentação no formato de feira científica foi passado. A equipe com o tema "Biodiversidade na E.E.E.P. Paulo Petrola" teve aproximadamente 3 meses para a realização do trabalho. Foi dividida com os seguintes temas:</p>
						<br />
						<ul class="list-group">
							  <li class="list-group-item">Amostra e Pesquisa de animais</li>
							  <li class="list-group-item">Amostra e Pesquisa de plantas</li>
							  <li class="list-group-item active">Pesquisa científica e gráficos</li>
						</ul>
						<br />
						<p class="texto text-justify">Cada esquipe está cumprindo devidamente com a sua responsabilidade. E nós, da sub equipe "Pesquisa científica e gráficos", grifada acima em azul, também estamos cumprindo. <span class="glyphicon glyphicon-paperclip" style="font-size: 15px;"></span></p>
					</div>
				     	<div class="modal-footer">
						<button type="button" class="btn btn-danger negrito" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
					<br /><br /><br />
					<span class="badge texto" style="background-color: #222;">Agora responda:</span>
					<br /><br /><br />
					<form action="php/processa.php" method="post" name="questionario">
						<span class="badge texto" style="background-color: #e53935;">1º</span>
						<label for="q1" class="texto">Você conhece o nome científico de algum animal presente dentro do território escolar?</label>
						<br />
						<br />
						<input type="radio" name="q1" value="sim"> Sim<br />
						<input type="radio" name="q1" value="nao"> Não<br />
						<input type="radio" name="q1" value="naoLembro"> Não lembro<br /><br /><br />

						<span class="badge texto" style="background-color: #0288d1;">2º</span>
						<label for="q2" class="texto">Você já presenciou algum animal peçonhento na escola?</label>
						<br />
						<br />
						<input type="radio" name="q2" value="sim"> Sim<br />
						<input type="radio" name="q2" value="nao"> Não<br />
						<input type="radio" name="q2" value="naoLembro"> Não lembro<br /><br /><br />

						<span class="badge texto" style="background-color: #ffc400;">3º</span>
						<label for="q3" class="texto">Você já escutou relatos de seus amigos sobre algum ataque de animais peçonhentos na escola?</label>
						<br />
						<br />
						<input type="radio" name="q3" value="sim"> Sim<br />
						<input type="radio" name="q3" value="nao"> Não<br />
						<input type="radio" name="q3" value="naoLembro"> Não lembro<br /><br /><br />
	
						<span class="badge texto badge-secondary">4º</span>
						<label for="q4" class="texto">Saberia descrever todos os animais visto por você dentro do território escolar?</label>
						<br />
						<br />
						<input type="radio" name="q4" value="sim"> Sim<br />
						<input type="radio" name="q4" value="nao"> Não<br />
						<input type="radio" name="q4" value="naoLembro"> Não lembro<br /><br /><br />

						<span class="badge texto" style="background-color: #ec407a;">5º</span>
						<label for="q5" class="texto">Você sabe o porquê dos pombos abitarem o território escolar?</label>
						<br />
						<br />
						<input type="radio" name="q5" value="sim"> Sim<br />
						<input type="radio" name="q5" value="nao"> Não<br />
						<input type="radio" name="q5" value="naoLembro"> Não lembro<br /><br /><br />
				
						<input type="submit" style="background-color: #795548; color: #fff;" class="btn negrito">
					</form>
				<br />
				<br />
				<p class="texto negrito"><i>Agradeçemos! <span id="coracao" class="glyphicon glyphicon-heart" style="font-size: 15px;"></span></i></p>
			</div>
			<div id="rodape">
				<p class="texto negrito">Após o envio, retorne à sala! <span class="glyphicon glyphicon-repeat" style="font-size: 15px;"></span></p>
			</div>
	</body>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>
