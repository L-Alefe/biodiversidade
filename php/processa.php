<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	
	for($i=1;$i<6;$i++){
		$q{$i} = $_POST["q{$i}"];
		if($q{$i} == "sim"){

			//echo "Você clicou sim";
			$sql = "SELECT sim FROM lemuel_ntect391.ano1 WHERE id={$i};";
			$puxarSim = $conexao->getCon()->prepare($sql);
			$puxarSim->execute();
			$dados = $puxarSim->fetch(PDO::FETCH_OBJ);
			$dadoAtual = $dados->sim+1;


			$sql1 = "UPDATE lemuel_ntect391.ano1 SET sim=? WHERE id={$i};";
			$comando = $conexao->getCon()->prepare($sql1);
			$comando->bindParam(1, $dadoAtual);
			$comando->execute();


		}else if($q{$i} == "nao"){


			$sql = "SELECT nao FROM lemuel_ntect391.ano1 WHERE id={$i};";
			$puxarNao = $conexao->getCon()->prepare($sql);
			$puxarNao->execute();
			$dados = $puxarNao->fetch(PDO::FETCH_OBJ);
			$dadoAtual = $dados->nao+1;


			$sql1 = "UPDATE lemuel_ntect391.ano1 SET nao=? WHERE id={$i};";
			$comando = $conexao->getCon()->prepare($sql1);
			$comando->bindParam(1, $dadoAtual);
			$comando->execute();


		}else if($q{$i} == "naoLembro"){


			$sql = "SELECT naoLembro FROM lemuel_ntect391.ano1 WHERE id={$i};";
			$puxarNaoLembro = $conexao->getCon()->prepare($sql);
			$puxarNaoLembro->execute();
			$dados = $puxarNaoLembro->fetch(PDO::FETCH_OBJ);
			$dadoAtual = $dados->naoLembro+1;


			$sql1 = "UPDATE lemuel_ntect391.ano1 SET naoLembro=? WHERE id={$i};";
			$comando = $conexao->getCon()->prepare($sql1);
			$comando->bindParam(1, $dadoAtual);
			$comando->execute();


		}
	}
?>
<script>
	alert("Você terminou! Avise ao aluno de 3° ano.");
	window.setTimeout("location.href='voltarIndex.php';");
</script>
