<!DOCTYPE html>
<html>
<head>
    <title>Estruturas de Repetição</title>
</head>
<body>
    <h2>Escolha um Exercício</h2>
    <form action="calcular.php" method="post">
        <label for="exercicio">Selecione um exercício:</label>
        <select name="exercicio" id="exercicio">
            <option value="1">Mensagem 5 vezes</option>
            <option value="2">Numeros de 0 a 10 (passo 1)</option>
            <option value="3">Numeros de 0 a 10 (passo 3)</option>
            <option value="4">Repetir palavra 10 vezes</option>
            <option value="5">Repetir palavra N vezes</option>
            <option value="6">Pares de 0 ate N</option>
            <option value="7">Pares de N ate 0</option>
            <option value="8">Tabuada</option>
            <option value="9">Contagem de 0 a N com intervalo</option>
            <option value="10">Contagem de N a 0 com intervalo</option>
        </select><br><br>

        <label for="palavra">Palavra/Frase:</label>
        <input type="text" id="palavra" name="palavra"><br><br>

        <label for="numero">Numero:</label>
        <input type="number" id="numero" name="numero"><br><br>

        <label for="intervalo">Intervalo:</label>
        <input type="number" id="intervalo" name="intervalo"><br><br>

        <input type="submit" value="Executar">
    </form>
</body>
</html>