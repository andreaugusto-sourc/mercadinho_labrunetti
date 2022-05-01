<?php
session_start();
require_once 'backend/backend.php';

$conexao = conectar();

?>
<?php include 'header.php' ?>

<div class="container">

<?php if (isset($_SESSION['admin'])) {

}else{
    header('Location: http://localhost/treino_projetos/mercadinho_labrunetti/login.php');
} ?>

</div>

<?php include 'footer.php' ?>
