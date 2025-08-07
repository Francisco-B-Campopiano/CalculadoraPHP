<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h1>Calculadora
        </h1>
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Primeiro Número" required>
            <select name="operador" required>
                <option value="+">+</option>
                <option value="-">−</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="num2" step="any" placeholder=" Segundo Número" required>
            <button type="submit" name="calcular">Calcular</button>
        </form>

        <?php
        if (isset($_POST['calcular'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operador = $_POST['operador'];

            switch ($operador) {
                case '+':
                    $resultado = $num1 + $num2;
                    break;
                case '-':
                    $resultado = $num1 - $num2;
                    break;
                case '*':
                    $resultado = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Erro: divisão por zero!";
                    }
                    break;
                default:
                    $resultado = "Operador inválido.";
                    break;
            }

            echo "<div class='result'>Resultado: <strong>$resultado</strong></div>";
        }
        ?>
    </div>
</body>
</html>
