<html>
	<head>
		<meta http-equiv="Content-Type" content="text/hmtl; charset=UTF-8">	
	</head>
	
	<body>
			<table border="1">

			<tr>
        			<td align="center">nome:<br></br></td>
			</tr>

	<?php

		$nomes = array("Alexandre","Maria","Roberto");
		foreach($nomes as $nome):		
	?>

			<tr>
        			<td><?php echo $nome; ?></td>
			</tr>


	<?php
	endforeach;
	?>

			</table>
	</body>
</html>
