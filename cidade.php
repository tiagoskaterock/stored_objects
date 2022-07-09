	<?php include 'includes/nav.php' ?>

	<div class="jumbotron p-5 text-center">
		Cidades
	</div>


	<table class="table">

	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Nome</th>
	      <th scope="col">Código do País</th>
	      <th scope="col">Distrito</th>
	      <th scope="col">Info</th>
	      <th scope="col">Ação</th>
	    </tr>
	  </thead>
		  <tbody>

	<?php 
	
	  $sql = "SELECT * FROM city";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

		  while($row = $result->fetch_assoc()) {
		  	?>
			    <tr>			      
			      <td><?= $row['ID'] ?></td>
			      <td><?= $row['Name'] ?></td>
			      <td><?= $row['CountryCode'] ?></td>
			      <td><?= $row['District'] ?></td>
			      <td><?= $row['Info'] ?></td>
			      <td>
			      	<a href="exclui_cidade.php?id=<?= $row['ID'] ?>" class="btn btn-danger">Excluir</a>
			      </td>
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
		