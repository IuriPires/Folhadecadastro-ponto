<?php 
require_once "conectar.php";
		$query1 = mysqli_num_rows(mysqli_query($con,"SELECT * FROM folha.pessoa WHERE MATRICULA = '456683'"));
		

var_dump($query1);
		if ($query1 == 1){
			echo "<script>alert('Usuario ja Existente!');</script>";
			exit;
		}	else{
				echo "<script>alert('Usuario Cadastrado com Sucesso!');</script>";
				
	
	}
?>