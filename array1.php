<br><h3>COde 1</h3></br><br></br>
<br>

<?php

$nomes = array("alexandre", "maria", "roberta", "robson");
foreach($nomes as $n):
	echo $n."<br/>";
	
endforeach;

?>	
<br>
<br><h3>COde 2</h3></br><br></br>

<?php

$nomes = array("alexandre", "maria", "roberta", "robson");
print_r($nomes); 


?>	

<br>
<br><h3>COde 3</h3><br><br></br>

<?php

$nomes = array("alexandre", "maria", "roberta", "robson");
foreach($nomes as $n):
	print ($n."<br/>");
	
endforeach;


?>	
<br>
<br><h3>COde4</h3><br><br></br>

<?php

$nomes = array(1=>"alexandre", 2=>"maria", 3=>"roberta", 4=>"robson", 5=>"roberval");
$nomes[6] = "joao";
$nomes[7] = "james_bonde";

foreach($nomes as $n):
	print ($n."<br/>");
	
endforeach;


?>

<br><h3>COde5</h3><br><br></br>




<?php

$nomes = array('nome1'=>"alexandre", 'nome2'=>"maria", 'nome3'=>"roberta", 'nome4'=>"robson", 'nome5'=>"roberval");
//$nomes[6] = "joao";
//$nomes[7] = "james_bonde";


	print_r($nomes);


?>

<br><h3>COde6</h3><br><br></br>
<?php

$nomes = array(1=>"alexandre", 2=>"maria", 3=>"roberta", 4=>"robson", 5=>"roberval");
$nomes[6] = "joao";
$nomes[7] = "james_bonde";


$contador = count($nomes);

for($i=1;$i<$contador;$i++):
	echo $nomes[$i]."</br>";
endfor;




?>

