<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $select = $_POST['select'];

    $resultado = 0;
    if($select == '+') {    
        $resultado = $num1 + $num2;
    }
    elseif($select == '-') {
        $resultado = $num1 - $num2;
    }
    elseif($select == 'x') {
        $resultado = $num1 * $num2;
    }
    elseif($select == '/') {
        $resultado = round($num1 / $num2);
    }
    elseif($select == 'resto') {
        $resultado = ceil($num1 % $num2);
    }
    else{
        echo 'Valor indefinido!';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema calculadora</title>
    <link rel="stylesheet" href="./estilo/index.css" type="text/css">
</head>
<body>
    <div class="main">
        <div class="foco">
            <form class="form" method="post">
                <h3>CALCULADORA</h3>
                <label class="label" for="num1"></label>digite um numero:<br>
                <input name="num1" id="input" type="number"><br>
                <select name="select" id="select">
                    <option name="somar" value="+">+</option>
                    <option name="subtrair" value="-">-</option>
                    <option name="multiplicar" value="x">x</option>
                    <option name="dividir" value="/">/</option>
                    <option name="resto" value="resto">resto</option>
                </select>
                <br>
                <label class="label">Digite outro numero:</label><br>
                <input name="num2" id="input" type="number"><br>
                <button name="confirmar">CONFIRMAR</button><br>

                <label class="resultado" name="resultado" for="resultado">RESULTADO = <?php echo $resultado ?></label>
            </form>
            <!-- return do resultado -->
        </div>
    </div>
</body>
</html>