<?php

session_start();

ob_start();

include 'conecta.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];	
}

$sql = "DELETE FROM city WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record $id deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$_SESSION['delete'] = "Registro excluído com sucesso";

header("Location: .");


// echo 'delete from aluno where id=(select MAX(id) from aluno);';