<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')    {
    $idade = (int)$_POST['idade'];
    //var_dump($idade);

    if($idade < 18) {
        die('Voce é muito jovem para o que este script determinaria');
    }
 
    $idade_string = (string) $idade;
    var_dump($idade_string, $idade);
    echo 'Ok, sua idade é '.$idade;
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
    <form action="index3.php" method="post">
        <input type="text" name="idade" placeholder="idade">
        <input type="submit" value="Enviar"><br/><br/>
    </form>

</body>

</html>
