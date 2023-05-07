<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Caneta.php';

    $c1 = new Caneta("bic","azul",0.5);
    $c2 = new Caneta("kk",'branco',1);
    print_r($c1);
    print_r($c2);


    /*
    $c1->setModelo('BIC'); //parametros foram passados 
    //$c1->modelo ='NIC'; //Modelo é publico, por isso esse funciona
    $c1->setPonta(0.5);
    //$c1->ponta = 0.4; isso vai dar erro porq Ponta é privado

    echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"; //
    */
    ?>
    </pre>
</body>
</html>