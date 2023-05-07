<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Garrafa.php';
    $g1 = new Garrafa;
    $g1->cor = "Verde";
    $g1->agua = "cheia";
    $g1->tamanho = 500;
    $g1->desidratado();
    $g1->beber();
    echo '<br/>';
    print_r($g1);

    ?>
</body>
</html>