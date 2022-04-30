<?php

require_once 'backend/backend.php';

$conexao = conectar();

$nomeSecao = $_POST['nomeSecao'];

$descriSecao = $_POST['descriSecao'];

$imagemSecao = uploadImagem('imagemSecao');

$resultado = adicionarSecao ($conexao,$nomeSecao,$descriSecao,$imagemSecao);

if ($resultado) {
    echo "Sucesso na inserção";
    echo "<br> <a href='index.php'>Index</a>";
    echo "<br> <a href='admin.php'>Admin</a>";
}else{
    echo "Sem sucesso na inserção";
    
}


?>