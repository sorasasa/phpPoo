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
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $L = array();
        $L[0] = new Lutador("Pretty boy", "França", 31, 1.75, 68.9, 11, 3, 1);
//nome,nacionalidade,idade,altura,peso,vitorias,derrotas,empates
        $L[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

        $L[2]= new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

        $L[3] = new Lutador("Deadcode", "Australia", 28, 1.93, 81.6, 13, 0, 12);

        $L[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 113.3, 5, 4, 3);
       
        $L[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($L[4], $L[5]);
        $UEC01->lutar();
        //$L[0]->status();
        //$L[1]->status();
        
        ?>
    </pre>
</body>
</html>