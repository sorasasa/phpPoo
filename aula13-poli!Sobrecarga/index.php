<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <pre>
        <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        $c = new Cachorro();
        /*$c->reagirDono(true);
        $c->reagirDono(false);*/
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);

        ?>
    </pre>
</h1>
</body>
</html>