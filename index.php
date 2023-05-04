<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Caneta OO</title>
</head>
<body>
    <pre>
    <?php

require_once 'Caneta.php';

    /* EXEMPLO */
    $c = new Caneta();
    $c2 = new Caneta();

    /* Caneta 1 */
    $c->status();

    /* Caneta 2 */
    
    $c2->cor("Vermelha");
    $c2->Modelo("Faber");
    $c2->ponta(1.0);
    $c2->carga(50);
    $c2->tampar();
    $c2->status();
?>
    </pre>
</body>
</html>