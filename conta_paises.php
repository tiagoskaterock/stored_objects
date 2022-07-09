	<?php include 'includes/nav.php' ?>

	<div class="jumbotron p-5 text-center">
		Total de Países
	</div>

	<div class="text-center">
	<?php 
	
	  $sql = "call conta_paises()";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

		  while($row = $result->fetch_assoc()) {
		  	?>
		  	<h2><?= $row['total'] ?></h2>
		  	<?php
		  }
		}    	
	
	?>

</div>

<footer>
	
</footer>

</body>
</html>
		