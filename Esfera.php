<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculos de esfera</title>
    <?php
    const PI = 3.141592;
    function Area($raio){
    $result = 4*PI*($raio**2);
    echo("<br>Área = ".number_format($result,4,",",".")." U²");
    }
    function Volume($raio){
        $result = 4/3*PI*($raio**3);
        echo("<br>Volume = ".number_format($result,4,",",".")." U³");
        }
    
?>
</head>
<body style="padding: 10px;">
    <form class="formulario" action="Esfera.php" method="get">
        <label>Raio: </label><input type="" name="Raio" value=0>
        <br><br><input id="enviar" type="submit"><br>
        <?php if (isset($_GET["Raio"])){
        Area($_GET["Raio"]);} ?>
        <br>
        <?php if (isset($_GET["Raio"])){
        Volume($_GET["Raio"]);} ?>
        <p>*U: unidade de medida inserida</p>
    </form>
</body>
</html> 
