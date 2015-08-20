<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body></body></html>


<br><h3>COde1</h3><br><br></br>
<?php

$nomes = array(1=>"alexandre", 2=>"maria", 3=>"roberta", 4=>"robson", 5=>"roberval");
$nomes[6] = "joao";
$nomes[7] = "james_bonde";


foreach($nomes as $k=>$v):
	echo $k."=>".$v."</br>";
endforeach;




?>

<br><h3>COde2</h3><br><br></br>
<?php

$nomes = array(1=>"alexandre", 2=>"maria", 3=>"roberta", 4=>"robson", 5=>"roberval");
$nomes[6] = "joao";
$nomes[7] = "james_bonde";

$chaves = array_keys($nomes);

print_r($chaves);

//foreach($nomes as $k=>$v):
	//echo $k."=>".$v."</br>";
//endforeach;

?>

<br><br><h3>COde3</h3><br>
<?php

$nomes = array(1=>"alexandre", 2=>"maria", 3=>"roberta", 4=>"robson", 5=>"roberval");
$nomes[6] = "joao";
$nomes[7] = "james_bonde";

$chaves = array_keys($nomes);


foreach($chaves as $chave):
	echo $chave."</br>";
endforeach;

?>


<br><br><h3>COde3</h3><br>
<?php

$nomes = array(1=>"alexandre", 2=>"maria", 3=>"roberta", 4=>"robson", 5=>"roberval");
$nomes[6] = "joao";
$nomes[7] = "james_bonde";

$chaves = array_keys($nomes);
$valor = 9; //nao existe o valor no array

if(array_key_exists($valor, $nomes)):
	echo "existe o valor ".$valor;
else:
	echo "não existe o valor ".$valor;
endif;

//foreach($chaves as $chave):
	//echo $chave."</br>";
//endforeach;

?>
