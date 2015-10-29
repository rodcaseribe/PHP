<html>
<head>
</head>
<body>
<form action="" method="post" align="center" >

<h2>Digite seu nome:</h2>
<input type="text" name="NOME" >

<h2>Digite seu sobrenome:</h2>
<input type="text" name="SOBRENOME" ></input>

<h2>Digite seu email:</h2>
<input type="text" name="EMAIL" ></input>

<br>
<br>
<br>
<input  type="submit" name="btnsubmit">

</form>
</body>
</html>

<?php
if(isset($_POST['btnsubmit'])){
$variavel_NOME = isset($_POST['NOME']);
$variavel_SOBRENOME =  isset($_POST['SOBRENOME']);
$variavel_EMAIL =  isset($_POST['EMAIL']);
echo "Seu nome ".$variavel_NOME."<br>";
echo "Seu sobrenome ".$variavel_SOBRENOME."<br>";
echo "Seu email ".$variavel_EMAIL;

}
?>

<?php
$to = "rodolfo2804@hotmail.com";
$subject = "$variavel_NOME";
$message = "<strong>".$variavel_SOBRENOME."</strong>";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $variavel_EMAIL\n";
mail($to,$subject,$message,$header);
echo "mensagem enviada";
?>
