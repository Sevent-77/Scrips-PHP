<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculos</title>
    <link rel="stylesheet" href="style.css">
    <?php
    function calcular($p,$h){
        if($h>3){
            $h = $h/100;}
        $r = $p/($h*$h);

        Echo "<br>IMC: ".number_format($r,2,',','.').'<br>';
            if($r<18.5){
                Echo "Resultdo: Magreza I";
            }else if($r>18.5 && $r<24.9){
                Echo "Resultdo: Normal";
            }else if($r<29.9 && $r > 25){
                Echo "Resultdo: Sobrepeso I";
            }else if($r<34.5 && $r > 30){
                Echo "Resultdo: Obesidade grau I";
            }else if($r<39.9 && $r > 35){
                Echo "Resultdo: Obesidade grau II";
            }else if($r>40){
                Echo "Resultdo: Obesidade grau III";
            }
        }
    
?>
</head>
<body style="padding: 10px;">
    <h2>IMC</h2>
    <form class="formulario" action="IMC.php" method="get">
        <Label>Peso: <input required placeholder="Digite seu Peso" type="text" name="Peso" ></Label><br><br>
        <Label>Altura: <input required placeholder="Digite sua altura" type="text" name="Altura" "></Label><br>
        <br><br><input id="enviar" type="submit"><br>
        <?php if (isset($_GET["Peso"]) && isset($_GET["Altura"])) {
        calcular($_GET["Peso"],$_GET["Altura"]);
    } ?>
    </form>
</body>
</html> 
