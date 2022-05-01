<?php
session_start();
require_once 'backend/backend.php';

$admin_user = $_POST['admin_user'];

$admin_senha = $_POST['admin_senha'];

if ($admin_user == "danilo" && $admin_senha == "danilao") {
    $_SESSION['admin'] = "admin";
    header('Location: http://localhost/treino_projetos/mercadinho_labrunetti/admin.php');
}else{
    echo "Dados inváidos! Tente novamente. <br>";
    echo "<a href='login.php'>Tentar novamente</a>";
}



?>