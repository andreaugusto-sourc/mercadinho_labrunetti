<?php include 'header.php' ?>

<div class="container">

<form class="form" method="POST" action="salvarSecao.php" enctype="multipart/form-data">

<label for="nomeSecao">Nome da Seção: </label>
<input type="text" id="nomeSecao" name="nomeSecao">

<label for="descriSecao">Descrição da Seção: </label>
<input type="text" id="descriSecao" name="descriSecao">

<label for="imagemSecao">Imagem da Seção: </label>
<input type="file" id="imagemSecao" name="imagemSecao">

<input type="submit" class="botao" value="Criar">

</form>


</div>

<?php include 'footer.php' ?>
