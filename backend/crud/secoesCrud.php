<?php


function adicionarSecao ($conexao,$nomeSecao,$descriSecao,$imagemSecao) {

    $comando = "INSERT INTO secoes (nomeSecao,descriSecao,imagemSecao) values ('$nomeSecao', '$descriSecao','$imagemSecao')" ;

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;

}

function exibirSecoes ($conexao) {

    $comando = "SELECT * FROM secoes";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}








?>