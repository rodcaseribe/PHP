<html>
	<head>
		<meta http-equiv="Content-Type" content="text/hmtl; charset=UTF-8">	
	</head>
	
	<body>
			<div align="center"><table border="1">

			<tr>
        			<td >nome:<br></br></td>
			</tr>

	<?php

		$nomes = array("Alexandre","Maria","Roberto","Joana","Samira","Roberval");
		foreach($nomes as $nome):		
			echo '<tr>'.'<td>'.$nome.'</td>'.'</tr>';
		endforeach;
	?>

			</table></div>
	</body>
</html>
