<?php 
require_once "conectar.php";
$id = $_GET['id'];

$exluir = mysqli_query($con," delete from folha.pessoa where id_pessoa = $id");

//var_dump ($pesq);

echo "<script>alert('Usuario Excluido com Sucesso!');;window.location = 'http://localhost/folha/editar2.php';</script>";

?>