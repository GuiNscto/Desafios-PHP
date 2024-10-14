<html>
<h2>Resolva a Equação de Segundo Grau (ax² + bx + c = 0)</h2>
    
    <form method="post">
        Coeficiente a: <input type="number" name="a" required><br><br>
        Coeficiente b: <input type="number" name="b" required><br><br>
        Coeficiente c: <input type="number" name="c" required><br><br>
        <input type="submit" value="Calcular">
    </form>
<?php 
//O desafio consiste em retornar o resultado de uma equacao de segundo grau
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $a = $_POST['a'];
   $b = $_POST['b'];
   $c = $_POST['c'];
   
   function EqSegundoGrau($a, $b, $c){
    $delta = ($b** 2) - (4*$a*$c);
    if($delta < 0){
        return "A equacao nao possui raizes reais";
    } elseif($delta == 0 && ($a == 0 && $b == 0)){
        $raiz = -$b / (2 * $a);
        return "A equacao possui apenas uma raiz: ". $raiz;
    } else {
        $equacao1 = (-$b + sqrt($delta)) / 2 * $a;
        $equacao2 = (-$b - sqrt($delta)) / 2 * $a;
        return "As raizes da equacao são: ". $equacao1 . " e ". $equacao2;
    }
    

   }
   echo "<H3>RESULTADO:</H3>";
   echo EqSegundoGrau($a, $b, $c);

}
?>

</html>