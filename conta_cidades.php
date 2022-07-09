<?php include 'includes/nav.php' ?>


	<div class="jumbotron p-5 text-center">
		Cidades por País
	</div>

	<table class="table">

	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Código do País</th>
	    </tr>
	  </thead>
		  <tbody>

	<?php 
	
	  $sql = "SELECT * FROM conta_cidades_dos_paises";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

		  while($row = $result->fetch_assoc()) {
		  	?>
			    <tr>			      
			      <td><?= $row['COUNT(ID)'] ?></td>
			      <td><?= $row['CountryCode'] ?></td>
			    </tr>
		  	<?php
		  }
		}    	
	
	?>

		</tbody>
	</table>

</div>

<footer>
	
</footer>

</body>
</html>
		