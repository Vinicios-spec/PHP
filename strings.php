<?php
$resultado = "";

if (isset($_POST["enviar"])) {
    $frase = $_POST["frase"];

    // removendo espaços extras
    $fraseLimpa = trim($frase);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Exercício Strings PHP</title>
</head>

<body>
    <h2>Trabalhando com Strings</h2>
    <form method="post">
        Digite uma frase: <br><br>
        <input type="text" name="frase" size="40" required>
        <br><br>
        <button type="submit" name="enviar">Processar</button>
    </form>
    <br>
    <div>
        <?php echo $resultado; ?>
        <?php
        echo strlen($frase);
        echo '<br>';
        echo strtoupper($frase);
        echo '<br>';
        echo strtolower($frase);
        echo '<br>';
        echo ucwords($frase);
        ?>
    </div>
</body>

</html>