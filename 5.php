<?php
$nome1 = "Rodolfo";
echo $nome1;
echo "<br>";				//Variáveis
$nome2 = "Joao";
echo $nome2;
?>

<br><br><br>
<?php
	$nome = "roberta";
	$$nome = "samanta";		//Passagem de Variável
	echo $roberta;
	echo '<br>'.$nome.' '.$roberta;  
?>

<br><br><br>
<?php
	$var1 = "numero1";

	function exibeNome(){		//Função com variável global
		global $var1;		//-->
		echo '<br>'.$var1;
	}

	exibeNome();
?>

<br><br><br>
<?php
	

	function exibeNome2(){		//Função com variável local
		$var2 = "numero2";	//-->
		echo '<br>'.$var2;
	}

	exibeNome2();
?>


<br><br><br>
<?php
	
	
	function exibeNome3(){
		$var3 = "Roberval";		//Função local com if else
		if($var3 == "Roberval"):
			echo "Meu nome eh".$var3;
			
		else:
			echo "Nome invalido";
		endif;
	}

	exibeNome3();
?>


<?php
	$inteiro =5.65;
	if(is_int($inteiro)):					// if com inteiro
		echo "<br></br>"."O numero ".$inteiro." eh um inteiro";
	else:
		echo "<br></br>"."O numero ".$inteiro." nao eh um inteiro";
	endif;
?>


<?php
	$flutuante =5.65;
	if(is_float($flutuante)):					// if com inteiro
		echo "<br></br>"."O numero ".$inteiro." eh um flutuante"."<br></br>";

	else:
		echo "<br></br>"."O numero ".$inteiro." nao eh um flutuante"."<br></br>";
	endif;
	var_dump($flutuante);  //imprimir_tudo
?>


<?php
	$escrito = "roberval vai se ferra";
	if(is_string($escrito)):					// if com inteiro
		echo "<br></br>"."A palavra ".$escrito." eh uma string"."<br></br>";
	else:
		echo "<br></br>"."A palavra ".$escrito." nao eh um uma string"."<br></br>";
	endif;
var_dump($escrito);
?>


<?php
	define("NOME", "Rodolfo");
	define("SOBRENOME", "Casemiro");
	echo "<br></br>".NOME." ".SOBRENOME;
?>
