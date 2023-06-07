<!DOCTYPE html>
<html>
<head>
    <title>Intervalo de Números</title>
    <link rel="stylesheet" href="style1.css">
    <script>
        function atualizarValorRange(valor,name) {
            //função para atualizar os números no mostrador
            document.getElementById(name).textContent = valor;
        }
    </script>
</head>
<body>
    <h2>Intervalo de Números</h2>

    <form method="get">
        
        <label for="intervalo">Selecione o número inicial:</label><br>
        
        <!-- Valor inicial -->
        <input type="range" class="intervalo" name="valor-inicio" min="0" max="500" step="2" oninput="atualizarValorRange(this.value,this.name)" value = 10><br>
        <label for="intervalo">Selecione o número final:</label><br>
        
        <!-- Valor final -->
        <input type="range" class="intervalo" name="valor-fim" min="0" max="500" step="2" oninput="atualizarValorRange(this.value,this.name)" value= 500><br>
        
        <!-- Mostrador dos números de inicio e fim -->
        <p> De <a id="valor-inicio" class="valor">10</a> até <a id="valor-fim" class="valor">500 </a></p>

        <?php
        // Verificar se os valores são válidos
        if(isset($_GET['valor-fim'])&& isset($_GET['valor-inicio'])){
        
        // Definir as variáveis de inicio e fim
        $inicio = $_GET['valor-inicio'];
        $fim = $_GET['valor-fim']; 

        // Checar se o inicio e o fim condisem
        if ($inicio <= $fim){
        
        // Verifica se o valor é válido
        if($inicio % 2 == 1){
            
            // Se não for válido pegara o próximo valor
            $inicio++;}

        $sum = 0;

        // Será feita a soma dos pares
        for($i = $inicio; $i <= $fim; $i += 2){
            $sum += $i;}
        
        // Exibe a soma dos pares
        echo "Soma dos pares: ".$sum."<br>";}}
        ?>

        <!-- Cria o botão de exibir os valores pares e calcular a soma -->
        <input type="submit" value="Mostrar Números"id="enviar"><br><br>
        
        <?php
        // Verificar se os valores são válidos
        if(isset($_GET['valor-fim'])&& isset($_GET['valor-inicio'])){
        
        // Definir as variáveis de inicio e fim
        $inicio = $_GET['valor-inicio'];
        $fim = $_GET['valor-fim']; 
        
        // Checar se o inicio e o fim condisem e se é maior que zero
        if ($inicio <= $fim and $inicio >= 0){
            
            // Verifica se o valor é válido
            if($inicio % 2 == 1){

                // Se não for válido pegara o próximo valor
                $inicio++;
            }
            // Exibe os números pares
            echo "Números pares:<br>";

            // Gera os números para exibir
            for($i = $inicio; $i <= $fim; $i += 2){
                echo $i . "<br>";
            }
            }else{
                // Caso não for válido, exibe uma mensagem de alerta
                echo "<script>alert('Número inválido.')</script>";
            }
        }
        ?>
    </form>
</body>
</html>