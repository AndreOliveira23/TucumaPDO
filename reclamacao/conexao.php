<?php
try{
$conexao = new PDO('mysql:host=localhost;dbname=tucuma_pdo','root','');
}catch(PDOException $e){
    echo "Problemas na conexão com o banco de dados: ".$e->getMessage();
}
?>
