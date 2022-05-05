<?php
/* $num1=1;
$num2=2;
$num3=2;
$num4=1;
$num5=4;

function suma5($n1, $n2, $n3, $n4, $n5){
    $suma =$n1+$n2+$n3+$n4+$n5;
    return $suma;
    }

$resultado = suma5 ($num1,$num2,$num3,$num4,$num5);

echo '<h1>Suma de 5 números</h1>';
echo '<h2>La suma de los números num1:'.$num1.' num2:'.$num2. ' num3:'.$num3.' num4:'.$num4.' num5:'.$num5.'</h2>';
echo '<h2>El resultado es:'. $resultado.'</h2>'; */
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <form name="envia_frm" action="envia.php" method="get"> <br>
        <input type="text" name="num1"><br>
        <label>Num2</label> <input type="text" name="num2"><br>
        <label>Num3</label> <input type="text" name="num3"><br>
        <label>Num4</label> <input type="text" name="num4"><br>
        <label>Num5</label> <input type="text" name="num5"><br>
        <input type="submit" name="manda_btn">
     </form>
     
 </body>
 </html>
