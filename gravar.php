<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$data=$_POST['data'];
include "config.php";
$gravar=$conn->prepare('INSERT INTO 
`cadastro` (`id_cad`, `nome_cad`, 
`email_cad`, `data_cad`, `status_cad`)
VALUES (NULL, :nome, :email, :data, 1);');
$gravar->bindValue(":nome",$nome);
$gravar->bindValue(":email",$email);
$gravar->bindValue(":data",$data);
$gravar->execute();
echo "Gravado com sucesso!";
?>
<br/><a href="index.php">Voltar</a>