<form action="gravar.php" method="post">
    <input type="text" name="nome" 
    placeholder="Entre com o nome"/><br/>
    <input type="email" name="email" 
    placeholder="Entre com o e-mail"/><br/>
    <input type="date" name="data"/><br/>
    <input type="submit" value="Gravar"/>
</form>
<hr/>
<?php
include "config.php";
$exibe=$conn->prepare('SELECT * FROM `cadastro` WHERE `status_cad`=1;');
$exibe->execute();
if($exibe->rowCount()==0){
    echo "Não há registros";
}else{
    while($row=$exibe->fetch()){
        echo $row['nome_cad']." | ".
        $row['email_cad']." | ".
        date("d/m/Y", strtotime($row['data_cad']));
        echo "<br/>";
    }
}
?>