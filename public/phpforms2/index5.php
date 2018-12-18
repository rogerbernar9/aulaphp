<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')    {
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);
    //var_dump($nome);
    //var_dump($idade);


    $data = filter_input_array(INPUT_POST);
    //var_dump($data);


    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Documento</title>

</head>
<body>
    <form action="index5.php" method="post">
        <input type="text" name="nome" >
        <input type="text" name="idade">

        <input type="submit" value="Enviar"><br/><br/>

    </form>

</body>

</html>
