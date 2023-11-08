<?php
    $serie = $_POST['serie'];
    $i = 1;
    while($serie < 10){
        $serie++;
        if ($i == 9){
            echo "Você completa o fundamental esse ano!";
            break;
        } else{
            echo "${i}º ano na escola, faltam ". 9-$serie. " anos para acabar o fundamental! <br>";
            
            $i++;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="serie">Em qual série você começou a frequentar essa escola?</label>
    <input type="number" name="serie">
    <input type="submit" value="Enviar" name="submit">

    </form>
</body>
</html>