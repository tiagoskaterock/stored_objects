	<?php include 'includes/nav.php' ?>

	<div class="jumbotron p-5 text-center">
		Países
	</div>


	<table class="table">

	  <thead>
	    <tr>
	      <th scope="col">Código</th>
	      <th scope="col">Nome</th>
	      <th scope="col">Capital</th>
	      <th scope="col">Código2</th>
	    </tr>
	  </thead>
		  <tbody>

	<?php 
	
	  $sql = "SELECT * FROM country";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		  	?>
			    <tr>			      
			      <td><?= $row['Code'] ?></td>
			      <td><?= $row['Name'] ?></td>
			      <td><?= $row['Capital'] ?></td>
			      <td><?= $row['Code2'] ?></td>			      
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
		