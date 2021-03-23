<?php
    if(isset($_GET["manda_btn"])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        $num4 = $_GET["num4"];
        $num5 = $_GET["num5"];
    }

    echo 'hsdgkjhsdgkjhsdfg num1:'.$num1.'<br>';
    echo 'num2:'.$num2.'<br>';
    echo 'num3:'.$num3.'<br>';
    echo 'num4:'.$num4.'<br>';
    echo 'num5:'.$num5.'<br>';

    function suma5($n1, $n2, $n3, $n4, $n5){
        $suma =$n1+$n2+$n3+$n4+$n5;
        return $suma;
        }
    
    $resultado = suma5 ($num1,$num2,$num3,$num4,$num5);
    
    echo '<h1>Suma de 5 números es:'. $resultado.'</h2>';
?>
