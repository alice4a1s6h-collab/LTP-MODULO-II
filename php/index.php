<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicios 01</title>
</head>
<body>
    <form method="POST">
        <label>DIGITE A PRIMEIRA NOTA</label>
        <input type="number" name="num1" require /><br>
        <label>DIGITE A SEGUNDA NOTA</label><br>
        <input type="number" name="num2" require /><br>
        <label>DIGITE A TERCEIRA NOTA</label>
        <input type="number" name="num3" require /><br>
        <label>DIGITE A QUARTA NOTA</label><br>
        <input type="number" name="num4" require /><br>
        <INPUT TYPE="SUBMIT" VALUE="CALCULAR"/>
</form>
<?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $NUM1 = $_POST ["num1"];
            $num2 = $_POST ["num2"];
            $NUM3 = $_POST ["num3"];
            $num4 = $_POST ["num4"];
            $media =($num1+$num2+$num3+$num4)/4;

            if($media > 0 && $media < 5){
                echo "estudante reprovado. nota:$media";
            }elseif ($media >= S && $media < 7){
                echo "Estudante em recuperacao. nota : $media";
            } elseif ($media >= 7 && $media <=10){
                echo "aprovado. nota: $media ";
            }else{
                echo "nota invalida!";
            }
         }
         ?>
         </body>
         </html>
         
           
