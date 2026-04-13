<?php
// variável para armazenar o resultado
$resultado = "";
$numero = 0;
 
// verifica se o botão foi clicado
if(isset($_POST["jogar"])){
 
    // sorteia número de 1 a 10
    $numero = rand(1,100);
 
    // estrutura while (didática)
    while($numero < 1 || $numero > 100){
        $numero = rand(1,100);  
    }
 
    // verifica resultado
    if($numero == 7){
        $resultado = "Você ganhou!!! Número sorteado: ".$numero;
    } else {
        $resultado = "Tente novamente!! Número sorteado: ".$numero;
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Jogo do Número 7</title>
</head>
 
<body>
 
    <h2>Jogo: Acerte o Número 7</h2>
 
    <form method="post">
<button type="submit" name="jogar">Sortear Número</button>
</form>
 
    <p><?php echo $resultado; ?></p>
 
</body>
</html>