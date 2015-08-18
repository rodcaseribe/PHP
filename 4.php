<?php
	if(isset($_POST['enviar'])):// IF ELSE padrao , se botao enviar for pressionado print o nome por POST
		echo $_POST['nome'];
	endif;
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/hmtl; charset=UTF-8">	
	</head>
	
	<body>
			<table border="1">
			<form action="" method="POST">
			
				<tr>
        				<td >nome:<br></br></td>
					<td><input type="text" name="nome"/></td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" name="enviar" value="ok"></td>
				</tr>

				<tr>
					<td colspan="2"><?php
						if(isset($_POST['enviar'])):
							echo $_POST['nome'];
						endif;
						?></td>
				</tr>
				<tr>
					<td colspan="2"><?php
						$variavel1 = $_POST['nome'];
						echo '<div style="background-color:red">'.$variavel1.'</div>';
						?></td>
				</tr>

			</form>
	

			</table>
	</body>
</html>
