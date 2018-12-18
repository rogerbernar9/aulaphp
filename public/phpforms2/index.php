<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')    {
    echo 'Formulario enviado via POST '.$_POST['nome'];
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoet" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Documento</title>

</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="nome" >
        <input type="text" name="sobrenome" >
        <input type="submit" value="Enviar">
    </form>

    <a href="/?name=Osama">Nome</a>
    <p>O <?php echo $_GET['name']; ?> clicou no link acima</p>
</body>

</html>
