<?php

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$estado = $_POST['estado'];

$conexao = mysqli_connect('localhost','root','','bazar');
$sql = "insert into produtos (produto, preco, categoria, estado) 
    values('$produto', $preco, '$categoria', '$estado')";

echo"cadastrado" ;
$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);

?>
