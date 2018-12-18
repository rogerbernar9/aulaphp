<?php
$servidor = "db";
$usuario = "root";
$pass = "rootPass";
$db = "app";

@$mysqli = mysqli_connect($servidor, $usuario, $pass, $db);

if(!$mysqli)    {
    echo "error: falha ao conectar-se com o bd mysql<br/>";
    echo "debugging error:<br/>". mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "select * from usuario";

foreach($query = $mysqli-> query($sql) as $user)    {
    echo "<br/>name :  " .$user['nome']."<br/>";
}


//if($query = $mysqli->query($sql))
//   {
    //$res = $query->fetch_all(MYSQLI_BOTH);
    //var_dump($res);
    //echo "email : ".$res[0]["email"];
    //echo " -  EMAIL ".$res[0][2];

    /*foreach ($user as $value) {
        echo "name: ".$value["name"]."<br/>";
    }*/

    //$user = $query->fetch_array();
    //var_dump($user);
    //echo "name: <br/>" .$user["nome"]." <br/>";

    /*while($user = $query->fetch_array(MYSQLI_ASSOC))    {
        echo "nome: ".$user["nome"]."<br>";
    }*/

//    $user = $query->fetch_object();
//    var_dump($user);
//    while($user = $query-> fetch_object())     {
//        echo "name: ".$user->name." <br/>";
//    }
//



//}




mysqli_close($mysqli);

