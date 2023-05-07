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
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco(); //jubileu
        $p2 = new ContaBanco(); //creuza
        
        $p1->abrirConta("CC");
        $p1->setNumConta(1111);
        $p1->setNome("Jublieu");
        
        $p2->abrirConta("CP");
        $p2->setNumConta(2222);
        $p2->setNome("Creuza");

        $p1->depositar(300); //esquecer essas coisas é mt facil, sempre revise antes de dormir
        $p2->depositar(500);

       // $p2->sacar(1000);//creuza sacar dinheiro, mais doq tem

        $p1->mensalidade();
        $p2->mensalidade();

        $p1->sacar(338);
        $p2->sacar(630);

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);
        ?>
    </pre>
</body>
</html>