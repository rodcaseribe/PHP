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
$variavel_NOME = $_POST['NOME'];
$variavel_SOBRENOME =  $_POST['SOBRENOME'];
$variavel_EMAIL =  $_POST['EMAIL'];
echo "Seu nome ".$variavel_NOME."<br>";
echo "Seu sobrenome ".$variavel_SOBRENOME."<br>";
echo "Seu email ".$variavel_EMAIL;
}
?>
