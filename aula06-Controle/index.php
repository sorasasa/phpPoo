<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
    <?php
    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    //as funçoes dele
    $c->ligar();
    $c->maisVolume(); //ordem dos fatores
    $c->menosVolume();
    $c->ligarMudo();
    $c->play();
    $c->desligarMudo();
    $c->abrirMenu();
    $c->fecharMenu();
    $c->pause();
    $c->desligar();
    

    ?>
    </pre>
</body>
</html>