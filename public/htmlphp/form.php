<?php
require_once "IConn.php";
require_once "Conn.php";
require_once "IPessoa.php";
require_once "Pessoa.php";
require_once "ServicePessoa.php";

//conexão com o banco
$db = new Conn("db","app","root","rootPass");
$pessoa = new Pessoa();

//instância o serviço e salva
$servicePessoa = new ServicePessoa($db, $pessoa);
$id = empty($_GET['id']) ? "":$_GET['id'];
$nome = empty($_GET['nome']) ? "":$_GET['nome'];
$email = empty($_GET['email']) ? "":$_GET['email'];
$idade = empty($_GET['idade']) ? "":$_GET['idade'];
$telefone = empty($_GET['telefone']) ? "":$_GET['telefone'];
$mensagem = empty($_GET['mensagem']) ? "":$_GET['mensagem'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>CRUD PHP COM PDO</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form action="salva.php" method="post" >
<input type="hidden" name="id" value="<?= $id; ?>"/>

    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $nome; ?>" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?= $email; ?>" />
    </div>
    <div>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" min="1" max="120" value="<?= $idade; ?>">
    </div>
    <div>
        <label for="fone">Telefone:</label>
        <input type="text" id="fone" name="fone" value="<?= $telefone; ?>" />
    </div>
    <div>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" ><?= $mensagem; ?></textarea>
        
    </div>
    <div>
        <input type="submit" id="btnSubmt" class="btn" value="Enviar"/>
        <input type="reset" id="btnReset" class="btn" value="Resetar"/>
    </div>


    <div>
        <br/>
        <br/>
    <?php
    echo    "<table style='width:110%;border: 1px solid #CCC;'>";
    echo    "<tr>";
    echo    "<th>Nome</th>";
    echo    "<th>E-mail</th>";
    echo    "<th>Idade</th>";
    echo    "<th>Tel</th>";
    echo    "<th>Ação</th>";
    echo    "</tr>";
    $lista = $servicePessoa->list();

    foreach($lista as $item)   {
        echo "<tr>";
        echo "<td>".$item['nome']."</td>";
        echo "<td>".$item['email']."</td>";
        echo "<td>".$item['idade']."</td>";
        echo "<td>".$item['telefone']."</td>";
        echo "<td><a href='delete.php?id=".$item['id']."' onclick='if(confirm(\"Deseja remover este item ?\"))return true;return false'><img src='excluir16.png' alt='excluir'></a> <a href='modify.php?id=".$item['id']."'><img src='editar16.png' alt='editar'></a></td>";
        echo "</tr>";

    }

    echo    "</table>";
    ?>
    </div>
</form>
</body>
</html>