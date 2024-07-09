<?php
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];
$num_casa = $_POST['num_casa'];
$bairro = $_POST['bairro'];

$conexao = mysqli_connect('localhost','root','','bazar');
$sql = "insert into clientes (cpf, nome, telefone, rua, num_casa, bairro) 
    values($cpf, '$nome', '$telefone', '$rua', $num_casa,'$bairro')";
echo"cadastrado" ;
$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);

?>
