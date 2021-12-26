<?php
	session_start();
	$_session["nome"] = $_POST["nome"];
	echo "<p>Iniciada a sessão: " . $_session["nome"];

	echo "<p>Olá, " .strtoupper($_POST["nome"]), " " .strtoupper($_POST["sobrenome"]);

	$senhareal= "1234";
	$hash= password_hash($senhareal, PASSWORD_DEFAULT);
	echo "<p>Senha: ".$hash."<p>";

	
	$senha = password_verify($_POST["senha"], $hash);

	if ($senha==1) {
		echo "<p>Usuário autenticado!<p>";

		echo "<p>Informações Nutricionais:<p>";
	$quant= $_POST["quantidade"];
	echo "<p>Porção: ". $quant."g";

	$proteinas= ($quant*10)/100;
	$carboidratos = ($quant*77.9)/100;
	$lipidios= ($quant*1.3)/100;

			if ($_POST["alimento"]=="Tomate/Salada"){
				$Kcal= $quant*18.88;
					echo "<p>Tomate/Salada <p> Calorias: ".$Kcal.
					"Kcal<p>Proteínas: ". $proteinas."g<p>Carboidratos: ".$carboidratos."g<p>Lipídios: ".$lipidios."g<p>" ;
			}else{
				if ($_POST["alimento"]=="Queijo/Ricota"){
					$Kcal= $quant*27.7;
					echo "<p>Queijo/Ricota<p> Calorias: ".$Kcal.
					"Kcal<p>Proteínas: ". $proteinas."g<p>Carboidratos: ".$carboidratos."g<p>Lipídios: ".$lipidios."g<p>" ;
			}else{
				if ($_POST["alimento"]=="Arroz tipo 1"){
					$Kcal= $quant*138.68;
					echo "<p>Arroz tipo 1<p> Calorias: ".$Kcal.
					"Kcal<p>Proteínas: ". $proteinas."g<p>Carboidratos: ".$carboidratos."g<p>Lipídios: ".$lipidios."g<p>" ;
			}else{
				if ($_POST["alimento"]=="Feijão preto"){
					$Kcal= $quant*99.36;
					echo "<p>Feijão preto<p> Calorias: ".$Kcal.
					"Kcal<p>Proteínas: ". $proteinas."g<p>Carboidratos: ".$carboidratos."g<p>Lipídios: ".$lipidios ."g<p>" ;
					}
				}
			}
		}

		$cookie= "Usuario";
		setcookie($cookie, $_POST["nome"], time()+3600);

		if(isset($cookie)){
			echo "<p>Cookie " . $cookie ." com valor ". $_POST["nome"] . " ativo";
		}else{
			echo "Cookie não está ativo";
		}
	}else{
		echo "<p>Senha incorreta!<p>";
	}
?>
