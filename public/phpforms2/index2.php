<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')    {
    var_dump($_POST['idade']);
    var_dump($_FILES);
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
    <form action="index2.php" method="post" enctype="multpart/form-data">
        <input type="text" name="nome" ><br/><br/>
        <input type="email" name="email" ><br/><br/>
        <input type="color" name="color" ><br/><br/>
        <input type="date" name="date" ><br/><br/>
        <input type="datetime" name="datetime" ><br/><br/>
        <input type="file" name="file" ><br/><br/>
        <input type="number" name="number" ><br/><br/>

        <input type="radio" name="radio" value="valor 1"><br/><br/>
        <input type="radio" name="radio" value="valor 2"><br/><br/>
        <input type="radio" name="radio" value="valor 3"><br/><br/>
        <input type="checkbox" name="radio" value="checked" id=""><br/><br/>

        <input type="submit" value="Enviar"><br/><br/>
    </form>

</body>

</html>
