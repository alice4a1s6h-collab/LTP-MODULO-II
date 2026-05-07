<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de escolha</title>
</head>
<body>
    <form method="POST">
        <label>Digite um numero de 1 a 4:</label><br><br>
        <input type="number" name="num" stop="1" required/><br><br>
        <button type="sumit">Responder</button><br><br>
</form>
<?php
$num = $_POST ['num'] ?? 0;
switch ($num){
        case 1:
            echo "Primavera";
             break;
        case 2:
            echo "Verão"
             break;
         case 3:
            echo "Outono";
        case 4:echo "inverno";
             break
        default
            echo "estação invalida";      


}
?>
    
</body>
</html>