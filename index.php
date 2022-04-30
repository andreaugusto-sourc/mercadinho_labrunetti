<?php
require_once 'backend/backend.php';

$conexao = conectar();

$resultado = exibirSecoes($conexao);

?>

<?php include 'header.php' ?>

<div class="container">

<?php while($linha = mysqli_fetch_assoc($resultado)) : ?>
    
<div class="produto">
<img src="images/<?= $linha['imagemSecao']?>"> 
<a><?= $linha['nomeSecao']?> </a>
<a><?= $linha['descriSecao']?> </a>

</div>


<?php endwhile ?>

</div>


<?php include 'footer.php' ?>
