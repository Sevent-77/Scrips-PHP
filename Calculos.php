<!DOCTYPE html>
<html lang="en">
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculos</title>
    <?php
    function calcular($num1,$num2,$operacao){
    if($operacao=="soma"){
        $result = $num1 + $num2;
    }else if($operacao=="subtracao"){
        $result = $num1 - $num2;
    }else if($operacao=="multiplicacao"){
        $result = $num1 * $num2;
    }else if($operacao=="divisao"){
        $result = $num1 / $num2;
    }else if($operacao=="resto"){
        $result = $num1 % $num2;
    }
    echo("<br>Resultado = ".$result);

}
    
?>
</head>
<body style="padding: 10px;">
    <form class="formulario" action="Calculos.php" method="get">
        <label>Número 1: </label><input type="" name="nota1" value=0>
        <label><br>Número 2: </label><input type="" name="nota2" value=0>
        <br><br>
        <input type="radio" name="operacao" value="soma"><label>Soma </label>
        <input type="radio" name="operacao" value="subtracao"><label>Subtração </label>
        <input type="radio" name="operacao" value="multiplicacao"><label>Multiplicação </label>
        <input type="radio" name="operacao" value="divisao"><label>Divisão </label>
        <input type="radio" name="operacao" value="resto"><label>Resto </label>
        <br><br><input id="enviar" type="submit"><br>
        <?php if (isset($_GET["nota1"]) && isset($_GET["operacao"])) {
        calcular($_GET["nota1"],$_GET["nota2"],$_GET["operacao"]);
    } ?>
    </form>
</body>
</html> 
