<?php
include_once('config.php');

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'tel');
$rua = filter_input(INPUT_POST, 'rua');
$numero = filter_input(INPUT_POST, 'numero');
$estado = filter_input(INPUT_POST, 'estado');


$result = mysqli_query($conexao, "INSERT INTO 	pessoas(nome,email,telefone)
 VALUES ('$nome','$email','$telefone')");

$result2 = mysqli_query($conexao, "INSERT INTO estado(rua,numero,estado)
 VALUES ('$rua','$numero','$estado')");

echo 'Nome:'.$nome."<br/>";
echo 'E-mail:'.$email."<br/>";
echo 'Telefone:'.$telefone."<br/>";
echo 'Rua:'.$rua."<br/>";
echo 'Numero da casa:'.$numero."<br/>";
echo 'Estado:'.$estado."<br/>";
echo 'Os dados foram inseridos no banco com sucesso!';

?>