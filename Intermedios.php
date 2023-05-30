<!DOCTYPE html>
<html>
<head>
    <title>Intervalo de Números</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
    <script>
        function atualizarValorRange(valor) {
            document.getElementById("valor-range").textContent = valor;
        }
    </script>
</head>
<body>
    <h2>Intervalo de Números</h2>

    <form method="get">
        <label for="intervalo">Selecione o intervalo:</label><br>
        <input type="range" id="intervalo" name="intervalo" min="0" max="200" step="2" oninput="atualizarValorRange(this.value)"><br>
        <pre>De <p id="valor-range">100</p> até 200</pre>
        <input type="submit" value="Mostrar Números"id="enviar"><br><br>
        <?php
        if(isset($_GET['intervalo'])){
        $inicio = $_GET['intervalo'];
        if($inicio % 2 == 1){
            $inicio++;
        }
        for($i = $inicio; $i <= 200; $i += 2){
            echo $i . "<br>";
        }
        }?>
    </form>
</body>
</html>
