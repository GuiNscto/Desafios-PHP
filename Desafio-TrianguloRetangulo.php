<html>
<?php 
//O desafio consiste em imprimir um triangulo retangulo com o valor da base digitado na tela
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $base = $_POST['base'];
    for($i=1; $i <= $base; $i++) {
        for ($j = 1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
}
?>
<form method="POST" action="">
    <label>Escreva a base do triangulo retangulo </label>
 <input type="text" name="base" id="base"/>
    <input type="submit" />
</form>
</html>